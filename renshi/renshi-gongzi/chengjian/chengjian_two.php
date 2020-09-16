<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$cj_id = $_POST['cj_id'];
$cj_name = $_POST['cj_name'];
$cj_sfzh = $_POST['cj_sfzh'];
$cj_zc = $_POST['cj_zc'];
$cj_jbgz = $_POST['cj_jbgz'];
$cj_gwgz = $_POST['cj_gwgz'];
$cj_jixiao = $_POST['cj_jixiao'];
$cj_qjiakk = $_POST['cj_qjiakk'];
$cj_ylsb = $_POST['cj_ylsb'];
$cj_jiangjin = $_POST['cj_jiangjin'];
$cj_sfgz = $_POST['cj_sfgz'];
$cj_ffny = $_POST['cj_ffny'];
$cj_fenyuan = $_POST['cj_fenyuan'];





	//编写预处理sql语句
	$sql = "UPDATE `renshi_gz_cj` 
			SET 
				`cj_name`= ?, 
				`cj_sfzh`= ?, 
				
				
				`cj_fenyuan`= ? ,
				`cj_zc`= ?, 
				`cj_jbgz`= ? ,
				`cj_gwgz`= ? ,
				`cj_jixiao`= ? ,
				`cj_qjiakk`= ? ,
				`cj_jiangjin`= ? ,
				`cj_sfgz`= ? ,
				`cj_ffny`= ? ,
				
				 `cj_ylsb`= ?
			WHERE `cj_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssssss', $cj_name, $cj_sfzh,  $cj_fenyuan ,$cj_zc, $cj_jbgz, $cj_gwgz, $cj_jixiao,  $cj_qjiakk ,$cj_jiangjin,$cj_sfgz, $cj_ffny,$cj_ylsb,  $cj_id);
	

	if ($cj_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:chengjian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=chengjian.php');  //3s后跳转

    	
	}

  

