<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$xx_id = $_POST['xx_id'];
$xx_name = $_POST['xx_name'];
$xx_sfzh = $_POST['xx_sfzh'];
$xx_fenyuan = $_POST['xx_fenyuan'];
$xx_zc = $_POST['xx_zc'];
$xx_jbgz = $_POST['xx_jbgz'];
$xx_gwgz = $_POST['xx_gwgz'];
$xx_jixiao = $_POST['xx_jixiao'];
$xx_qjiakk = $_POST['xx_qjiakk'];
$xx_ylsb = $_POST['xx_ylsb'];
$xx_jiangjin = $_POST['xx_jiangjin'];
$xx_sfgz = $_POST['xx_sfgz'];
$xx_ffny = $_POST['xx_ffny'];





	//编写预处理sql语句
	$sql = "UPDATE `renshi_gz_xx` 
			SET 
				`xx_name`= ?, 
				`xx_sfzh`= ?, 
				
				
				`xx_fenyuan`= ? ,
				`xx_zc`= ?, 
				`xx_jbgz`= ? ,
				`xx_gwgz`= ? ,
				`xx_jixiao`= ? ,
				`xx_qjiakk`= ? ,
				`xx_jiangjin`= ? ,
				`xx_sfgz`= ? ,
				`xx_ffny`= ? ,
				
				 `xx_ylsb`= ?
			WHERE `xx_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssssss', $xx_name, $xx_sfzh,  $xx_fenyuan ,$xx_zc, $xx_jbgz, $xx_gwgz, $xx_jixiao,  $xx_qjiakk ,$xx_jiangjin,$xx_sfgz, $xx_ffny,$xx_ylsb,  $xx_id);
	

	if ($xx_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:xinxi.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=xinxi.php');  //3s后跳转

    	
	}

  

