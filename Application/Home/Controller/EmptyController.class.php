<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/29
 * Time: 20:34
 */
namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller
{
    public function _empty()
    {
        return header('location:/index.php');
    }
}