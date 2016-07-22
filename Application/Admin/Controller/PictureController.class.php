<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/21
 * Time: 12:59
 */
namespace Admin\Controller;
use Think\Upload;

class PictureController extends CommonController
{
    public function index()
    {
        $wed = M('Wedding')->field('wed_wedding . *, wed_address . address_name, count(wed_photo_store . id) count, wed_photo_store . file_path photo')
                          ->join('left join wed_address on wed_wedding . address = wed_address . id')
                           ->join('left join wed_photo_store on wed_photo_store . from_id = wed_wedding . id')
                           ->where('wed_wedding .status = 3')
                           ->order('id desc')
                           ->group('wed_wedding . id')
                           ->select();
        $this->assign('wed', $wed);
        return $this->display();
    }

    //相册
    public function pictures()
    {
        //uploadify的token验证
        $timestamp = time();
        $token = md5('unique_salt' . $timestamp);
        session('wedding_id', I('get.id'));
        $photo = M('Photo_store')->where('from_id = ' . session('wedding_id'))->select();
        $p = json_encode($photo);
        $this->assign('timestamp', $timestamp);
        $this->assign('token', $token);
        $this->assign('p', $p);
        return $this->display();
    }

    //上传部分
    public function upload()
    {
        $config = [
            'rootPath'=>WORK_PATH . UPLOAD_PATH,
            'exts'    =>['jpg','jpeg','gif','png'],
        ];
        $upload = new Upload($config);
        $info = $upload->upload();
        if ($info) {
            $add = [
                'author_id'=>session('id'),
                'file_path'=>UPLOAD_PATH . $info['Filedata']['savepath'] . $info['Filedata']['savename'],
                'from_id'=>session('wedding_id'),
            ];
            $p = M('Photo_store');
            $p->add($add);
        }
        $photo = M('Photo_store')->where('from_id = ' . session('wedding_id'))->select();
        echo $p = json_encode($photo);

/*        $targetFolder = UPLOAD_PATH; // Relative to the root

        $verifyToken = md5('unique_salt' . $_POST['timestamp']);

        if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
            $targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];

            // Validate the file type
            $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);

            if (in_array($fileParts['extension'],$fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);

            } else {
                echo 'Invalid file type.';
            }
        }*/
    }
}