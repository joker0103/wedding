<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/18
 * Time: 20:25
 */
namespace Admin\Controller;

use Think\Controller;

class BlogController extends Controller
{
    public function index()
    {
        authority();
        return $this->display();
    }

    public function add()
    {
        return $this->display();
    }
}