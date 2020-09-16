<?php

header('Content-type: text/html; charset=utf-8');

header("Content-type:application/vnd.ms-excel;charset=UTF-8");

header("Content-Disposition:filename=城乡建设分院解聘人员信息表.xlsx");

$conn = mysql_connect("localhost","root","root") or die("不能连接数据库");

mysql_SELECT_db("renshi", $conn);

mysql_query("set names 'UTF8'");

$sql="SELECT * from yuanxi_syht_cj ";

$result=mysql_query($sql);

echo "序号\t职工编号\t姓名\t性别\t年龄\t分院\t职务\t身份证号\t联系方式\t试用天数\t起始日期\t终止日期\t试用工资\n";

while($row=mysql_fetch_array($result)){

  echo $row['sy_id']."\t".$row['cj_id']."\t".$row['cj_name']."\t".$row['cj_gender']."\t".$row['cj_age']."\t".$row['cj_fenyuan']."\t".$row['cj_zc']."\t".$row['cj_sfzh']."\t".$row['cj_phone']."\t".$row['cj_syts']."\t".$row['cj_qsrq']."\t".$row['cj_zzrq']."\t".$row['cj_salary']."\n";

}

?>