<?php
	//连接数据库
	include 'conn.php';

	//获取id
	$qx_id = $_GET['qx_id'];


	//编写查询sql语句
	$sql = "SELECT * FROM `xitong_qx` WHERE `qx_id`=$qx_id";
	//执行查询操作、处理结果集
	$result = mysqli_query($link, $sql);
	if (!$result) {
	    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
	}
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	if (!$data) {
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('查询不到该用户！');location='javascript:history.back()';</script>";
		header('Refresh: 2; url=quanxian_quanxian.php');  //3s后跳转
		exit();
	}
	//将二维数数组转化为一维数组
	foreach ($data as $key => $value) {
	  foreach ($value as $k => $v) {
	    $arr[$k]=$v;
	  }
	}





?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>学生信息管理系统</title>
		

		<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="panel panel-default">
    <div class="panel-body">
		<div class="form-inline" role="form">
    <div class="row">
      <div class="col-sm-12 ">
      	<br><br>
<!--输出定制表单-->
	 <div class="table-responsive">
				<form action="quanxian_quanxian.php" method="post" enctype="multipart/form-data">
            
					<h3 align="center"><?php echo $arr["qx_name"] ?>&nbsp;信息</h3>
					<br>
					<table class="table">
						<thead>
						<tr style="background: #F5F5F5 ">
							<td align="center">职工号</td>
        <td align="center">姓名</td>
       <td align="center">密码</td>
       <td align="center">身份证号</td>
        <td  align="center">联系方式</td>
 
        <td align="center">用户类型</td>
      
           
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center"><?php echo $arr["qx_id"] ?></td>
							<td align="center"><?php echo $arr["qx_name"] ?></td>
						   <td align="center"><?php echo $arr["qx_pass"] ?></td>
						    <td align="center"><?php echo $arr["qx_sfzh"] ?></td>
						    <td align="center"><?php echo $arr["qx_phone"] ?></td>
						   
						   
						    <td align="center"><?php echo $arr["type"] ?></td>




						</tr>
					</tbody>
						</table>
						<br><br><br><br><br><br>
						<center>
						<div>
							
							
								<input type="button" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="确定">
							
						</div>
					</center>
				</form>
			</div>
			</div>
		</div></div></div></div></div>
	</body>
</html>







