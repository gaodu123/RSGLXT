
  



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
$jd_id = $_POST['jd_id'];
$jd_name = $_POST['jd_name'];
$jd_gender = $_POST['jd_gender'];
$jd_age = $_POST['jd_age'];
$jd_fenyuan = $_POST['jd_fenyuan'];
$jd_zc= $_POST['jd_zc'];
$jd_sfzh = $_POST['jd_sfzh'];
$jd_phone = $_POST['jd_phone'];
$jd_scqd = $_POST['jd_scqd'];
$jd_sczz = $_POST['jd_sczz'];
$jd_ns = $_POST['jd_ns'];
$jd_salary = $_POST['jd_salary'];
// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_zsht_jd(jd_id,jd_name,jd_gender,jd_age,jd_fenyuan,jd_zc,jd_sfzh,jd_phone,jd_scqd,jd_sczz,jd_ns,jd_salary) VALUES ('$jd_id','$jd_name','$jd_gender','$jd_age','$jd_fenyuan','$jd_zc','$jd_sfzh','$jd_phone','$jd_scqd','$jd_sczz','$jd_ns','$jd_salary')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:jidian.php");  
?>