<?php
//连接数据库
include 'conn.php';

$rc_id = $_POST['rc_id'];
$rc_name = $_POST['rc_name'];
$rc_leixin = $_POST['rc_leixin'];
$rc_kqrq = $_POST['rc_kqrq'];
$rc_fangshi = $_POST['rc_fangshi'];
$rc_fenyuan = $_POST['rc_fenyuan'];


	//编写预处理sql语句
	$sql = "UPDATE `renshi_kq_rc` 
			SET 
				`rc_name`= ?, 
				`rc_fenyuan`= ?, 
				`rc_leixin`= ? ,
				
				`rc_kqrq`= ? ,
				`rc_fangshi`= ?
				
			WHERE `rc_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssss', $rc_name, $rc_fenyuan, $rc_leixin,  $rc_kqrq,$rc_fangshi, $rc_id);
	

	if ($rc_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:rc_quanxian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=rc_quanxian.php');  //3s后跳转

    	
	}

  

