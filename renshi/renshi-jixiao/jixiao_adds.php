<?php
// 处理增加操作的页面 
require "config.php";
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
$cj_kprq = $_POST['cj_kprq'];
$cj_khxm = $_POST['cj_khxm'];
$cj_pj = $_POST['cj_pj'];
$cj_fenzhi = $_POST['cj_fenzhi'];
$cj_khrbh = $_POST['cj_khrbh'];
$cj_khrname = $_POST['cj_khrname'];
$cj_khrzc = $_POST['cj_khrzc'];
$cj_fenyuan = $_POST['cj_fenyuan'];

// 插入数据
// 插入数据
mysql_query("INSERT INTO renshi_jixiao(cj_id,cj_name,cj_sfzh,cj_zc,cj_kprq,cj_khxm,cj_pj,cj_fenzhi,cj_khrbh,cj_khrname,cj_khrzc,cj_fenyuan) VALUES ('$cj_id','$cj_name','$cj_sfzh','$cj_zc','$cj_kprq','$cj_khxm','$cj_pj','$cj_fenzhi','$cj_khrbh','$cj_khrname','$cj_khrzc','$cj_fenyuan')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:jixiao_quanxian.php");
?>