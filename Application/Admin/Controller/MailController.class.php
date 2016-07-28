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
        $path = date('Y-m-d', time());
        $targetFolder = WORK_PATH . UPLOAD_PATH;
        $dir = $targetFolder . $path;
        mkdir($dir);
        dump($dir);
        dump($path);
        dump($targetFolder);
        dump($_SERVER['DOCUMENT_ROOT']);exit();
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

    //附件缓存
    public function file_cache()
    {
        $path = date('Y-m-d', time());
        $targetFolder = WORK_PATH . UPLOAD_PATH;
        $dir = $targetFolder . $path;
        if (!file_exists($dir)) {
            mkdir($dir);
        }
        $tempFile = $_FILES['Filedata']['tmp_name'];
        $targetPath = $targetFolder;
        $targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
        $fileParts = pathinfo($_FILES['Filedata']['name']);
        move_uploaded_file($tempFile,$targetFile);
    }
}