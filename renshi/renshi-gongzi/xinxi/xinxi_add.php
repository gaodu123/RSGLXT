<?php
// 处理增加操作的页面 
require "connfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);


$xx_id = $_POST['xx_id'];
$xx_name = $_POST['xx_name'];
$xx_sfzh = $_POST['xx_sfzh'];
$xx_fenyuan = $_POST['xx_fenyuan'];
$xx_zc = $_POST['xx_zc'];
$xx_jbgz = $_POST['xx_jbgz'];
$xx_gwgz = $_POST['xx_gwgz'];
$xx_jixiao = $_POST['xx_jixiao'];
$xx_qjiakk = $_POST['xx_qjiakk'];
$xx_ylsb = $_POST['xx_ylsb'];
$xx_jiangjin = $_POST['xx_jiangjin'];
$xx_sfgz = $_POST['xx_sfgz'];
$xx_ffny = $_POST['xx_ffny'];


// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_gz_xx(xx_id,xx_name,xx_sfzh,xx_zc,xx_jbgz,xx_gwgz,xx_jixiao,xx_qjiakk,xx_ylsb,xx_jiangjin,xx_sfgz,xx_ffny,xx_fenyuan) VALUES ('$xx_id','$xx_name','$xx_sfzh','$xx_zc','$xx_jbgz','$xx_gwgz','$xx_jixiao','$xx_qjiakk','$xx_ylsb','$xx_jiangjin','$xx_sfgz','$xx_ffny','$xx_fenyuan')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:xinxi.php");
?>