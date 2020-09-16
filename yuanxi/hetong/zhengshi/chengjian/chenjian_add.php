
  



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
$cj_id = $_POST['cj_id'];
$cj_name = $_POST['cj_name'];
$cj_gender = $_POST['cj_gender'];
$cj_age = $_POST['cj_age'];
$cj_fenyuan = $_POST['cj_fenyuan'];
$cj_zc= $_POST['cj_zc'];
$cj_sfzh = $_POST['cj_sfzh'];
$cj_phone = $_POST['cj_phone'];
$cj_scqd = $_POST['cj_scqd'];
$cj_sczz = $_POST['cj_cszz'];
$cj_ns = $_POST['cj_ns'];
$cj_salary = $_POST['cj_salary'];
// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_zsht_cj(cj_id,cj_name,cj_gender,cj_age,cj_fenyuan,cj_zc,cj_sfzh,cj_phone,cj_scqd,cj_sczz,cj_ns,cj_salary) VALUES ('$cj_id','$cj_name','$cj_gender','$cj_age','$cj_fenyuan','$cj_zc','$cj_sfzh','$cj_phone','$cj_scqd','$cj_sczz','$cj_ns','$cj_salary')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:chenjian.php");  
?>