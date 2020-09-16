
<html>
	<head>
		<meta charset="UTF-8">
		<title>成农院人事管理系统</title>
		

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="resources/css/styles1.css" type="text/css" rel="stylesheet"/>
<style type="text/css">
	
	.mx-5 {
  margin-left: 20rem !important;
}
</style>
</head>
<body>

	<br><br><br><br><br><br>
<center>
<div class="form-inline" role="form">
    <div class="row">
      <div class="col-sm-8 mx-5">

<?php
//连接数据库
include 'conn.php';

// 获取修改后的学生信息
$qx_id = $_POST['qx_id'];
$qx_name = $_POST['qx_name'];
$qx_pass = $_POST['qx_pass'];


	//编写预处理sql语句
	$sql = "UPDATE `quanxians` 
			SET 
				`qx_name`= ?, 
				`qx_pass`= ?
				
			WHERE `qx_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sss', $qx_name,$qx_pass,$qx_id);
	

	if ($qx_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			echo "<center>"."<div class='panel panel-default'>
    <div class='panel-body'style='background: #55AA00; color: #FFFFFF'>
        修改密码成功！
    </div>
</div>"."</center>";
			header("Refresh: 1; url=index.php");
		}else{
			exit('修改密码信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('密码修改失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=index.php');  //3s后跳转

    	
	}

  
?>


</div>
</div>
</div>
</center>
</body>
</html>