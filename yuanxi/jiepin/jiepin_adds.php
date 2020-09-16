<?php
// 处理增加操作的页面 
require "config.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$jp_id = $_POST['jp_id'];
$jp_name = $_POST['jp_name'];
$jp_sfzh = $_POST['jp_sfzh'];
$jp_phone = $_POST['jp_phone'];
$jp_age = $_POST['jp_age'];
$jp_gender = $_POST['jp_gender'];
$jp_fenyuan = $_POST['jp_fenyuan'];
$jp_yuanyin = $_POST['jp_yuanyin'];
$jp_time = $_POST['jp_time'];
$jp_txtime = $_POST['jp_txtime'];
$jp_zc = $_POST['jp_zc'];

// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_jiepin(jp_id,jp_name,jp_sfzh,jp_phone,jp_age,jp_gender,jp_fenyuan,jp_yuanyin,jp_time,jp_txtime,jp_zc) VALUES ('$jp_id','$jp_name','$jp_sfzh','$jp_phone','$jp_age','$jp_gender','$jp_fenyuan','$jp_yuanyin','$jp_time','$jp_txtime','$jp_zc')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:jiepin_quanxian.php");  
?>