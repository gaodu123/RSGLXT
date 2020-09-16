<?php
// 处理增加操作的页面 
require "config.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$qj_id = $_POST['qj_id'];
$qj_name = $_POST['qj_name'];
$qj_gender = $_POST['qj_gender'];
$qj_fenyuan = $_POST['qj_fenyuan'];
$qj_bumen = $_POST['qj_bumen'];
$qj_zc = $_POST['qj_zc'];
$qj_qjts = $_POST['qj_qjts'];
$qj_qjyy = $_POST['qj_qjyy'];
$qj_qjksrq = $_POST['qj_qjksrq'];
$qj_zzrq = $_POST['qj_zzrq'];
$qj_pzr = $_POST['qj_pzr'];
$qj_qjrq = $_POST['qj_qjrq'];
// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_kq_qj(qj_id,qj_name,qj_gender,qj_fenyuan,qj_bumen,qj_zc,qj_qjts,qj_qjyy,qj_qjksrq,qj_zzrq,qj_pzr,qj_qjrq) VALUES ('$qj_id','$qj_name','$qj_gender','$qj_fenyuan','$qj_bumen','$qj_zc','$qj_qjts','$qj_qjyy','$qj_qjksrq','$qj_zzrq','$qj_pzr','$qj_qjrq')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:qj_quanxian.php");
?>