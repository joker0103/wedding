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
        $url = '/index.php/Admin/Ourhistory/add';
        if ($post['type'] == 1){
            $url .='/type/1';
            unset($post['type']);
            $post['time'] = strtotime($post['time']);
            if (M('Ourhistory')->add($post) === false){
                return $this->error('添加失败', $url);
            }
        } elseif ($post['type'] == 2) {
            $url .='/type/2';
            unset($post['type']);
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
            if (M('Oursynopsis')->add($post) === false) {
                return $this->error('添加失败', $url);
            }
        } elseif ($post['type'] == 3) {
            $url .='/type/3';
            unset($post['type']);
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
            if (M('Personal')->add($post) === false) {
                return $this->error('添加失败', $url);
            }
        }
        return header('location:/index.php/Admin/Ourhistory/index');
    }

    //编辑部分
    public function Edit()
    {
        $edit = I('get.edit');
        $id = I('get.id');
        //dump($edit);dump($id);exit;
        if ($edit == 1) {
            $history = M('Ourhistory')->where('id = '.$id)->find();
            $this->assign('history', $history);
        } elseif ($edit == 2) {
            $synopsis = M('Oursynopsis')->where('id = '.$id)->find();
            $synopsis['tenet'] = htmlspecialchars_decode($synopsis['tenet']);
            $this->assign('synopsis', $synopsis);
        } elseif ($edit == 3) {
            $personal = M('Personal')->where('id = '.$id)->find();
            $user = M('User')->select();
            $this->assign('personal', $personal);
            $this->assign('user', $user);
        }
        //输出部分
        $this->assign('edit', $edit);
        $this->assign('id', $id);
        return $this->display();
    }

    public function edited()
    {
        $post = I('post.');
        $url = '/index.php/Admin/Ourhistory/Edit';
        //dump($_POST);dump($_FILES);exit;
        if ($post['edit'] == 1){
            $url .='/edit/1/id/'.$post['id'];
            unset($post['edit']);
            $post['time'] = strtotime($post['time']);
            if (M('Ourhistory')->save($post) === false){
                return $this->error('保存失败', $url);
            }
        } elseif ($post['edit'] == 2) {
            $url .='/edit/2/id/'.$post['id'];
            unset($post['edit']);
            if (!empty($_FILES['synopsis_photo']['tmp_name'])){
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
            }
            if (M('Oursynopsis')->save($post) === false) {
                return $this->error('保存失败', $url);
            }
        } elseif ($post['edit'] == 3) {
            $url .='/edit/3/id/'.$post['id'];
            unset($post['edit']);
            if (!empty($_FILES['photo']['tmp_name'])){
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
            }
            if (M('Personal')->save($post) === false) {
                return $this->error('保存失败', $url);
            }
        }
        return header('location:/index.php/Admin/Ourhistory/index');
    }
}