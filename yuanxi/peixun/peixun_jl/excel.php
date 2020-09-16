<?php

header('Content-type: text/html; charset=utf-8');

header("Content-type:application/vnd.ms-excel;charset=UTF-8");

header("Content-Disposition:filename=成都农业科技职业学院教职工培训记录表.xlsx");

$conn = mysql_connect("localhost","root","root") or die("不能连接数据库");

mysql_SELECT_db("renshi", $conn);

mysql_query("set names 'UTF8'");

$sql="SELECT * from yuanxi_kcjl ";

$result=mysql_query($sql);

echo "序号\t职工编号\t姓名\t性别\t年龄\t身份证号\t培训课程\t培训时长\t开始时间\t结束时间\t成绩\n";

while($row=mysql_fetch_array($result)){

  echo $row['id']."\t".$row['px_id']."\t".$row['px_name']."\t".$row['px_gender']."\t".$row['px_age']."\t".$row['px_fenyuan']."\t".$row['px_kc']."\t".$row['px_shishu']."\t".$row['px_kssj']."\t".$row['px_jssj']."\t".$row['px_cj']."\n";

}

?>