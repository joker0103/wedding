<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/18
 * Time: 10:20
 */
namespace Home\Controller;

use Think\Controller;

class TopController extends Controller
{
    public function index()
    {
        return $this->display();
    }
}