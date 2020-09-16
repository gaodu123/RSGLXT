<?php

header('Content-type: text/html; charset=utf-8');

header("Content-type:application/vnd.ms-excel;charset=UTF-8");

header("Content-Disposition:filename=经济管理分院解聘人员信息表.xlsx");

$conn = mysql_connect("localhost","root","root") or die("不能连接数据库");

mysql_SELECT_db("renshi", $conn);

mysql_query("set names 'UTF8'");

$sql="SELECT * from yuanxi_syht_jg";

$result=mysql_query($sql);

echo "序号\t职工编号\t姓名\t性别\t年龄\t分院\t职务\t身份证号\t联系方式\t试用天数\t起始日期\t终止日期\t试用工资\n";

while($row=mysql_fetch_array($result)){

  echo $row['sy_id']."\t".$row['jj_id']."\t".$row['jj_name']."\t".$row['jj_gender']."\t".$row['jj_age']."\t".$row['jj_fenyuan']."\t".$row['jj_zc']."\t".$row['jj_sfzh']."\t".$row['jj_phone']."\t".$row['jj_syts']."\t".$row['jj_qsrq']."\t".$row['jj_zzrq']."\t".$row['jj_salary']."\n";

}

?>