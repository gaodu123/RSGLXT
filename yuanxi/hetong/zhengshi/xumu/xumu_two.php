<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$xm_id = $_POST['xm_id'];
$xm_name = $_POST['xm_name'];
$xm_gender = $_POST['xm_gender'];
$xm_age = $_POST['xm_age'];
$xm_fenyuan = $_POST['xm_fenyuan'];
$xm_zc = $_POST['xm_zc'];
$xm_sfzh = $_POST['xm_sfzh'];
$xm_phone = $_POST['xm_phone'];
$xm_scqd = $_POST['xm_scqd'];
$xm_sczz = $_POST['xm_sczz'];
$xm_ns = $_POST['xm_ns'];
$xm_salary = $_POST['xm_salary'];



	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_zsht_xm` 
			SET 
				`xm_name`= ?, 
				`xm_gender`= ?, 
				`xm_age`= ? ,
				
				`xm_fenyuan`= ? ,
				`xm_zc`= ?, 
				`xm_sfzh`= ? ,
				`xm_phone`= ? ,
				`xm_scqd`= ? ,
				`xm_sczz`= ? ,
				`xm_ns`= ? ,
				 `xm_salary`= ?
			WHERE `xm_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssssss', $xm_name, $xm_gender, $xm_age,  $xm_fenyuan ,$xm_zc, $xm_sfzh, $xm_phone,  $xm_scqd ,$xm_sczz,$xm_ns,$xm_salary,$xm_id);
	

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

  

