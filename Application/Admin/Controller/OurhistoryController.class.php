<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/23
 * Time: 16:33
 */
namespace Admin\Controller;
use Think\Upload;

class OurhistoryController extends CommonController
{
    public function index()
    {
        $history =M('Ourhistory')->order('id desc')->select();
        $synopsis = M('Oursynopsis')->order('id desc')->select();
        $personal = M('Personal')->field('wed_personal . *, wed_user . name')
            ->join('left join wed_user on wed_personal . uid = wed_user . id')
            ->order('wed_personal . id desc')
            ->select();
        for ($i = 0, $count = count($synopsis); $i < $count; ++$i){
            $synopsis[$i]['tenet'] = strip_tags(htmlspecialchars_decode($synopsis[$i]['tenet']));
        }
        //显示部分
        //dump($history);echo '<br>';dump($synopsis);echo '<br>';dump($personal);exit;
        $this->assign('history', $history);
        $this->assign('synopsis', $synopsis);
        $this->assign('personal', $personal);
        return $this->display();
    }

    //添加
    public function add()
    {
        $type = I('get.type');
        if ($type == 3) {
            $user = M('User')->field('wed_user . id, wed_user . name')->select();
            $this->assign('user', $user);
        }
        $this->assign('type', $type);
        return $this->display();
    }

    public function added()
    {
        $post = I('post.');
        $url = U('add');
        if ($post['type'] == 1){
            $url .='/type/1';
            unset($post['type']);
            $this->type1($post, $url);
        } elseif ($post['type'] == 2) {
            $url .='/type/2';
            unset($post['type']);
            $this->type2($post, $url);
        } elseif ($post['type'] == 3) {
            $url .='/type/3';
            unset($post['type']);
            $this->type3($post, $url);
        }
        return header('location:/index.php/Admin/Ourhistory/index');
    }
    //type部分
    public function type1($post = array(), $url)
    {
        $post['time'] = strtotime($post['time']);
        if (!M('Ourhistory')->add($post)){
            return $this->error('添加失败', $url);
        }
    }

    public function type2($post = array(), $url)
    {
        $config = [
            'rootPath'=>WORK_PATH . UPLOAD_PATH,
            'exts'=>['png', 'jpg', 'jpeg', 'gif'],
        ];
        $upload = new Upload($config);
        $info = $upload->upload();
        if (!$info) {
            return $this->error('上传失败', $url);
        }
        $post['synopsis_photo'] = UPLOAD_PATH . $info['synopsis_photo']['savepath'] . $info['synopsis_photo']['savename'];
        if (!M('Oursynopsis')->add($post)) {
            return $this->error('添加失败', $url);
        }
    }

    public function type3($post = array(), $url)
    {
        $config = [
            'rootPath'=>WORK_PATH . UPLOAD_PATH,
            'exts'=>['png', 'jpg', 'jpeg', 'gif'],
        ];
        $upload = new Upload($config);
        $info = $upload->upload();
        if (!$info) {
            return $this->error('上传失败', $url);
        }
        $post['photo'] = UPLOAD_PATH . $info['photo']['savepath'] . $info['photo']['savename'];
        if (!M('Personal')->add($post)) {
            return $this->error('添加失败', $url);
        }
    }
}