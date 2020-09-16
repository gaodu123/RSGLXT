<?php
//连接数据库
include 'conn.php';

// 获取修改后的学生信息
$id = $_POST['id'];
$zgname = $_POST['zgname'];
$sfzh = $_POST['sfzh'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$zggender = $_POST['zggender'];
$zzmm = $_POST['zzmm'];
$xueli = $_POST['xueli'];
$mz = $_POST['mz'];
$jiguan = $_POST['jiguan'];
$zc = $_POST['zc'];



	//编写预处理sql语句
	$sql = "UPDATE `renshi_jzg` 
			SET 
				`zgname`= ?, 
				`zggender`= ?, 
				`age`= ? ,
				
				`mz`= ? ,
				`sfzh`= ?, 
				`phone`= ? ,
				`zzmm`= ? ,
				`jiguan`= ? ,
				`xueli`= ?,
				 `zc`= ?
			WHERE `id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssss', $zgname, $zggender, $age,  $mz ,$sfzh, $phone, $zzmm,  $jiguan ,$xueli,$zc,$id);
	

	if ($id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:renshi_quanxian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "修改该用户失败！<br><br>";
		header('Refresh: 3; url=renshi_quanxian.php');  //3s后跳转

    	
	}

  

