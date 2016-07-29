<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/27
 * Time: 21:46
 */
namespace Admin\Controller;
class MailController extends CommonController
{
    public function index()
    {
        $m = M('Customer_massage');
        $name = session('name');
        $type = I('get.type');
        $new = $m->where("wed_customer_massage . to_name = '{$name}' and wed_customer_massage . status = 0 and real_del = 0")->count();
        if (empty($type) || $type == 'got') {
            session('theMail', 1);
            $choose = '收件箱';
            $massage = $m->field('wed_customer_massage . id, wed_customer_massage . status, wed_customer_massage . c_title, wed_customer_massage . send_date, wed_customer_massage . hasfile, wed_user . name')
                ->join('left join wed_user on wed_customer_massage . from_id = wed_user . id')
                ->where("wed_customer_massage . to_name = '{$name}' and wed_customer_massage . status <> 2 and real_del = 0")
                ->order('wed_customer_massage . id desc')
                ->select();
            $customer = $m->field('wed_customer_massage . id, wed_customer_massage . status, wed_customer_massage . c_title, wed_customer_massage . send_date, wed_customer_massage . c_ip')
                ->where('is_customer = 1 and status <> 2 and real_del = 0')
                ->order('wed_customer_massage . id desc')
                ->select();
            $this->assign('customer', $customer);
        } elseif ($type == 'sent') {
            $id = session('id');
            $massage = $m->field('wed_customer_massage . id, wed_customer_massage . status, wed_customer_massage . c_title, wed_customer_massage . send_date, wed_customer_massage . hasfile, wed_customer_massage . to_name name')
                ->join('left join wed_user on wed_customer_massage . from_id = wed_user . id')
                ->where("wed_customer_massage . from_id = {$id} and wed_customer_massage . my_status = 0 and real_del = 0")
                ->order('wed_customer_massage . id desc')
                ->select();
            $choose = '发件箱';
            session('theMail', 2);
        } elseif ($type == 'threw') {
            $name = session('name');
            $massage = $m->field('wed_customer_massage . id, wed_customer_massage . status, wed_customer_massage . c_title, wed_customer_massage . send_date, wed_customer_massage . hasfile, wed_user . name')
                ->join('left join wed_user on wed_customer_massage . from_id = wed_user . id')
                ->where("wed_customer_massage . to_name = '{$name}' and wed_customer_massage . status = 2 and real_del = 0")
                ->order('wed_customer_massage . id desc')
                ->select();
            $customer = $m->field('wed_customer_massage . id, wed_customer_massage . status, wed_customer_massage . c_title, wed_customer_massage . send_date, wed_customer_massage . c_ip')
                ->where('is_customer = 1 and status = 2 and real_del = 0')
                ->order('wed_customer_massage . id desc')
                ->select();
            $this->assign('customer', $customer);
            $choose = '垃圾箱';
            session('theMail', 3);
        }

        //$c = long2ip(2130706433);
        //dump($c);exit();
        //dump($massage);exit();
        $this->assign('new', $new);
        $this->assign('choose', $choose);
        $this->assign('massage', $massage);
        return $this->display();
    }

    public function mail_compose()
    {
        //dump($_SESSION);exit();
/*        $path = date('Y-m-d', time());
        $targetFolder = WORK_PATH . UPLOAD_PATH;
        $dir = $targetFolder . $path . '/';
        mkdir($dir);
        dump($dir);
        dump($path);
        dump($targetFolder);
        dump($_SERVER['DOCUMENT_ROOT']);exit();*/
        return $this->display();
    }

    public function mail_detail()
    {
        $m = M('Customer_massage');
        $type = I('get.type');
        $id = I('get.id');
        $save = [
            'id'=>$id,
            'status'=>1,
        ];
        $m->save($save);
        if ($type == 1) {
            $massage = $m->field('id, c_name, c_email, c_title, c_content, send_date, c_ip')->where('id = ' . $id)->find();
            $massage['c_content'] = htmlspecialchars_decode($massage['c_content']);
            $massage['c_ip'] = long2ip($massage['c_ip']);

        } elseif ($type == 2) {
            $massage = $m->field('wed_customer_massage . *, wed_user . name')
                ->join('left join wed_user on wed_customer_massage . from_id = wed_user . id')
                ->where('wed_customer_massage . id = ' . $id)->find();
            $massage['c_content'] = htmlspecialchars_decode($massage['c_content']);
            $s = M('Send_file');
            $count = $s->where('from_massage = ' . $id)->count();
            $file = $s->where('from_massage = ' . $id)->select();
            $this->assign('count', $count);
            $this->assign('file', $file);
        }
        $this->assign('type', $type);
        $this->assign('massage', $massage);
        return $this->display();
    }
    
    //发送邮件
    public function send()
    {
        $massage = M('Customer_massage');
        $post = I('post.');
        if (!empty($_SESSION['img'])) {
            $post['hasfile'] = 1;
        }
        $post['send_date'] = time();
        $post['c_ip'] = sprintf('%u', ip2long($_SERVER['REMOTE_ADDR']));
        if ($massage->add($post)) {
            $send_file['from_massage'] = $massage->max('id');
            $file = M('Send_file');
            foreach ($_SESSION['img'] as $v) {
                $send_file['file_path'] = $v;
                $send_file['file_name'] = explode('/', $v)[5];
                if ($file->add($send_file)) {
                    session('img', null);
                }
            }
        }
        return header('location:/index.php/Admin/Mail/index');
    }

    //附件缓存
    public function upload()
    {
        $path = date('Y-m-d', time());
        $targetFolder = WORK_PATH . UPLOAD_PATH;
        $dir = $targetFolder . $path . '/';
        if (!file_exists($dir)) {
            mkdir($dir);
        }
        $arr = ['png', 'jpeg', 'jpg', 'gif'];
        $tempFile = $_FILES['Filedata']['tmp_name'];
        //$targetPath = $targetFolder;
        $targetFile = $dir . $_FILES['Filedata']['name'];
        //$fileParts = pathinfo($_FILES['Filedata']['name']);
        $img = UPLOAD_PATH . $path .'/' .$_FILES['Filedata']['name'];
        move_uploaded_file($tempFile,$targetFile);
/*        if (in_array(finfo_open($img), $arr)) {
            $img = '/Public/Admin/img/null.jpg';
        }*/
        $_SESSION['img'][] = $img;
        echo $img;
    }

    //删除发送邮件
    public function myDelOne()
    {
        $save = [
            'id'=>I('get.id'),
            'my_status'=>1,
        ];
        if (M('Customer_massage')->save($save)) {
            return header('location:/index.php/Admin/Mail/index');
        } else {
            return $this->error('删除失败', U('index'));
        }
    }
    public function myDel()
    {
        $ids = I('get.ids');
        //dump($ids);exit;
        $save = [
            'my_status'=>2,
        ];
        if (M('Customer_massage')->where("id in($ids)")->save($save)) {
            return header('location:/index.php/Admin/Mail/index');
        } else {
            return $this->error('删除失败', U('index'));
        }
    }

    //删除接收邮件
    public function delOne()
    {
        $save = [
            'id'=>I('get.id'),
            'status'=>2,
        ];
        if (M('Customer_massage')->save($save)) {
            return header('location:/index.php/Admin/Mail/index');
        } else {
            return $this->error('删除失败', U('index'));
        }
    }
    public function del()
    {
        $ids = I('get.ids');
        $save = [
            'status'=>2,
        ];
        //dump($ids);exit;
/*        if (M('Customer_massage')->save($save)) {
            return header('location:/index.php/Admin/Mail/index');
        } else {
            return $this->error('删除失败', U('index'));
        }*/
        if (M('Customer_massage')->where("id in($ids)")->save($save)) {
            return header('location:/index.php/Admin/Mail/index');
        } else {
            return $this->error('删除失败', U('index'));
        }
    }

    //真实删除
    public function realDelOne()
    {
        $save = [
            'id'=>I('get.id'),
            'real_del'=>1,
        ];
        if (M('Customer_massage')->save($save)) {
            return header('location:/index.php/Admin/Mail/index');
        } else {
            return $this->error('删除失败', U('index'));
        }
    }
    public function realDel()
    {
        $ids = I('get.ids');
        //dump($ids);exit;
        $save = [
            'real_del'=>1,
        ];
/*        if (M('Customer_massage')->save($save)) {
            return header('location:/index.php/Admin/Mail/index');
        } else {
            return $this->error('删除失败', U('index'));
        }*/
        if (M('Customer_massage')->where("id in($ids)")->save($save)) {
            return header('location:/index.php/Admin/Mail/index');
        } else {
            return $this->error('删除失败', U('index'));
        }
    }

    public function readed()
    {
        $ids = I('get.ids');
        //dump($ids);exit;
        $save = [
            'status'=>1,
        ];
        /*        if (M('Customer_massage')->save($save)) {
                    return header('location:/index.php/Admin/Mail/index');
                } else {
                    return $this->error('删除失败', U('index'));
                }*/
        if (M('Customer_massage')->where("id in($ids)")->save($save)) {
            return header('location:/index.php/Admin/Mail/index');
        } else {
            return $this->error('删除失败', U('index'));
        }
    }

    public function mailCount()
    {
        $name = session('name');
        $m = M('Customer_massage')->where("wed_customer_massage . to_name = '{$name}' and wed_customer_massage . status = 0 and real_del = 0")->count();
        echo $m;
    }

    public function downLoad()
    {
        $id = I('get.id');
        $path = M('Send_file')->find($id);
        $file = WORK_PATH . $path['file_path'];
        header("Content-type: application/octet-stream");
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header("Content-Length: ". filesize($file));
        readfile($file);

    }
}