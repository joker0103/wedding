<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/20
 * Time: 17:57
 */
namespace Admin\Controller;

class UserController extends CommonController
{
    public function index()
    {
        $u = M('User');
        $info = $u->field('wed_user . *, wed_user_position . position_name, wed_user_status . status_name')
                  ->join('left join wed_user_position on wed_user . position = wed_user_position . id')
                  ->join('left join wed_user_status on wed_user .status = wed_user_status . id')
                   ->order('id desc')
                  ->select();
        $this->assign('info', $info);
        return $this->display();
    }

    //入职
    public function add()
    {
        $s = M('User_status')->select();
        $p =M('User_position')->select();
        $this->assign('status', $s);
        $this->assign('position', $p);
        return $this->display();
    }

    public function added()
    {
        $_POST['join_time'] = time();
        $_POST['password'] = md5($_POST['password']);
        $w = M('User');
        if ($w->create()) {
            if ($w->add()) {
                $url = U('index');
                echo "<script>top.location.href='$url';</script>";
                exit;
            }
        }
        return $this->error('添加失败', U('add'));
    }

    //修改
    public function edit()
    {
        $u = M('User')->where(I('get.'))->find();
        $s = M('User_status')->select();
        $p =M('User_position')->select();
        $this->assign('user', $u);
        $this->assign('status', $s);
        $this->assign('position', $p);
        return $this->display();
    }

    public function edited()
    {
        $u = M('User');
        if ($u->create()) {
            if ($u->save()) {
                $url = U('index');
                echo "<script>top.location.href='$url';</script>";
                exit;
            }
        }
        return $this->error('修改失败', U("User/edit"));
    }

    public function del()
    {
        $id = I('get.id');
       if(M('User')->where('id='.$id)->delete()) {
           $url = U('index');
           echo "<script>top.location.href='$url';</script>";
           exit;
       }
        return $this->error('删除失败', U("index"));
    }
}