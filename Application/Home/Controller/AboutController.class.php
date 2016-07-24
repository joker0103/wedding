<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/21
 * Time: 21:44
 */
namespace Home\Controller;

use Think\Controller;

class AboutController extends CommonController
{
    public function about()
    {
        return $this->display();
    }

    //single博客详细页
    public function single()
    {
        $a = M('Article');

        //详细信息
        $article = $a->field('wed_article . *, wed_user . name, wed_wedding . bride, wed_wedding . bridegroom, wed_address . address_name')
            ->join('left join wed_user on wed_article . author = wed_user . id')
            ->join('left join wed_wedding on wed_article . wedding = wed_wedding . id')
            ->join('left join wed_address on  wed_address . id= wed_wedding . address')
            ->where('wed_article . id = '.I('get.id'))
            ->find();
        $article['content'] = htmlspecialchars_decode($article['content']);
        //侧边美好回忆
        $title = $a->field('wed_article . title, wed_article .id')->limit(0,8)->select();
        $title = json_encode($title);

        //输出部分
        $this->assign('article', $article);
        $this->assign('title', $title);
        return $this->display();
    }
}