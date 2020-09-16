<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$xd_id = $_POST['xd_id'];
$xd_name = $_POST['xd_name'];
$xd_sfzh = $_POST['xd_sfzh'];
$xd_fenyuan = $_POST['xd_fenyuan'];
$xd_zc = $_POST['xd_zc'];
$xd_jbgz = $_POST['xd_jbgz'];
$xd_gwgz = $_POST['xd_gwgz'];
$xd_jixiao = $_POST['xd_jixiao'];
$xd_qjiakk = $_POST['xd_qjiakk'];
$xd_ylsb = $_POST['xd_ylsb'];
$xd_jiangjin = $_POST['xd_jiangjin'];
$xd_sfgz = $_POST['xd_sfgz'];
$xd_ffny = $_POST['xd_ffny'];





	//编写预处理sql语句
	$sql = "UPDATE `renshi_gz_xd` 
			SET 
				`xd_name`= ?, 
				`xd_sfzh`= ?, 
				
				
				`xd_fenyuan`= ? ,
				`xd_zc`= ?, 
				`xd_jbgz`= ? ,
				`xd_gwgz`= ? ,
				`xd_jixiao`= ? ,
				`xd_qjiakk`= ? ,
				`xd_jiangjin`= ? ,
				`xd_sfgz`= ? ,
				`xd_ffny`= ? ,
				
				 `xd_ylsb`= ?
			WHERE `xd_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssssss', $xd_name, $xd_sfzh,  $xd_fenyuan ,$xd_zc, $xd_jbgz, $xd_gwgz, $xd_jixiao,  $xd_qjiakk ,$xd_jiangjin,$xd_sfgz, $xd_ffny,$xd_ylsb,  $xd_id);
	

	if ($xd_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:xiandai.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=xindai.php');  //3s后跳转

    	
	}

  

