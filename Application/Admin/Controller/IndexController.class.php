<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Verify;

class IndexController extends Controller
{
    public function _initialize()
    {
        $id = session('id');
        $url = U('Core/index');
        if (!empty($id)) {
            echo "<script>top.location.href='$url';</script>";
            exit;
        }
    }
    public function index()
    {
        return $this->display();
    }
    //验证码
    public function captcha()
    {
        $config = [
            'fontSize'  =>  16,              // 验证码字体大小(px)
            'useCurve'  =>  false,            // 是否画混淆曲线
            'useNoise'  =>  true,            // 是否添加杂点
            'imageH'    =>  0,               // 验证码图片高度
            'imageW'    =>  231,               // 验证码图片宽度
            'length'    =>  6,               // 验证码位数
            'fontttf'   =>  '',              // 验证码字体，不设置随机获取
        ];
        $captcha = new Verify($config);
        return $captcha->entry();
    }
    //验证
    public function check()
    {
        $captcha = new Verify();
        $post = I('post.');
        if (!$captcha->check($post['captcha'])) {
            session('massage', '验证码不正确');
            return $this->display('index');
        }
        unset($post['captcha']);
        $post['password'] = md5($post['password']);
        $u = M('User');
        if ($data = $u->where($post)->find()) {
            session('massage',null);
            //获取用户信息
            $p = M('User_position')->where('id = '.$data['position'])->find();
            $position = $p['position_name'];
            session('id', $data['id']);
            session('name', $data['name']);
            session('avatar', $data['avatar']);
            session('has_avatar', $data['has_avatar']);
            session('position', $position);
            session('maxim', $data['maxim']);
            session('authority', $data['authority']);
            session('mobile_number', $data['mobile_number']);
            $data['last_time'] = time();
            $u->save($data);
            $url = U('Core/index');
            echo "<script>top.location.href='$url';</script>";
            exit;
        } else {
            session('massage', '用户名或密码不正确');
            return $this->display('index');
        }
    }

}