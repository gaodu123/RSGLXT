
  



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
$xx_id = $_POST['xx_id'];
$xx_name = $_POST['xx_name'];
$xx_gender = $_POST['xx_gender'];
$xx_age = $_POST['xx_age'];
$xx_fenyuan = $_POST['xx_fenyuan'];
$xx_zc= $_POST['xx_zc'];
$xx_sfzh = $_POST['xx_sfzh'];
$xx_phone = $_POST['xx_phone'];

$xx_syts = $_POST['xx_syts'];
$xx_qsrq = $_POST['xx_qsrq'];
$xx_zzrq = $_POST['xx_zzrq'];
$xx_salary = $_POST['xx_salary'];
// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_syht_xx(xx_id,xx_name,xx_gender,xx_age,xx_fenyuan,xx_zc,xx_sfzh,xx_phone,xx_syts,xx_qsrq,xx_zzrq,xx_salary) VALUES ('$xx_id','$xx_name','$xx_gender','$xx_age','$xx_fenyuan','$xx_zc','$xx_sfzh','$xx_phone','$xx_syts','$xx_qsrq','$xx_zzrq','$xx_salary')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:xinxi.php");  
?>