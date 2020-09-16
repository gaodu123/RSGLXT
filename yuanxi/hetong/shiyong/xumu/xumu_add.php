
  



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
$xm_id = $_POST['xm_id'];
$xm_name = $_POST['xm_name'];
$xm_gender = $_POST['xm_gender'];
$xm_age = $_POST['xm_age'];
$xm_fenyuan = $_POST['xm_fenyuan'];
$xm_zc= $_POST['xm_zc'];
$xm_sfzh = $_POST['xm_sfzh'];
$xm_phone = $_POST['xm_phone'];
$xm_syts = $_POST['xm_syts'];
$xm_qsrq = $_POST['xm_qsrq'];
$xm_zzrq = $_POST['xm_zzrq'];
$xm_salary = $_POST['xm_salary'];
// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_syht_xm(xm_id,xm_name,xm_gender,xm_age,xm_fenyuan,xm_zc,xm_sfzh,xm_phone,xm_syts,xm_qsrq,xm_zzrq,xm_salary) VALUES ('$xm_id','$xm_name','$xm_gender','$xm_age','$xm_fenyuan','$xm_zc','$xm_sfzh','$xm_phone','$xm_syts','$xm_qsrq','$xm_zzrq','$xm_salary')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:xumu.php");  
?>