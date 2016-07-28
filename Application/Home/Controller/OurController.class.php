<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/21
 * Time: 21:44
 */
namespace Home\Controller;

use Think\Controller;

class OurController extends CommonController
{
    public function about()
    {
        $history = json_encode(M('Ourhistory')->order('id desc')->select());
        $synopsis = M('Oursynopsis')->order('id desc')->find();
        $synopsis['tenet'] = htmlspecialchars_decode($synopsis['tenet']);
        $personal = M('Personal')->field('wed_personal . *, wed_user . name')
            ->join('left join wed_user on wed_personal . uid = wed_user . id')
            ->where('wed_personal . status = 1')
            ->limit(0,8)
            ->select();
        $personal = json_encode($personal);
        //dump($history);exit;
        $this->assign('personal', $personal);
        $this->assign('history', $history);
        $this->assign('synopsis', $synopsis);
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

    //联系我们
    public function our()
    {
        //dump($_SERVER);exit;
        $Caddress = M('Company_address')->order('id desc')->find();
        //dump($Caddress);exit;
        $this->assign('Caddress', $Caddress);
        return $this->display();
    }

    //customer信息
    public function massage()
    {
        $post = I('post.');
        $post['is_customer'] = 1;
        $post['send_date'] = time();
        $post['c_ip'] = sprintf('%u', ip2long($_SERVER['REMOTE_ADDR']));
        if (M('Customer_massage')->add($post)){
            return $this->success('发送成功，我们会在一小时内联系您，请保持通讯畅通！', U('our'), 5);
        } else {
            return $this->error('抱歉，出错了，发送失败', U('our'));
        }
    }
}