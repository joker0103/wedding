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
                  ->select();
        $this->assign('info', $info);
        return $this->display();
    }

    public function add()
    {
        $w = M('Wedding');
        $wed = $w->limit(30)->select();
        $this->assign('wed', $wed);
        return $this->display();
    }

    public function added()
    {
        $_POST['send_date'] = time();
        $a = M('Article');
        if ($a->create()) {
            if ($a->add()){
                return $this->success('添加成功', U('add'), 3);
            } else {
                return $this->success('添加失败', U('add'), 3);
            }
        }
        return $this->error('添加存在问题', U('add'), 3);
    }
}