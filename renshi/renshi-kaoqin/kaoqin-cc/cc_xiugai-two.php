<?php
//连接数据库
include 'conn.php';

$cc_id = $_POST['cc_id'];
$cc_name = $_POST['cc_name'];
$cc_gender = $_POST['cc_gender'];
$cc_fenyuan = $_POST['cc_fenyuan'];
$cc_zc= $_POST['cc_zc'];
$cc_qjts = $_POST['cc_qjts'];
$cc_ccyy= $_POST['cc_ccyy'];
$cc_ccd = $_POST['cc_ccd'];
$cc_ksrq = $_POST['cc_ksrq'];
$cc_jsrq = $_POST['cc_jsrq'];



	//编写预处理sql语句
	$sql = "UPDATE `renshi_kq_chucai` 
			SET 
				`cc_name`= ?, 
				`cc_gender`= ?, 
				`cc_fenyuan`= ? ,
				
				`cc_zc`= ? ,
				`cc_qjts`= ?, 
				`cc_ccyy`= ? ,
				`cc_ccd`= ? ,
				`cc_ksrq`= ? ,
				`cc_jsrq`= ?
				
			WHERE `cc_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssss', $cc_name, $cc_gender, $cc_fenyuan,  $cc_zc ,$cc_qjts, $cc_ccyy, $cc_ccd,  $cc_ksrq,$cc_jsrq,$cc_id);
	

	if ($cc_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:cc_quanxian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=cc_quanxian.php');  //3s后跳转

    	
	}

  

