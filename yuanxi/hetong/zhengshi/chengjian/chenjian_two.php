<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$cj_id = $_POST['cj_id'];
$cj_name = $_POST['cj_name'];
$cj_gender = $_POST['cj_gender'];
$cj_age = $_POST['cj_age'];
$cj_fenyuan = $_POST['cj_fenyuan'];
$cj_zc = $_POST['cj_zc'];
$cj_sfzh = $_POST['cj_sfzh'];
$cj_phone = $_POST['cj_phone'];
$cj_scqd = $_POST['cj_scqd'];
$cj_sczz = $_POST['cj_sczz'];
$cj_ns = $_POST['cj_ns'];
$cj_salary = $_POST['cj_salary'];



	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_zsht_cj` 
			SET 
				`cj_name`= ?, 
				`cj_gender`= ?, 
				`cj_age`= ? ,
				
				`cj_fenyuan`= ? ,
				`cj_zc`= ?, 
				`cj_sfzh`= ? ,
				`cj_phone`= ? ,
				`cj_scqd`= ? ,
				`cj_sczz`= ? ,
				`cj_ns`= ? ,
				 `cj_salary`= ?
			WHERE `cj_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssssss', $cj_name, $cj_gender, $cj_age,  $cj_fenyuan ,$cj_zc, $cj_sfzh, $cj_phone,  $cj_scqd ,$cj_sczz,$cj_ns,$cj_salary,$cj_id);
	

	if ($cj_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:chenjian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=chenjian.php');  //3s后跳转

    	
	}

  

