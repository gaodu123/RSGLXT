<?php
//连接数据库
include 'conn.php';

// 获取修改后的信息
$jj_id = $_POST['jj_id'];
$jj_name = $_POST['jj_name'];
$jj_gender = $_POST['jj_gender'];
$jj_age = $_POST['jj_age'];
$jj_fenyuan = $_POST['jj_fenyuan'];
$jj_zc = $_POST['jj_zc'];
$jj_syts = $_POST['jj_syts'];
$jj_qsrq = $_POST['jj_qsrq'];
$jj_zzrq = $_POST['jj_zzrq'];
$jj_salary = $_POST['jj_salary'];




	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_syht_jg` 
			SET 
				`jj_name`= ?, 
				`jj_gender`= ?, 
				`jj_age`= ? ,
				
				`jj_fenyuan`= ? ,
				`jj_zc`= ?, 
				`jj_syts`= ? ,
				`jj_qsrq`= ? ,
				`jj_zzrq`= ? ,
				
				 `jj_salary`= ?
			WHERE `jj_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssss', $jj_name, $jj_gender, $jj_age,  $jj_fenyuan ,$jj_zc, $jj_syts, $jj_qsrq,  $jj_zzrq ,$jj_salary,$jj_id);
	

	if ($jj_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:jinguan.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=jinguan.php');  //3s后跳转

    	
	}

  

