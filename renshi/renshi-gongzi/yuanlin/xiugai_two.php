<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$yl_id = $_POST['yl_id'];
$yl_name = $_POST['yl_name'];
$yl_sfzh = $_POST['yl_sfzh'];
$yl_fenyuan = $_POST['yl_fenyuan'];
$yl_zc = $_POST['yl_zc'];
$yl_jbgz = $_POST['yl_jbgz'];
$yl_gwgz = $_POST['yl_gwgz'];
$yl_jixiao = $_POST['yl_jixiao'];
$yl_qjiakk = $_POST['yl_qjiakk'];
$yl_ylsb = $_POST['yl_ylsb'];
$yl_jiangjin = $_POST['yl_jiangjin'];
$yl_sfgz = $_POST['yl_sfgz'];
$yl_ffny = $_POST['yl_ffny'];





	//编写预处理sql语句
	$sql = "UPDATE `renshi_gz_yl` 
			SET 
				`yl_name`= ?, 
				`yl_sfzh`= ?, 
				
				
				`yl_fenyuan`= ? ,
				`yl_zc`= ?, 
				`yl_jbgz`= ? ,
				`yl_gwgz`= ? ,
				`yl_jixiao`= ? ,
				`yl_qjiakk`= ? ,
				`yl_jiangjin`= ? ,
				`yl_sfgz`= ? ,
				`yl_ffny`= ? ,
				
				 `yl_ylsb`= ?
			WHERE `yl_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssssss', $yl_name, $yl_sfzh,  $yl_fenyuan ,$yl_zc, $yl_jbgz, $yl_gwgz, $yl_jixiao,  $yl_qjiakk ,$yl_jiangjin,$yl_sfgz, $yl_ffny,$yl_ylsb,  $yl_id);
	

	if ($yl_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:yuanlin.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=yuanlin.php');  //3s后跳转

    	
	}

  

