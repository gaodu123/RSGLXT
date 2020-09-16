<?php
// 处理增加操作的页面 
require "connfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$jd_id = $_POST['jd_id'];
$jd_name = $_POST['jd_name'];
$jd_sfzh = $_POST['jd_sfzh'];
$jd_zc = $_POST['jd_zc'];
$jd_jbgz = $_POST['jd_jbgz'];
$jd_gwgz = $_POST['jd_gwgz'];
$jd_jixiao = $_POST['jd_jixiao'];
$jd_qjiakk = $_POST['jd_qjiakk'];
$jd_ylsb = $_POST['jd_ylsb'];
$jd_jiangjin = $_POST['jd_jiangjin'];
$jd_sfgz = $_POST['jd_sfgz'];
$jd_ffny = $_POST['jd_ffny'];
$jd_fenyuan = $_POST['jd_fenyuan'];

// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_gz_jd(jd_id,jd_name,jd_sfzh,jd_zc,jd_jbgz,jd_gwgz,jd_jixiao,jd_qjiakk,jd_ylsb,jd_jiangjin,jd_sfgz,jd_ffny,jd_fenyuan) VALUES ('$jd_id','$jd_name','$jd_sfzh','$jd_zc','$jd_jbgz','$jd_gwgz','$jd_jixiao','$jd_qjiakk','$jd_ylsb','$jd_jiangjin','$jd_sfgzj','$jd_ffny','$jd_fenyuan')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:jidian.php");
?>