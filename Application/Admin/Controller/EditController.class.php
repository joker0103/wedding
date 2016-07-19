<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/18
 * Time: 18:56
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;

class EditController extends CommonController
{
    //编辑个人资料
    public function profile()
    {
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
    
    //修改头像
    public function avatar()
    {
        return $this->display();
    }

    public function avatared()
    {
        $u = M('User');
        $config = [
            'rootPath'=>WORK_PATH.UPLOAD_PATH,
            'exts'=>['png', 'jpg', 'jpeg', 'gif'],
        ];
        $upload = new Upload($config);
        $info = $upload->upload();
            if ($info) {
                $save = [
                    'id' => session('id'),
                    'has_avatar' => 1,
                    'avatar' => UPLOAD_PATH .$info['filepath']['savepath'] . $info['filepath']['savename'],
                ];
                $u->save($save);
                session('has_avatar', $save['has_avatar']);
                session('avatar', '' . $save['avatar']);
                $url = U('Core/index');
                echo "<script>top.location.href = '$url';</script>";
                exit;
            } else {
                return $this->error('保存失败', U('avatar'));
            }
    }
}
