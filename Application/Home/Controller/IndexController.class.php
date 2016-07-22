<?php
namespace Home\Controller;

use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        //最美殿堂
        $w = M('Wedding')->field('wed_wedding . *, wed_photo_store . file_path')
                            ->join('left join wed_photo_store on wed_photo_store . from_id = wed_wedding . id')
                            ->where('wed_wedding . top = 1')
                            ->find();
        $p = M('Photo_store')->field('wed_photo_store . *, wed_wedding . bride, wed_wedding . bridegroom, wed_wedding . info, wed_address . address_name')
            ->join('left join wed_wedding on wed_photo_store . from_id = wed_wedding . id')
            ->join('left join wed_address on wed_address . id = wed_wedding .address')
            ->order('id desc')
            ->limit(0,4)
            ->select();
        $this->assign('photo', $p);
        $this->assign('wedding', $w);
        return $this->display();
    }
}