<?php
//连接数据库
include 'conn.php';

// 获取修改后的学生信息
$kc_id = $_POST['kc_id'];
$kc_name = $_POST['kc_name'];
$kc_danwei = $_POST['kc_danwei'];
$kc_jiangshi = $_POST['kc_jiangshi'];
$kc_kssj = $_POST['kc_kssj'];
$kc_renshu = $_POST['kc_renshu'];
$kc_jssj = $_POST['kc_jssj'];



	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_pxkc` 
			SET 
				`kc_name`= ?, 
				`kc_danwei`= ?, 
				`kc_jiangshi`= ? ,
				
				`kc_kssj`= ? ,
				`kc_jssj`= ?, 
				`kc_renshu`= ? 
				
			WHERE `kc_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssss', $kc_name, $kc_danwei,$kc_jiangshi, $kc_kssj,  $kc_jssj ,$kc_renshu, $kc_id);
	

	if ($kc_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:kc_quanxian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=kc_quanxian.php');  //3s后跳转

    	
	}

  

