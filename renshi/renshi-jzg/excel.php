<?php

header('Content-type: text/html; charset=utf-8');

header("Content-type:application/vnd.ms-excel;charset=UTF-8");

header("Content-Disposition:filename=成都农业科技职业学院教职工信息表.xlsx");

$conn = mysql_connect("localhost","root","root") or die("不能连接数据库");

mysql_SELECT_db("renshi", $conn);

mysql_query("set names 'UTF8'");

$sql="SELECT * from jiaozhigong ";

$result=mysql_query($sql);

echo "职工编号\t姓名\t性别\t年龄\t身份证号\t联系方式\t职务\t民族\t政治面貌\t籍贯\t学历\n";

while($row=mysql_fetch_array($result)){

  echo $row['id']."\t".$row['zgname']."\t".$row['zggender']."\t".$row['age']."\t".$row['sfzh']."\t".$row['phone']."\t".$row['zc']."\t".$row['mz']."\t".$row['zzmm']."\t".$row['jiguan']."\t".$row['xueli']."\n";

}

?>