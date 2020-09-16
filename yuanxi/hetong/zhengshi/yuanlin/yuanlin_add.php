
  



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
$yl_id = $_POST['yl_id'];
$yl_name = $_POST['yl_name'];
$yl_gender = $_POST['yl_gender'];
$yl_age = $_POST['yl_age'];
$yl_fenyuan = $_POST['yl_fenyuan'];
$yl_zc= $_POST['yl_zc'];
$yl_sfzh = $_POST['yl_sfzh'];
$yl_phone = $_POST['yl_phone'];
$yl_scqd = $_POST['yl_scqd'];
$yl_sczz = $_POST['yl_sczz'];
$yl_ns = $_POST['yl_ns'];
$yl_salary = $_POST['yl_salary'];
// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_zsht_yl(yl_id,yl_name,yl_gender,yl_age,yl_fenyuan,yl_zc,yl_sfzh,yl_phone,yl_scqd,yl_sczz,yl_ns,yl_salary) VALUES ('$yl_id','$yl_name','$yl_gener','$yl_age','$yl_fenyuan','$yl_zc','$yl_sfzh','$yl_phone','$yl_scqd','$yl_sczz','$yl_ns','$yl_salary')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:yuanlin.php");  
?>