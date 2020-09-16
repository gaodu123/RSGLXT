<?php
// 处理增加操作的页面 
require "config.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$cc_id = $_POST['cc_id'];
$cc_name = $_POST['cc_name'];
$cc_gender = $_POST['cc_gender'];
$cc_fenyuan = $_POST['cc_fenyuan'];
$cc_zc= $_POST['cc_zc'];
$cc_qjts = $_POST['cc_qjts'];
$cc_ccyy= $_POST['cc_ccyy'];
$cc_ccd = $_POST['cc_ccd'];
$cc_ksrq = $_POST['cc_ksrq'];
$cc_jsrq = $_POST['cc_jsrq'];


// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_kq_chucai(cc_id,cc_name,cc_gender,cc_fenyuan,cc_zc,cc_qjts,cc_ccyy,cc_ccd,cc_ksrq,cc_jsrq) VALUES ('$cc_id','$cc_name','$cc_gender','$cc_fenyuan','$cc_zc','$cc_qjts','$cc_ccyy','$cc_ccd','$cc_ksrq','$cc_jsrq')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:cc_quanxian.php");
?>