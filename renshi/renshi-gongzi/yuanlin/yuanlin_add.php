<?php
// 处理增加操作的页面 
require "connfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$yl_id = $_POST['yl_id'];
$yl_name = $_POST['yl_name'];
$yl_sfzh = $_POST['yl_sfzh'];
$yl_fenyuan = $_POST['yl_fenyuan'];
$yl_zc = $_POST['yl_zc'];
$yl_jbgz = $_POST['yl_jbgz'];
$yl_gwgz = $_POST['yl_gwgz'];
$yl_jixiao = $_POST['yl_jixiao'];
$yl_qjiakk = $_POST['yl_qjiakk'];
$yl_ylsb = $_POST['yl_ylsb'];
$yl_jiangjin = $_POST['yl_jiangjin'];
$yl_sfgz = $_POST['yl_sfgz'];
$yl_ffny = $_POST['yl_ffny'];


// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_gz_yl(yl_id,yl_name,yl_sfzh,yl_zc,yl_jbgz,yl_gwgz,yl_jixiao,yl_qjiakk,yl_ylsb,yl_jiangjin,yl_sfgz,yl_ffny,yl_fenyuan) VALUES ('$yl_id','$yl_name','$yl_sfzh','$yl_zc','$yl_jbgz','$yl_gwgz','$yl_jixiao','$yl_qjiakk','$yl_ylsb','$yl_jiangjin','$yl_sfgz','$yl_ffny','$yl_fenyuan')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:yuanlin.php");
?>