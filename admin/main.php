<?php

include_once 'init.php';
session_start();

if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}else{
    echo '验证失败';
}

// 不实际部署无法记录session信息 -- 划掉
// 需要添加session_start()即可注册到超全局变量$_SESSION
