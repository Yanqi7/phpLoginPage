<?php
include_once 'init.php';

global $conn;

//如果用 if($_POST['sub']){
//php环境是8.0或8.1会报错Warning: Undefined array key "sub" in E:\PhpstormProjects\phpStudyPage\admin\login.php on line 8
//因为8版本后有了更严格的语法要求
if(isset($_POST['sub'])){
    $username = addslashes($_POST['username']); // 防注入攻击
    $password = addslashes(md5($_POST['password']));
    $result = $conn->query("select * from user where username='$username'and password='$password'");
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        if($row['password']==$password){
            echo "登陆成功 ";
            $_SESSION['username'] = $row['username'];
            echo "欢迎 ";
            echo $_SESSION['username'];
        }else{
            echo "账号和密码错误";
        }
    }else{
        echo "登陆失败";
    }
}

?>

<html>
    <head>
        <title>用户登录</title>
        <style>
            .login{
                width: 300px;
                margin: 0px auto;
                background-color: aqua;
            }
        </style>
    </head>
    <body>
        <div class="login">
            <form method="post">
                <table>
                    <tr><td><label for="username">用户名：</label></td><td><input type="text" name="username" id="username"></td></tr>
                    <tr><td><label>密&nbsp;&nbsp;码：</label></td><td><input type="password" name="password" id="password"></td></tr>
                    <tr><td colspan="2"><input type="submit" value="登录" name="sub"></td><td><input type="reset"></td></tr>
                </table>
            </form>
        </div>
    </body>
</html>
