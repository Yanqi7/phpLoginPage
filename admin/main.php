<?php

include_once 'init.php';

if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}else{
    echo '验证失败';
}

// 不实际部署无法记录session信息
