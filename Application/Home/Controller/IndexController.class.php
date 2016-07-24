<?php
namespace Home\Controller;

use Think\Controller;
use Think\Page;

class IndexController extends CommonController
{
    public function index()
    {
        //最美殿堂
        $w = M('Wedding')->field('wed_wedding . *, wed_photo_store . file_path')
                            ->join('left join wed_photo_store on wed_photo_store . from_id = wed_wedding . id')
                            ->where('wed_wedding . top = 1')
                            ->find();
        $p = M('Photo_store')->field('wed_photo_store . *, wed_wedding . bride, wed_wedding . bridegroom, wed_wedding . info, wed_wedding . wedding_date, wed_address . address_name')
            ->join('left join wed_wedding on wed_photo_store . from_id = wed_wedding . id')
            ->join('left join wed_address on wed_address . id = wed_wedding .address')
            ->order('id desc')
            ->limit(0,16)
            ->select();
        $l = json_encode($p);//dump($l);exit;
        $this->assign('list', $l);
        $this->assign('photo', $p);
        $this->assign('wedding', $w);
        return $this->display();
    }

    //画廊
    public function gallery()
    {
        $photo_store = M('Photo_store');
        $totalRows = $photo_store->count();
        $page = new Page($totalRows, 12);
        $page->lastSuffix = false;
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('first', '首页');
        $page->setConfig('last', '末页');
        $p = $photo_store->field('wed_photo_store . file_path, wed_wedding . bride, wed_wedding . bridegroom, wed_wedding . info')
            ->join('left join wed_wedding on wed_photo_store . from_id = wed_wedding . id')
            ->order('wed_photo_store . id desc')
            ->limit($page->firstRow, $page->listRows)
            ->select();
        $show = $page->show();
        $photo = json_encode($p);
        //dump($photo);dump($show);exit;
        $this->assign('photo', $photo);
        $this->assign('show', $show);
        return $this->display();
    }
    
    //永恒
    public function blog()
    {
        $a = M('Article');

        //分页
        $totalRows = $a->count();
        $page = new Page($totalRows, 3);
        $page->lastSuffix = false;
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('first', '首页');
        $page->setConfig('last', '末页');
        $art = $a->field('wed_article . *, wed_user . name, wed_wedding . bride, wed_wedding . bridegroom, wed_address . address_name')
            ->join('left join wed_user on wed_article . author = wed_user . id')
            ->join('left join wed_wedding on wed_article . wedding = wed_wedding . id')
            ->join('left join wed_address on  wed_address . id= wed_wedding . address')
            ->order('wed_article . id desc')
            ->limit($page->firstRow, $page->listRows)
            ->select();
        $show = $page->show();
        for ($i = 0, $count = count($art); $i < $count ; ++$i){
            $art[$i]['content'] = htmlspecialchars_decode($art[$i]['content']);
        }
        $article = json_encode($art);

        //侧边美好回忆
        $title = $a->field('wed_article . title, wed_article . id')->limit(0,8)->select();
        $title = json_encode($title);

        //输出部分
        //dump($title);exit;
       /* dump($article);dump($show);exit;*/
        $this->assign('show', $show);
        $this->assign('article', $article);
        $this->assign('title', $title);
        return $this->display();
    }
}