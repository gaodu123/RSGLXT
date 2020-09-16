<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$xm_id = $_POST['xm_id'];
$xm_name = $_POST['xm_name'];
$xm_sfzh = $_POST['xm_sfzh'];
$xm_fenyuan = $_POST['xm_fenyuan'];
$xm_zc = $_POST['xm_zc'];
$xm_jbgz = $_POST['xm_jbgz'];
$xm_gwgz = $_POST['xm_gwgz'];
$xm_jixiao = $_POST['xm_jixiao'];
$xm_qjiakk = $_POST['xm_qjiakk'];
$xm_ylsb = $_POST['xm_ylsb'];
$xm_jiangjin = $_POST['xm_jiangjin'];
$xm_sfgz = $_POST['xm_sfgz'];
$xm_ffny = $_POST['xm_ffny'];





	//编写预处理sql语句
	$sql = "UPDATE `renshi_gz_xm` 
			SET 
				`xm_name`= ?, 
				`xm_sfzh`= ?, 
				
				
				`xm_fenyuan`= ? ,
				`xm_zc`= ?, 
				`xm_jbgz`= ? ,
				`xm_gwgz`= ? ,
				`xm_jixiao`= ? ,
				`xm_qjiakk`= ? ,
				`xm_jiangjin`= ? ,
				`xm_sfgz`= ? ,
				`xm_ffny`= ? ,
				
				 `xm_ylsb`= ?
			WHERE `xm_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssssss', $xm_name, $xm_sfzh,  $xm_fenyuan ,$xm_zc, $xm_jbgz, $xm_gwgz, $xm_jixiao,  $xm_qjiakk ,$xm_jiangjin,$xm_sfgz, $xm_ffny,$xm_ylsb,  $xm_id);
	

	if ($xm_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:xumu.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=xumu.php');  //3s后跳转

    	
	}

  

