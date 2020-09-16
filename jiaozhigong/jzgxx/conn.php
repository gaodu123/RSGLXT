<?php
    $server="localhost";//主机的IP地址，你也可以选填127.0.0.1
    $db_username="root";//数据库用户名
    $db_password="root";//数据库密码

    $con = mysql_connect($server,$db_username,$db_password);//链接数据库
    if(!$con){
        die("can't connect".mysql_error());//如果链接失败输出错误
    }
    
    mysql_select_db('renshi',$con);//选择数据库（前边已经说是test数据库）
    mysql_query('set names utf8');
?>
