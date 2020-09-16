<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$xd_id = $_POST['xd_id'];
$xd_name = $_POST['xd_name'];
$xd_gender = $_POST['xd_gender'];
$xd_age = $_POST['xd_age'];
$xd_fenyuan = $_POST['xd_fenyuan'];
$xd_zc = $_POST['xd_zc'];
$xd_syts = $_POST['xd_syts'];
$xd_qsrq = $_POST['xd_qsrq'];
$xd_zzrq = $_POST['xd_zzrq'];
$xd_salary = $_POST['xd_salary'];




	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_syht_xd` 
			SET 
				`xd_name`= ?, 
				`xd_gender`= ?, 
				`xd_age`= ? ,
				
				`xd_fenyuan`= ? ,
				`xd_zc`= ?, 
				`xd_syts`= ? ,
				`xd_qsrq`= ? ,
				`xd_zzrq`= ? ,
				
				 `xd_salary`= ?
			WHERE `xd_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssss', $xd_name, $xd_gender, $xd_age,  $xd_fenyuan ,$xd_zc, $xd_syts, $xd_qsrq,  $xd_zzrq ,$xd_salary,$xd_id);
	

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
		header('Refresh: 3; url=xiandai.php');  //3s后跳转

    	
	}

  

