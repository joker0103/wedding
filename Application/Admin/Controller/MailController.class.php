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
    public function mail_compose()
    {
        return $this->display();
    }

    public function mailbox()
    {
        return $this->display();
    }

    public function mail_detail()
    {
        return $this->display();
    }
    
    //发送邮件
    public function send()
    {
        
    }
}