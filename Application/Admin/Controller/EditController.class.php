<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/18
 * Time: 18:56
 */
namespace Admin\Controller;
use Think\Controller;

class EditController extends Controller
{
    //编辑个人资料
    public function profile()
    {
        authority();
        return $this->display();
    }

    public function saveProfile()
    {
        $u = M('User');
        $data = $u->create();
        //存入session
        session('id', $data['id']);
        session('name', $data['name']);
        session('maxim', $data['maxim']);
        session('mobile_number', $data['mobile_number']);
        if ($u->save()){
            return $this->success('修改成功', U('profile'), 3);
        } else {
            return $this->error('修改失败', U('profile'), 3);
        }
    }

}