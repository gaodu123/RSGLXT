<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$yl_id = $_POST['yl_id'];
$yl_name = $_POST['yl_name'];
$yl_gender = $_POST['yl_gender'];
$yl_age = $_POST['yl_age'];
$yl_fenyuan = $_POST['yl_fenyuan'];
$yl_zc = $_POST['yl_zc'];
$yl_sfzh = $_POST['yl_sfzh'];
$yl_phone = $_POST['yl_phone'];
$yl_scqd = $_POST['yl_scqd'];
$yl_sczz = $_POST['yl_sczz'];
$yl_ns = $_POST['yl_ns'];
$yl_salary = $_POST['yl_salary'];



	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_zsht_yl` 
			SET 
				`yl_name`= ?, 
				`yl_gender`= ?, 
				`yl_age`= ? ,
				
				`yl_fenyuan`= ? ,
				`yl_zc`= ?, 
				`yl_sfzh`= ? ,
				`yl_phone`= ? ,
				`yl_scqd`= ? ,
				`yl_sczz`= ? ,
				`yl_ns`= ? ,
				 `yl_salary`= ?
			WHERE `yl_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssssss', $yl_name, $yl_gender, $yl_age,  $yl_fenyuan ,$yl_zc, $yl_sfzh, $yl_phone,  $yl_scqd ,$yl_sczz,$yl_ns,$yl_salary,$yl_id);
	

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

  

