<?php

header('Content-type: text/html; charset=utf-8');

header("Content-type:application/vnd.ms-excel;charset=UTF-8");

header("Content-Disposition:filename=园林园艺分院正式合同登记信息表.xlsx");

$conn = mysql_connect("localhost","root","root") or die("不能连接数据库");

mysql_SELECT_db("renshi", $conn);

mysql_query("set names 'UTF8'");

$sql="SELECT * from yuanxi_zsht_yl";

$result=mysql_query($sql);

echo "序号\t职工编号\t姓名\t性别\t年龄\t分院\t职务\t身份证号\t联系方式\t签订时间\t合同期限\t合同年数\t正式工资\n";

while($row=mysql_fetch_array($result)){

  echo $row['yl_id']."\t".$row['yl_name']."\t".$row['yl_gender']."\t".$row['yl_age']."\t".$row['yl_fenyuan']."\t".$row['yl_zc']."\t".$row['yl_sfzh']."\t".$row['yl_phone']."\t".$row['yl_scqd']."\t".$row['yl_sczz']."\t".$row['yl_ns']."\t".$row['yl_salary']."\n";

}

?>