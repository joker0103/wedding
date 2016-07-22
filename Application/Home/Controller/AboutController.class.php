<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/21
 * Time: 21:44
 */
namespace Home\Controller;

use Think\Controller;

class AboutController extends Controller
{
    public function about()
    {
        return $this->display();
    }
}