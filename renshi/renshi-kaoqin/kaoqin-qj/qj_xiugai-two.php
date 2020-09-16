<?php
//连接数据库
include 'conn.php';

$qj_id = $_POST['qj_id'];
$qj_name = $_POST['qj_name'];
$qj_gender = $_POST['qj_gender'];
$qj_fenyuan = $_POST['qj_fenyuan'];
$qj_bumen = $_POST['qj_bumen'];
$qj_zc = $_POST['qj_zc'];
$qj_qjts = $_POST['qj_qjts'];
$qj_qjyy = $_POST['qj_qjyy'];
$qj_qjksrq = $_POST['qj_qjksrq'];
$qj_zzrq = $_POST['qj_zzrq'];
$qj_pzr = $_POST['qj_pzr'];
$qj_qjrq = $_POST['qj_qjrq'];


	//编写预处理sql语句
	$sql = "UPDATE `renshi_kq_qj` 
			SET 
				`qj_name`= ?, 
				`qj_gender`= ?, 
				`qj_fenyuan`= ? ,
				
				`qj_bumen`= ? ,
				`qj_zc`= ?,
				`qj_qjts`= ?, 
				`qj_qjyy`= ?, 
				`qj_qjksrq`= ? ,
				
				`qj_zzrq`= ? ,
				`qj_pzr`= ?,
				`qj_qjrq`= ?
			WHERE `qj_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssssss', $qj_name, $qj_gender, $qj_fenyuan,  $qj_bumen,$qj_zc, $qj_qjts, $qj_qjyy, $qj_qjksrq,  $qj_zzrq,$qj_pzr, $qj_qjrq,$qj_id);
	

	if ($qj_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:qj_quanxian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=qj_quanxian.php');  //3s后跳转

    	
	}

  

