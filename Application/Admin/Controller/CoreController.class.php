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
        return $this->display();
    }

    public function fresh()
    {
        return $this->display();
    }
}