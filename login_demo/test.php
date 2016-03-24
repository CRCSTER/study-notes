<?php
session_start();
?>
<!DOCTYPE html>
<?php isset($_SESSION['password']) ? header("Location: success.php") : '' ; ?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>登陆界面</title>
    <form id="login" action="login.php" method="post">
        <label>用户名</label>
        <input type="text" id="name" name="name"  value="<?= isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>">
        <label>密码</label>
        <input type="text" id="password" name="password" value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ; ?>"></br>
        <label>两周内自动登陆</label>

        <input type="checkbox" name="save" value="1"></br>
        <input type="submit" name="submit">
    </form>
</head>
<body>

</body>
</html>