<?php

header('Content-type: text/html; charset=utf-8');

header("Content-type:application/vnd.ms-excel;charset=UTF-8");

header("Content-Disposition:filename=成都农业科技职业学院解聘教职工信息.xlsx");

$conn = mysql_connect("localhost","root","root") or die("不能连接数据库");

mysql_SELECT_db("renshi", $conn);

mysql_query("set names 'UTF8'");

$sql="SELECT * from yuanxi_jiepin ";

$result=mysql_query($sql);

echo "序号\t职工编号\t姓名\t性别\t年龄\t身份证号\t联系方式\t分院\t职务\t解聘时间\t停薪时间\n";

while($row=mysql_fetch_array($result)){

  echo $row['id']."\t".$row['jp_id']."\t".$row['jp_name']."\t".$row['jp_gender']."\t".$row['jp_age']."\t".$row['jp_sfzh']."\t".$row['jp_phone']."\t".$row['jp_fenyuan']."\t".$row['jp_zc']."\t".$row['jp_time']."\t".$row['jp_txtime']."\n";

}

?>