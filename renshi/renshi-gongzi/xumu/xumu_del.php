<?php
//连接数据库
include 'conn.php';

$xm_id = $_GET['xm_id'];
//删除指定数据  
//编写删除sql语句
$sql = "DELETE FROM renshi_gz_xm WHERE xm_id={$xm_id}";
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
    exit('sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}

// 删除完跳转到首页
header("Location:xumu.php");  


?>