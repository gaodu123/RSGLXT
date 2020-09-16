<?php
// 处理增加操作的页面 
require "config.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);

// 获取增加的新闻
$id = $_POST['id'];
$zgname = $_POST['zgname'];
$sfzh = $_POST['sfzh'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$zggender = $_POST['zggender'];
$zzmm = $_POST['zzmm'];
$xueli = $_POST['xueli'];
$mz = $_POST['mz'];
$jiguan = $_POST['jiguan'];
$zc = $_POST['zc'];

// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_luyong(id,zgname,sfzh,phone,age,zggender,zzmm,xueli,mz,jiguan,zc) VALUES ('$id','$zgname','$sfzh','$phone','$age','$zggender','$zzmm','$xueli','$mz','$jiguan','$zc')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:renshi_quanxian.php");  
?>