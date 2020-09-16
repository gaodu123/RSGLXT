<?php
// 处理增加操作的页面 
require "connfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$jg_id = $_POST['jg_id'];
$jg_name = $_POST['jg_name'];
$jg_sfzh = $_POST['jg_sfzh'];
$jg_zc = $_POST['jg_zc'];
$jg_jbgz = $_POST['jg_jbgz'];
$jg_gwgz = $_POST['jg_gwgz'];
$jg_jixiao = $_POST['jg_jixiao'];
$jg_qjiakk = $_POST['jg_qjiakk'];
$jg_ylsb = $_POST['jg_ylsb'];
$jg_jiangjin = $_POST['jg_jiangjin'];
$jg_sfgz = $_POST['jg_sfgz'];
$jg_ffny = $_POST['jg_ffny'];
$jg_fenyuan = $_POST['jg_fenyuan'];

// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_gz_jg(jg_id,jg_name,jg_sfzh,jg_zc,jg_jbgz,jg_gwgz,jg_jixiao,jg_qjiakk,jg_ylsb,jg_jiangjin,jg_sfgz,jg_ffny,jg_fenyuan) VALUES ('$jg_id','$jg_name','$jg_sfzh','$jg_zc','$jg_jbgz','$jg_gwgz','$jg_jixiao','$jg_qjiakk','$jg_ylsb','$jg_jiangjin','$jg_sfgz','$jg_ffny','$jg_fenyuan')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:jinguan.php");
?>