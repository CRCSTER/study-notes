<?php
/**
 * Created by PhpStorm.
 * User: caoruncheng
 * Date: 16/3/14
 * Time: 下午1:42
 */
session_start();

if(!isset($_SESSION['name']) || !isset($_SESSION['password'])) {
    header("Location:test.php");
    exit();
}

echo "欢迎进入</br>";
exit('<a href="login.php?action=logout">退出登录</a>');