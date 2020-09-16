<?php
// 处理增加操作的页面 
require "config.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);

// 获取增加的用户
$qx_id = $_POST['qx_id'];
$qx_name = $_POST['qx_name'];
$qx_sfzh = $_POST['qx_sfzh'];
$qx_phone = $_POST['qx_phone'];
$qx_pass = $_POST['qx_pass'];
$type = $_POST['type'];
// 插入数据
mysql_query("INSERT INTO xitong_qx(qx_id,qx_name,qx_sfzh,qx_phone,qx_pass,type) VALUES ('$qx_id','$qx_name','$qx_sfzh','$qx_phone','$qx_pass','$type')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:quanxian_quanxian.php");  
?>