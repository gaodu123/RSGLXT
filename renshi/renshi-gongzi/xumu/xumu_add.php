<?php
// 处理增加操作的页面 
require "connfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$xm_id = $_POST['xm_id'];
$xm_name = $_POST['xm_name'];
$xm_sfzh = $_POST['xm_sfzh'];
$xm_fenyuan = $_POST['xm_fenyuan'];
$xm_zc = $_POST['xm_zc'];
$xm_jbgz = $_POST['xm_jbgz'];
$xm_gwgz = $_POST['xm_gwgz'];
$xm_jixiao = $_POST['xm_jixiao'];
$xm_qjiakk = $_POST['xm_qjiakk'];
$xm_ylsb = $_POST['xm_ylsb'];
$xm_jiangjin = $_POST['xm_jiangjin'];
$xm_sfgz = $_POST['xm_sfgz'];
$xm_ffny = $_POST['xm_ffny'];


// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_gz_xm(xm_id,xm_name,xm_sfzh,xm_zc,xm_jbgz,xm_gwgz,xm_jixiao,xm_qjiakk,xm_ylsb,xm_jiangjin,xm_sfgz,xm_ffny,xm_fenyuan) VALUES ('$xm_id','$xm_name','$xm_sfzh','$xm_zc','$xm_jbgz','$xm_gwgz','$xm_jixiao','$xm_qjiakk','$xm_ylsb','$xm_jiangjin','$xm_sfgz','$xm_ffny','$xm_fenyuan')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:xumu.php");
?>