<?php

header('Content-type: text/html; charset=utf-8');

header("Content-type:application/vnd.ms-excel;charset=UTF-8");

header("Content-Disposition:filename=机电技术分院解聘人员信息表.xlsx");

$conn = mysql_connect("localhost","root","root") or die("不能连接数据库");

mysql_SELECT_db("renshi", $conn);

mysql_query("set names 'UTF8'");

$sql="SELECT * from yuanxi_syht_jd ";

$result=mysql_query($sql);

echo "序号\t职工编号\t姓名\t性别\t年龄\t分院\t职务\t身份证号\t联系方式\t试用天数\t起始日期\t终止日期\t试用工资\n";

while($row=mysql_fetch_array($result)){

  echo $row['sy_id']."\t".$row['jd_id']."\t".$row['jd_name']."\t".$row['jd_gender']."\t".$row['jd_age']."\t".$row['jd_fenyuan']."\t".$row['jd_zc']."\t".$row['jd_sfzh']."\t".$row['jd_phone']."\t".$row['jd_syts']."\t".$row['jd_qsrq']."\t".$row['jd_zzrq']."\t".$row['jd_salary']."\n";

}

?>