<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/19
 * Time: 14:59
 */
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function _initialize()
    {
        $id = session('id');
        $url =U('Index/index');
        if (empty($id)) {
            echo "<script>top.location.href='$url'</script>";
            return;
        }
    }
}