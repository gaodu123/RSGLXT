<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$px_id = $_POST['px_id'];
$px_name = $_POST['px_name'];
$px_gender = $_POST['px_gender'];
$px_age = $_POST['px_age'];
$px_fenyuan = $_POST['px_fenyuan'];
$px_kc = $_POST['px_kc'];
$px_shishu = $_POST['px_shishu'];
$px_kssj = $_POST['px_kssj'];
$px_jssj = $_POST['px_jssj'];
$px_cj = $_POST['px_cj'];




	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_kcjl` 
			SET 
				`px_name`= ?, 
				`px_gender`= ?, 
				`px_age`= ? ,
				
				`px_fenyuan`= ? ,
				`px_kc`= ?, 
				`px_shishu`= ? ,
				`px_kssj`= ? ,
				`px_jssj`= ? ,
				
				 `px_cj`= ?
			WHERE `px_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssss', $px_name, $px_gender, $px_age,  $px_fenyuan ,$px_kc, $px_shishu, $px_kssj,  $px_jssj ,$px_cj,$px_id);
	

	if ($px_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:jl_quanxian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=jl_quanxian.php');  //3s后跳转

    	
	}

  

