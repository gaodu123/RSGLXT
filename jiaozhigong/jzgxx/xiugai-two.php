<?php
//连接数据库
include 'conns.php';

// 获取修改后的学生信息
$qx_id = $_POST['qx_id'];
$qx_name = $_POST['qx_name'];
$qx_sfzh = $_POST['qx_sfzh'];
$qx_phone = $_POST['qx_phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$zzmm = $_POST['zzmm'];
$xueli = $_POST['xueli'];
$mz = $_POST['mz'];
$jiguan = $_POST['jiguan'];
$zc = $_POST['zc'];
$fenyuan = $_POST['fenyuan'];
$eamil = $_POST['eamil'];


	//编写预处理sql语句
	$sql = "UPDATE `quanxians` 
			SET 
				`qx_name`= ?, 
				`gender`= ?, 
				`age`= ? ,
				
				`mz`= ? ,
				`qx_sfzh`= ?, 
				`qx_phone`= ? ,
				`zzmm`= ? ,
				`jiguan`= ? ,
				`xueli`= ?,
				`fenyuan`= ? ,
				`eamil`= ?,

				 `zc`= ?
			WHERE `qx_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssssss', $qx_name, $gender, $age,  $mz ,$qx_sfzh, $qx_phone, $zzmm,  $jiguan ,$xueli,$fenyuan,$eamil,$zc,$qx_id);
	

	if ($qx_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:jzg_xinxi.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('信息填写失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=jzg_chaxun.php');  //3s后跳转

    	
	}

  

