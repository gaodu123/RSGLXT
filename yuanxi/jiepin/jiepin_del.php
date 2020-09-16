<?php
//连接数据库
include 'conn.php';

$jp_id = $_GET['jp_id'];
//删除指定数据  
//编写删除sql语句
$sql = "DELETE FROM yuanxi_jiepin WHERE jp_id={$jp_id}";
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
    exit('sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}

// 删除完跳转到首页
header("Location:jiepin_quanxian.php");  


?>