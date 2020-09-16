<?php
// 处理增加操作的页面 
require "config.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$rc_id = $_POST['rc_id'];
$rc_name = $_POST['rc_name'];
$rc_leixin = $_POST['rc_leixin'];
$rc_kqrq = $_POST['rc_kqrq'];
$rc_fangshi = $_POST['rc_fangshi'];
$rc_fenyuan = $_POST['rc_fenyuan'];

// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_kq_rc(rc_id,rc_name,rc_leixin,rc_kqrq,rc_fangshi,rc_fenyuan) VALUES ('$rc_id','$rc_name','$rc_leixin','$rc_kqrq','$rc_fangshi','$rc_fenyuan')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:rc_quanxian.php");
?>