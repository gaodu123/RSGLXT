<?php
// 处理增加操作的页面 
require "connfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$xd_id = $_POST['xd_id'];
$xd_name = $_POST['xd_name'];
$xd_sfzh = $_POST['xd_sfzh'];
$xd_fenyuan = $_POST['xd_fenyuan'];
$xd_zc = $_POST['xd_zc'];
$xd_jbgz = $_POST['xd_jbgz'];
$xd_gwgz = $_POST['xd_gwgz'];
$xd_jixiao = $_POST['xd_jixiao'];
$xd_qjiakk = $_POST['xd_qjiakk'];
$xd_ylsb = $_POST['xd_ylsb'];
$xd_jiangjin = $_POST['xd_jiangjin'];
$xd_sfgz = $_POST['xd_sfgz'];
$xd_ffny = $_POST['xd_ffny'];

// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_gz_xd(xd_id,xd_name,xd_sfzh,xd_zc,xd_jbgz,xd_gwgz,xd_jixiao,xd_qjiakk,xd_ylsb,xd_jiangjin,xd_sfgz,xd_ffny,xd_fenyuan) VALUES ('$xd_id','$xd_name','$xd_sfzh','$xd_zc','$xd_jbgz','$xd_gwgz','$xd_jixiao','$xd_qjiakk','$xd_ylsb','$xd_jiangjin','$xd_sfgz','$xd_ffny','$xd_fenyuan')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:xiandai.php");
?>