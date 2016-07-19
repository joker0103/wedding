<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/18
 * Time: 18:51
 */
namespace Admin\Controller;
use Think\Controller;

class PublicController extends Controller
{
    public function header()
    {
        return $this->display();
    }

    public function footer()
    {
        return $this->display();
    }

    public function js()
    {
        return $this->display();
    }
}