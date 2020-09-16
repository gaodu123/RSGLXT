<?php
//连接数据库
include 'conn.php';

$jd_id = $_GET['jd_id'];
//删除指定数据  
//编写删除sql语句
$sql = "DELETE FROM yuanxi_zsht_jd WHERE jd_id={$jd_id}";
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
    exit('sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}

// 删除完跳转到首页
header("Location:jidian.php");  


?>