<?php
/**
*此页面不应被客户端直接请求，需要被其它PHP页面包含
**/
header('Content-Type: application/json;charset=UTF-8');

#$conn = #mysqli_connect('127.0.0.1','root','','ulift',3306)#;
$conn=mysqli_connect('127.0.0.1','a1124154250','8961490','a1124154250',3306);
$sql = "SET NAMES UTF8";
mysqli_query($conn, $sql);

$output = [];


