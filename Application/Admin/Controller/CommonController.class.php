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
        $url = U('Index/index');
        if (empty($id)) {
            echo "<script>top.location.href='$url'</script>";
            return;
        }
        $controller = strtolower(CONTROLLER_NAME);
        $action = strtolower(ACTION_NAME);
        $ac = $controller . '/' . $action;
        $authority = session('authority');
        $auths = C('RBAC_AUTHS');
        $auth = $auths[$authority];
        if ($authority != 2) {
            if (!in_array($ac, $auth) && !in_array($controller . '/*', $auth)) {
                $au_return = U('Core/index');
                echo "<script>top.location.href='$au_return'</script>";
                exit;
            }
        }
    }
}