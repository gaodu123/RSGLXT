
  



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
$jj_id = $_POST['jj_id'];
$jj_name = $_POST['jj_name'];
$jj_gender = $_POST['jj_gender'];
$jj_age = $_POST['jj_age'];
$jj_fenyuan = $_POST['jj_fenyuan'];
$jj_zc= $_POST['jj_zc'];
$jj_sfzh = $_POST['jj_sfzh'];
$jj_phone = $_POST['jj_phone'];
$jj_scqd = $_POST['jj_scqd'];
$jj_sczz = $_POST['jj_sczz'];
$jj_ns = $_POST['jj_ns'];
$jj_salary = $_POST['jj_salary'];
// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_zsht_jg(jj_id,jj_name,jj_gender,jj_age,jj_fenyuan,jj_zc,jj_sfzh,jj_phone,jj_scqd,jj_sczz,jj_ns,jj_salary) VALUES ('$jj_id','$jj_name','$jj_gender','$jj_age','$jj_fenyuan','$jj_zc','$jj_sfzh','$jj_phone','$jj_scqd','$jj_sczz','$jj_ns','$jj_salary')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:jinguan.php");  
?>