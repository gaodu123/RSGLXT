<?php

header('Content-type: text/html; charset=utf-8');

header("Content-type:application/vnd.ms-excel;charset=UTF-8");

header("Content-Disposition:filename=畜牧兽医分院解聘人员信息表.xlsx");

$conn = mysql_connect("localhost","root","root") or die("不能连接数据库");

mysql_SELECT_db("renshi", $conn);

mysql_query("set names 'UTF8'");

$sql="SELECT * from yuanxi_syht_xm ";

$result=mysql_query($sql);

echo "序号\t职工编号\t姓名\t性别\t年龄\t分院\t职务\t身份证号\t联系方式\t试用天数\t起始日期\t终止日期\t试用工资\n";

while($row=mysql_fetch_array($result)){

  echo $row['sy_id']."\t".$row['xm_id']."\t".$row['xm_name']."\t".$row['xm_gender']."\t".$row['xm_age']."\t".$row['xm_fenyuan']."\t".$row['xm_zc']."\t".$row['xm_sfzh']."\t".$row['xm_phone']."\t".$row['xm_syts']."\t".$row['xm_qsrq']."\t".$row['xm_zzrq']."\t".$row['xm_salary']."\n";

}

?>