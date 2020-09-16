<?php
// 处理增加操作的页面 
require "connfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$cj_id = $_POST['cj_id'];
$cj_name = $_POST['cj_name'];
$cj_sfzh = $_POST['cj_sfzh'];
$cj_zc = $_POST['cj_zc'];
$cj_jbgz = $_POST['cj_jbgz'];
$cj_gwgz = $_POST['cj_gwgz'];
$cj_jixiao = $_POST['cj_jixiao'];
$cj_qjiakk = $_POST['cj_qjiakk'];
$cj_ylsb = $_POST['cj_ylsb'];
$cj_jiangjin = $_POST['cj_jiangjin'];
$cj_sfgz = $_POST['cj_sfgz'];
$cj_ffny = $_POST['cj_ffny'];
$cj_fenyuan = $_POST['cj_fenyuan'];

// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_gz_cj(cj_id,cj_name,cj_sfzh,cj_zc,cj_jbgz,cj_gwgz,cj_jixiao,cj_qjiakk,cj_ylsb,cj_jiangjin,cj_sfgz,cj_ffny,cj_fenyuan) VALUES ('$cj_id','$cj_name','$cj_sfzh','$cj_zc','$cj_jbgz','$cj_gwgz','$cj_jixiao','$cj_qjiakk','$cj_ylsb','$cj_jiangjin','$cj_sfgz','$cj_ffny','$cj_fenyuan')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:chengjian.php");
?>