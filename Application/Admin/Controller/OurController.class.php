<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/27
 * Time: 18:03
 */
namespace Admin\Controller;
class OurController extends CommonController
{
    public function index()
    {
        $Caddress = M('Company_address');
        $info = $Caddress->order('id desc')->select();
        $this->assign('info', $info);
        return $this->display();
    }

    public function add()
    {
        return $this->display();
    }

    public function added()
    {
        $post = I('post.');
        $Caddress = M('Company_address');
        if ($Caddress->add($post)) {
            return header('location:/index.php/Admin/Our/index');
        } else {
            return $this->error('添加失败', U('add'));
        }
    }
}