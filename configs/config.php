<?php
$host="localhost";
$username="root";
$password="root";
$dbname="userlogindb";
$conn=mysqli_connect($username,$password,$dbname);
if($conn->connect_error){
    die("数据库连接失败".$conn->connect_error);
}
$conn->query('set names utf8');
