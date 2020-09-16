
  



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
$jj_syts = $_POST['jj_syts'];
$jj_qsrq = $_POST['jj_qsrq'];
$jj_zzrq = $_POST['jj_zzrq'];
$jj_salary = $_POST['jj_salary'];
// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_syht_jg(jj_id,jj_name,jj_gender,jj_age,jj_fenyuan,jj_zc,jj_sfzh,jj_phone,jj_syts,jj_qsrq,jj_zzrq,jj_salary) VALUES ('$jj_id','$jj_name','$jj_gender','$jj_age','$jj_fenyuan','$jj_zc','$jj_sfzh','$jj_phone','$jj_syts','$jj_qsrq','$jj_zzrq','$jj_salary')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:jinguan.php");  
?>