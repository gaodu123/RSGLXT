<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$jd_id = $_POST['jd_id'];
$jd_name = $_POST['jd_name'];
$jd_gender = $_POST['jd_gender'];
$jd_age = $_POST['jd_age'];
$jd_fenyuan = $_POST['jd_fenyuan'];
$jd_zc = $_POST['jd_zc'];
$jd_sfzh = $_POST['jd_sfzh'];
$jd_phone = $_POST['jd_phone'];
$jd_scqd = $_POST['jd_scqd'];
$jd_sczz = $_POST['jd_sczz'];
$jd_ns = $_POST['jd_ns'];
$jd_salary = $_POST['jd_salary'];



	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_zsht_jd` 
			SET 
				`jd_name`= ?, 
				`jd_gender`= ?, 
				`jd_age`= ? ,
				
				`jd_fenyuan`= ? ,
				`jd_zc`= ?, 
				`jd_sfzh`= ? ,
				`jd_phone`= ? ,
				`jd_scqd`= ? ,
				`jd_sczz`= ? ,
				`jd_ns`= ? ,
				 `jd_salary`= ?
			WHERE `jd_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssssss', $jd_name, $jd_gender, $jd_age,  $jd_fenyuan ,$jd_zc, $jd_sfzh, $jd_phone,  $jd_scqd ,$jd_sczz,$jd_ns,$jd_salary,$jd_id);
	

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

  

