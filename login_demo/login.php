<?php
/**
 * Created by PhpStorm.
 * User: caoruncheng
 * Date: 16/3/14
 * Time: 上午11:58
 */
session_start();

//phpinfo();exit;

$name = '';
$password = '';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];


    if ($name != 'admin' || $password != '123456') {
        exit('用户名或密码不存在！</br>点击此处<a href="test.php">返回</a> 重试');
    } else {
        if (isset($_POST['save'])) {
            setcookie('name', $name, time() + 3600 * 14 * 24);
            setcookie('password', $password, time() + 3600 * 14 * 24);
        }
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        header("Location: success.php");
    }
}

if(isset($_GET['action']) && $_GET['action'] === "logout"){
    if(isset($_COOKIE['name']) && isset($_COOKIE['password'])){
        setcookie("name", null, time() - 3600 * 14 * 24);
        setcookie("password", null, time() - 3600 * 14 * 24);
    }
    unset($_SESSION['name']);
    unset($_SESSION['password']);
    echo '注销登陆</br> <a href="test.php">登录</a>';
    exit;
}



