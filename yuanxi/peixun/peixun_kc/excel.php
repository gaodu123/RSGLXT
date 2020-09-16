<?php

header('Content-type: text/html; charset=utf-8');

header("Content-type:application/vnd.ms-excel;charset=UTF-8");

header("Content-Disposition:filename=成都农业科技职业学院培训课程信息表.xlsx");

$conn = mysql_connect("localhost","root","root") or die("不能连接数据库");

mysql_SELECT_db("renshi", $conn);

mysql_query("set names 'UTF8'");

$sql="SELECT * from yuanxi_pxkc ";

$result=mysql_query($sql);

echo "序号\t职工编号\t姓名\t主办单位\t讲师\t开始时间\t结束时间\t人数\n";

while($row=mysql_fetch_array($result)){

  echo $row['id']."\t".$row['kc_id']."\t".$row['kc_name']."\t".$row['kc_danwei']."\t".$row['kc_jiangshi']."\t".$row['kc_kssj']."\t".$row['kc_jssj']."\t".$row['kc_renshu']."\n";

}

?>