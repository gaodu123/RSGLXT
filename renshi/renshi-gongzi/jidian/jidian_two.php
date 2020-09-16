<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$jd_id = $_POST['jd_id'];
$jd_name = $_POST['jd_name'];
$jd_sfzh = $_POST['jd_sfzh'];
$jd_fenyuan = $_POST['jd_fenyuan'];
$jd_zc = $_POST['jd_zc'];
$jd_jbgz = $_POST['jd_jbgz'];
$jd_gwgz = $_POST['jd_gwgz'];
$jd_jixiao = $_POST['jd_jixiao'];
$jd_qjiakk = $_POST['jd_qjiakk'];
$jd_ylsb = $_POST['jd_ylsb'];
$jd_jiangjin = $_POST['jd_jiangjin'];
$jd_sfgz = $_POST['jd_sfgz'];
$jd_ffny = $_POST['jd_ffny'];





	//编写预处理sql语句
	$sql = "UPDATE `renshi_gz_jd` 
			SET 
				`jd_name`= ?, 
				`jd_sfzh`= ?, 
				
				
				`jd_fenyuan`= ? ,
				`jd_zc`= ?, 
				`jd_jbgz`= ? ,
				`jd_gwgz`= ? ,
				`jd_jixiao`= ? ,
				`jd_qjiakk`= ? ,
				`jd_jiangjin`= ? ,
				`jd_sfgz`= ? ,
				`jd_ffny`= ? ,
				
				 `jd_ylsb`= ?
			WHERE `jd_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssssss', $jd_name, $jd_sfzh,  $jd_fenyuan ,$jd_zc, $jd_jbgz, $jd_gwgz, $jd_jixiao,  $jd_qjiakk ,$jd_jiangjin,$jd_sfgz, $jd_ffny,$jd_ylsb,  $jd_id);
	

	if ($jd_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:jidian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=jidian.php');  //3s后跳转

    	
	}

  

