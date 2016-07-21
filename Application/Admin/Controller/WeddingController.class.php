<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/20
 * Time: 10:53
 */
namespace Admin\Controller;

class WeddingController extends CommonController
{
    public function index()
    {
        $w = M('Wedding');
        $info = $w->field('wed_wedding . * , wed_address . address_name, wed_wedding_status . status_name')
                  ->join('left join wed_address on wed_wedding . address = wed_address . id')
                  ->join('left join wed_wedding_status on wed_wedding . status = wed_wedding_status . id')
                  ->order('id desc')
                  ->select();
        $this->assign('info', $info);
        return $this->display();
    }

    //添加
    public function add()
    {
        $s = M('Wedding_status')->select();
        $a =M('Address')->select();
        $this->assign('status', $s);
        $this->assign('address', $a);
        return $this->display();
    }

    public function added()
    {
        $_POST['wedding_date'] = strtotime($_POST['wedding_date']);
        $w = M('Wedding');
        if ($w->create()) {
            if ($w->add()) {
                return $this->success('添加成功', U('index'));
            }
        }
        return $this->error('添加失败', U('add'));
    }

    //修改
    public function edit()
    {
        $w = M('Wedding')->where(I('get.'))->find();
        $s = M('Wedding_status')->select();
        $a =M('Address')->select();
        $this->assign('wedding', $w);
        $this->assign('status', $s);
        $this->assign('address', $a);
        return $this->display();
    }

    public function edited()
    {
        $_POST['wedding_date'] = strtotime($_POST['wedding_date']);
        $id = $_POST['id'];
        $w = M('Wedding');
        //dump($w->create());
        if ($w->create()) {
            if ($w->save()) {
                return $this->success('保存成功', U('index'));
            }
        }
        return $this->error('保存失败', U("Wedding/edit"));
    }

    //删除
    public function del()
    {
        $id = I('get.id');
        if (M('Wedding')->where('id='.$id)->delete()) {
            return header('location:/index.php/Admin/Wedding/index');
        }
        return $this->error('删除失败',U('index'));
    }

    //显示
    public function show()
    {
        $info = M('Wedding')->where('id='.$_GET['id'])->find();
        echo $info['info'];
    }
}