<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/18
 * Time: 20:25
 */
namespace Admin\Controller;

use Think\Controller;

class BlogController extends CommonController
{
    public function index()
    {
        $a = M('Article');
        $info = $a->field('wed_article . *, wed_user . name, wed_user . has_avatar, wed_user . avatar, wed_address . address_name, wed_wedding . bride, wed_wedding . bridegroom')
                  ->join('left join wed_user on wed_article . author = wed_user . id')
                  ->join('left join wed_wedding on wed_article . wedding = wed_wedding . id')
                  ->join('left join wed_address on wed_wedding . address = wed_address . id')
                  ->order('id desc')
                  ->select();
        $this->assign('info', $info);
        return $this->display();
    }

    public function add()
    {
        $w = M('Wedding');
        $wed = $w->select();
        $this->assign('wed', $wed);
        return $this->display();
    }

    public function added()
    {
        $_POST['send_date'] = time();
        $a = M('Article');
        if ($a->add($_POST)){
                return $this->success('添加成功', U('add'), 3);
        } else {
                return $this->success('添加失败', U('add'), 3);
        }
    }

    //文章页面
    public function article()
    {
        $id = I('get.id');
        $a = M('Article');
        $info = $a->field('wed_article . *, wed_wedding . *, wed_address . address_name, wed_user . name')
                  ->join('left join wed_wedding on wed_article . wedding = wed_wedding . id')
                  ->join('left join wed_address on wed_wedding . address = wed_address . id')
                  ->join('left join wed_user on wed_article . author = wed_user . id')
                  ->where('wed_article . id ='.$id)
                  ->find();
        $info['content'] = htmlspecialchars_decode($info['content']);
        $this->assign('info', $info);
        return $this->display();
    }

    //文章删除
    public function del()
    {
        $id = I('get.id');
        if (M('Article')->where('id = '.$id)->delete()){
            return header('location:/index.php/Admin/Blog/index');
        }
        return $this->error('删除失败', U('index'));
    }

    //修改
    public function edit()
    {
        $id = I('get.id');
        $wed = M('Wedding')->select();
        $article = M('Article')->where('id = '. $id)->find();
        $address = M('Address')->select();
        $article['content'] = htmlspecialchars_decode($article['content']);
        $this->assign('wed', $wed);
        $this->assign('article', $article);
        $this->assign('address', $address);
        return $this->display();
    }

    public function edited()
    {
        $a = M('Article');
        $_POST['send_date'] = time();
        if ($a->save($_POST)){
            return $this->success('保存成功', U('index'), 3);
        } else {
            return $this->success('保存失败', U('index'), 3);
        }
    }
}