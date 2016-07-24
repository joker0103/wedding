<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/18
 * Time: 8:46
 */
namespace Home\Controller;

use Think\Controller;

class PublicController extends CommonController
{
    public function header()
    {
        return $this->display();
    }

    public function footer()
    {
        return $this->display();
    }

    public function sidebar()
    {
        return $this->display();
    }
}