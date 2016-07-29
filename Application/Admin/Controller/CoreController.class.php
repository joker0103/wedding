<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/19
 * Time: 8:22
 */
namespace Admin\Controller;

use Think\Controller;

class CoreController extends CommonController
{
    public function index()
    {
        $name = session('name');
        $new = M('Customer_massage')->where("wed_customer_massage . to_name = '{$name}' and wed_customer_massage . status = 0 and real_del = 0")->count();
        $this->assign('new', $new);
        return $this->display();
    }

    public function fresh()
    {
        $name = session('name');
        $new = M('Customer_massage')->where("wed_customer_massage . to_name = '{$name}' and wed_customer_massage . status = 0 and real_del = 0")->count();
        $this->assign('new', $new);
        return $this->display();
    }

    //图表
    public function graph()
    {
        return $this->display();
    }

    //退出
    public function logout()
    {
        session(null);
        $url = U('Index/index');
        echo "<script>top.location.href='$url';</script>";
        exit;
    }
}