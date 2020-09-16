<?php
	//连接数据库
	include 'conn.php';

	//获取id
	$xm_id = $_GET['xm_id'];


	//编写查询sql语句
	$sql = "SELECT * FROM `yuanxi_zsht_xm` WHERE `xm_id`=$xm_id";
	//执行查询操作、处理结果集
	$result = mysqli_query($link, $sql);
	if (!$result) {
	    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
	}
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	if (!$data) {
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('查找不到该用户！');location='javascript:history.back()';</script>";
		header('Refresh: 2; url=xumu.php');  //3s后跳转
		exit();
	}
	//将二维数数组转化为一维数组
	foreach ($data as $key => $value) {
	  foreach ($value as $k => $v) {
	    $arr[$k]=$v;
	  }
	}





?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>用户信息查询</title>
	<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

	td{
		width: 80px;
	}
	h1
{
	font-family:"Times New Roman";
	font-size:40px;
	
}

</style>
<body>
<h3    align="center"><?php echo $arr["xm_name"] ?>&nbsp;信息</h3>
<form action="xumu.php" method="post" enctype="multipart/form-data">

	<table border="1" width="1000" height="300" align="center" cellspacing="0">
		
  <tr align="center">



			<td bgcolor="#ededed">职工号</td>
			<td><?php echo $arr["xm_id"] ?></td>
			<td bgcolor="#ededed">姓名</td>
			<td><?php echo $arr["xm_name"] ?></td>
			<td bgcolor="#ededed">性别</td>
			<td><?php echo $arr["xm_gender"] ?></td>
			<td colspan="2" rowspan="3" >头像</td>
		</tr>
		<tr align="center">
			<td bgcolor="#ededed">年龄</td>
			<td><?php echo $arr["xm_age"] ?></td>
			<td bgcolor="#ededed">分院</td>
			<td><?php echo $arr["xm_fenyuan"] ?></td>
			<td bgcolor="#ededed">职位</td>
			<td><?php echo $arr["xm_zc"] ?></td>
		</tr>
        <tr align="center">
			<td bgcolor="#ededed">身份证号</td>
			<td colspan="2"><?php echo $arr["xm_sfzh"] ?></td>
			<td bgcolor="#ededed">联系方式</td>
			<td colspan="2"><?php echo $arr["xm_phone"] ?></td>
			
		</tr>
	
		<tr align="center">
			<td bgcolor="#ededed">签到日期</td>
			<td ><?php echo $arr["xm_scqd"] ?></td>
			<td bgcolor="#ededed">签订期限</td>
			<td colspan="2"><?php echo $arr["xm_sczz"] ?></td>
            <td bgcolor="#ededed">签订年数</td>
			<td ><?php echo $arr["xm_ns"] ?></td>
		</tr>
		<tr align="center">
			<td bgcolor="#ededed">正式工资</td>
			<td colspan="6"><?php echo $arr["xm_salary"] ?></td>
			
		</tr>
	
	</table>
	<br><br><br><br><br><br>
						<center>
						<div>
							
							
								<input type="button" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="确定">
							
						</div>
					</center>
</form>
</body>
</html>











				





