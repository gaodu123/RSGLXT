<?php
// 处理增加操作的页面 
require "config.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);

// 获取增加
$px_id = $_POST['px_id'];
$px_name = $_POST['px_name'];
$px_gender = $_POST['px_gender'];
$px_age = $_POST['px_age'];
$px_fenyuan = $_POST['px_fenyuan'];
$px_kc = $_POST['px_kc'];
$px_shishu = $_POST['px_shishu'];
$px_kssj = $_POST['px_kssj'];
$px_jssj = $_POST['px_jssj'];
$px_cj = $_POST['px_cj'];


// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_kcjl(px_id,px_name,px_gender,px_age,px_fenyuan,px_kc,px_shishu,px_kssj,px_jssj,px_cj) VALUES ('$px_id','$px_name','$px_gender','$px_age','$px_fenyuan','$px_kc','$px_shishu','$px_kssj','$px_jssj','$px_cj')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:jl_quanxian.php");  
?>