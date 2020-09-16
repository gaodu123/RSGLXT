<?php
// 处理增加操作的页面 
require "config.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);

// 获取增加
$kc_id = $_POST['kc_id'];
$kc_name = $_POST['kc_name'];
$kc_danwei = $_POST['kc_danwei'];
$kc_jiangshi = $_POST['kc_jiangshi'];
$kc_kssj = $_POST['kc_kssj'];
$kc_renshu = $_POST['kc_renshu'];
$kc_jssj = $_POST['jssj'];


// 插入数据
// 插入数据
mysql_query("INSERT INTO yuanxi_pxkc(kc_id,kc_name,kc_danwei,kc_jiangshi,kc_kssj,kc_jssj,kc_renshu) VALUES ('$kc_id','$kc_name','$kc_danwei','$kc_jiangshi','$kc_kssj','$kc_jssj','$kc_renshu')",$link) or die('添加数据出错：'.mysql_error()); 
header("Location:kc_quanxian.php");  
?>