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
        //$timestamp = time();
        //$token = md5('unique_salt' . $timestamp);
        session('wedding_id', I('get.id'));
        $photo = M('Photo_store')->where('from_id = ' . session('wedding_id'))->select();
        $wedding = M('Wedding')->where('id = ' . session('wedding_id'))->find();
        $p = json_encode($photo);
        //$this->assign('timestamp', $timestamp);
        $this->assign('wedding', $wedding);
        //$this->assign('token', $token);
        $this->assign('p', $p);
        return $this->display();
    }

    //上传部分
    public function upload()
    {
        //判断文件是否
        if (empty($_FILES)) {
            return header('location:/index.php/Admin/Picture/index');
        }
        $arr_ext = ['png', 'gif', 'jpg', 'jpeg'];
		$file_ext = pathinfo($_FILES['Filedata']['name'], PATHINFO_EXTENSION);
		if (!in_array($file_ext, $arr_ext)) {
			exit('文件类型不合法');
		}
        $arr_mime = ['image/jpeg', 'image/png', 'image/gif'];
        $finfo = finfo_open(FILEINFO_MIME);
        $mime = finfo_file($finfo, $_FILES['Filedata']['tmp_name']);
        $file_mime = explode(';', $mime);
        if (!in_array($file_mime[0], $arr_mime)) {
            return header('location:/index.php/Admin/Picture/index');
        }
        //$files = htmlspecialchars_decode($_FILES);
/*        $files = $_FILES;
        dump($files);
        die;*/
        //生成随机统一资源定位器；
        $urlArr = ['http://www.self.com/', 'http://www.pro.com/', 'http://www.weddingd.com/'];
        $index = time();
        $index = $index % 3;
        $url = $urlArr[$index];
        //$url = 'http://www.self.com/';
        //生成图片路径
        $timestamp = time();
        $mytoken = md5("self_code{$timestamp}");
        $data = [
            //'file' => '@' . $_FILES['Filedata'],
            //'file' => '@' . realpath($_FILES['Filedata']['tmp_name']) . $_FILES['Filedata']['name'],
            //'path'=> realpath($_FILES['Filedata']['tmp_name']),
            //'tmp_name' => '@' . substr(str_replace('\\', '/', $_FILES['Filedata']['tmp_name']), 2),
            //'tmp_name'=>'@D:/wedding/Public/Home/images/1.jpg',
            //'name' => $_FILES['Filedata']['name'],
            'file' => '@' . $_FILES['Filedata']['tmp_name'],
            'ext' => $file_ext,
            'time' => $timestamp,
            'token' => $mytoken,
        ];
//dump($data);die();
        //curl请求；
        $push = curl_init($url);
        //$push = curl_init();
        //curl_setopt($push, CURLOPT_INFILESIZE, 100000);
        curl_setopt($push, CURLOPT_SAFE_UPLOAD, false);
        curl_setopt($push, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($push, CURLOPT_POST, true);
        //curl_setopt($push, CURLOPT_INFILE, $_FILES['Filedata']['tmp_name']);
        //curl_setopt($push, CURLOPT_UPLOAD, true);
        curl_setopt($push, CURLOPT_HEADER, false);
        curl_setopt($push, CURLOPT_POSTFIELDS, $data);
        $return = curl_exec($push);
        curl_close($push);
        //echo $return;die;
        $info = $url . $return;
        //数据添加并输出操作
        $add = [
            'author_id'=>session('id'),
            'file_path'=> $info,
            'from_id'=>session('wedding_id'),
        ];
        $p = M('Photo_store');
        $p->add($add);
        $photo = M('Photo_store')->where('from_id = ' . session('wedding_id'))->select();
        return $this->ajaxReturn($photo);
        //curl_setopt()
/*        $config = [
            //'rootPath'=>WORK_PATH . UPLOAD_PATH,
            'rootPath'=>'/../self/images/',
            //'rootPath'=>'127.0.0.1/'
            'exts'    =>['jpg','jpeg','gif','png'],
        ];
        $upload = new Upload($config);
        $info = $upload->upload();
        if ($info) {
            $add = [
                'author_id'=>session('id'),
                //'file_path'=>UPLOAD_PATH . $info['Filedata']['savepath'] . $info['Filedata']['savename'],
                'file_path'=>'http://www.self.com/images/' . $info['Filedata']['savepath'] . $info['Filedata']['savename'],
                'from_id'=>session('wedding_id'),
            ];
            $p = M('Photo_store');
            $p->add($add);
        }
        $photo = M('Photo_store')->where('from_id = ' . session('wedding_id'))->select();
        return $this->ajaxReturn($photo);*/
    }
}