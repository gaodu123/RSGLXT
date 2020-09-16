<?php
//连接数据库
include 'conn.php';

// 获取修改后的学生信息
$qx_id = $_POST['qx_id'];
$qx_name = $_POST['qx_name'];
$qx_sfzh = $_POST['qx_sfzh'];
$qx_phone = $_POST['qx_phone'];
$qx_pass = $_POST['qx_pass'];
$type = $_POST['type'];



	//编写预处理sql语句
	$sql = "UPDATE `xitong_qx` 
			SET 
				`qx_name`= ?, 
				
				`qx_sfzh`= ?, 
				`qx_phone`= ? ,
				
				`qx_pass`= ? ,
				`type`= ? 
			WHERE `qx_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssss', $qx_name, $qx_sfzh, $qx_phone, $qx_pass,  $type ,$qx_id);
	

	if ($qx_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:quanxian_quanxian.php");
		}else{
			exit('修改学生信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改用户失败！！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=quanxian_quanxian.php');  //3s后跳转

    	
	}

  

