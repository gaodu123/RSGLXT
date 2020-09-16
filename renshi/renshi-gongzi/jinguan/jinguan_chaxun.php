<?php
	//连接数据库
	include 'conn.php';

	//获取id
	$jg_id = $_GET['jg_id'];


	//编写查询sql语句
	$sql = "SELECT * FROM `renshi_gz_jg` WHERE `jg_id`=$jg_id";
	//执行查询操作、处理结果集
	$result = mysqli_query($link, $sql);
	if (!$result) {
	    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
	}
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	if (!$data) {
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('查找不到该用户！');location='javascript:history.back()';</script>";
		header('Refresh: 2; url=jinguan.php');  //3s后跳转
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
<br>
	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  style="background: #008800;color: #FFFFFF; " >  打印</button>
	<br>
<h3    align="center"><?php echo $arr["jg_name"] ?>&nbsp;工资信息</h3>
<br>
<form action="jinguan.php" method="post" enctype="multipart/form-data">

	<table  border="1" width="1000" height="300" align="center" cellspacing="0" style="background: 	#F5F5F5">
		
  <tr align="center">



			<td >职工号</td>
			<td><?php echo $arr["jg_id"] ?></td>
			<td>姓名</td>
			<td><?php echo $arr["jg_name"] ?></td>
			<td >分院</td>
			<td><?php echo $arr["jg_fenyuan"] ?></td>
			
		</tr>
		
        <tr align="center">
        	<td>职位</td>
			<td><?php echo $arr["jg_zc"] ?></td>
			<td >身份证号</td>
			<td colspan="3"><?php echo $arr["jg_sfzh"] ?></td>
			
			
		</tr>
	
		<tr align="center">
			<td >基本工资</td>
			<td colspan="2"><?php echo $arr["jg_jbgz"] ?></td>
			<td >岗位工资</td>
			<td colspan="2"><?php echo $arr["jg_gwgz"] ?></td>
			
            
		</tr>
		<tr align="center">
			<td>绩效</td>
			<td ><?php echo $arr["jg_jixiao"] ?></td>
			<td>请假扣款</td>
			<td ><?php echo $arr["jg_qjiakk"] ?></td>
			<td >医疗社保</td>
			<td ><?php echo $arr["jg_ylsb"] ?></td>
			
		</tr>
		<tr align="center">
			<td>奖金</td>
			<td ><?php echo $arr["jg_jiangjin"] ?></td>
			
			<td>发放日期</td>
			<td colspan="3"><?php echo $arr["jg_ffny"] ?></td>
			
		</tr>
		<tr align="center">
			
			<td>实发工资</td>
			<td colspan="5" ><?php echo $arr["jg_sfgz"] ?></td>
			
			
		</tr>
	
	</table>
	<br><br><br><br>
						<center>
						<div>
							
							
								<input type="button" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="确定">
							
						</div>
					</center>
</form>
</body>
</html>











				





