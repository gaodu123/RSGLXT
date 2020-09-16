
  



<?php
// 处理增加操作的页面 
require "connfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);
// 获取增加的填写信息
$xd_id = $_POST['xd_id'];
$xd_name = $_POST['xd_name'];
$xd_gender = $_POST['xd_gender'];
$xd_age = $_POST['xd_age'];
$xd_fenyuan = $_POST['xd_fenyuan'];
$xd_zc= $_POST['xd_zc'];
$xd_sfzh = $_POST['xd_sfzh'];
$xd_phone = $_POST['xd_phone'];
$xd_syts = $_POST['xd_syts'];
$xd_qsrq = $_POST['xd_qsrq'];
$xd_zzrq = $_POST['xd_zzrq'];
$xd_salary = $_POST['xd_salary'];
// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_syht_xd(xd_id,xd_name,xd_gender,xd_age,xd_fenyuan,xd_zc,xd_sfzh,xd_phone,xd_syts,xd_qsrq,xd_zzrq,xd_salary) VALUES ('$xd_id','$xd_name','$xd_gender','$xd_age','$xd_fenyuan','$xd_zc','$xd_sfzh','$xd_phone','$xd_syts','$xd_qsrq','$xd_zzrq','$xd_salary')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:xiandai.php");  
?>