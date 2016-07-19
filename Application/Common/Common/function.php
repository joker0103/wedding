<?php
/**
 * Created by PhpStorm.
 * User: 帅
 * Date: 2016/7/18
 * Time: 18:06
 */
function authority(){
    if (empty($_SESSION['authority'])){
        return header('location:/index.php/Admin/Index/login');
    }
}