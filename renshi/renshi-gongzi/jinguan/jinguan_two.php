<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$jg_id = $_POST['jg_id'];
$jg_name = $_POST['jg_name'];
$jg_sfzh = $_POST['jg_sfzh'];
$jg_fenyuan = $_POST['jg_fenyuan'];
$jg_zc = $_POST['jg_zc'];
$jg_jbgz = $_POST['jg_jbgz'];
$jg_gwgz = $_POST['jg_gwgz'];
$jg_jixiao = $_POST['jg_jixiao'];
$jg_qjiakk = $_POST['jg_qjiakk'];
$jg_ylsb = $_POST['jg_ylsb'];
$jg_jiangjin = $_POST['jg_jiangjin'];
$jg_sfgz = $_POST['jg_sfgz'];
$jg_ffny = $_POST['jg_ffny'];





	//编写预处理sql语句
	$sql = "UPDATE `renshi_gz_jg` 
			SET 
				`jg_name`= ?, 
				`jg_sfzh`= ?, 
				
				
				`jg_fenyuan`= ? ,
				`jg_zc`= ?, 
				`jg_jbgz`= ? ,
				`jg_gwgz`= ? ,
				`jg_jixiao`= ? ,
				`jg_qjiakk`= ? ,
				`jg_jiangjin`= ? ,
				`jg_sfgz`= ? ,
				`jg_ffny`= ? ,
				
				 `jg_ylsb`= ?
			WHERE `jg_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssssss', $jg_name, $jg_sfzh,  $jg_fenyuan ,$jg_zc, $jg_jbgz, $jg_gwgz, $jg_jixiao,  $jg_qjiakk ,$jg_jiangjin,$jg_sfgz, $jg_ffny,$jg_ylsb,  $jg_id);
	

	if ($jg_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:jinguan.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=jinguan.php');  //3s后跳转

    	
	}

  

