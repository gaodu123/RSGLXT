<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$xx_id = $_POST['xx_id'];
$xx_name = $_POST['xx_name'];
$xx_gender = $_POST['xx_gender'];
$xx_age = $_POST['xx_age'];
$xx_fenyuan = $_POST['xx_fenyuan'];
$xx_zc = $_POST['xx_zc'];
$xx_sfzh = $_POST['xx_sfzh'];
$xx_phone = $_POST['xx_phone'];
$xx_scqd = $_POST['xx_scqd'];
$xx_sczz = $_POST['xx_sczz'];
$xx_ns = $_POST['xx_ns'];
$xx_salary = $_POST['xx_salary'];



	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_zsht_xx` 
			SET 
				`xx_name`= ?, 
				`xx_gender`= ?, 
				`xx_age`= ? ,
				
				`xx_fenyuan`= ? ,
				`xx_zc`= ?, 
				`xx_sfzh`= ? ,
				`xx_phone`= ? ,
				`xx_scqd`= ? ,
				`xx_sczz`= ? ,
				`xx_ns`= ? ,
				 `xx_salary`= ?
			WHERE `xx_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssssss', $xx_name, $xx_gender, $xx_age,  $xx_fenyuan ,$xx_zc, $xx_sfzh, $xx_phone,  $xx_scqd ,$xx_sczz,$xx_ns,$xx_salary,$xx_id);
	

	if ($xx_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:xinxi.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=xinxi.php');  //3s后跳转

    	
	}

  

