<?php
//连接数据库
include 'conn.php';

// 获取修改后的学生信息
$jp_id = $_POST['jp_id'];
$jp_name = $_POST['jp_name'];
$jp_sfzh = $_POST['jp_sfzh'];
$jp_phone = $_POST['jp_phone'];
$jp_age = $_POST['jp_age'];
$jp_gender = $_POST['jp_gender'];
$jp_fenyuan = $_POST['jp_fenyuan'];
$jp_yuanyin = $_POST['jp_yuanyin'];
$jp_time = $_POST['jp_time'];
$jp_txtime = $_POST['jp_txtime'];
$jp_zc = $_POST['jp_zc'];



	//编写预处理sql语句
	$sql = "UPDATE `yuanxi_jiepin` 
			SET 
				`jp_name`= ?, 
				`jp_gender`= ?, 
				`jp_age`= ? ,
				
				`jp_fenyuan`= ? ,
				`jp_sfzh`= ?, 
				`jp_phone`= ? ,
				`jp_time`= ? ,
				`jp_txtime`= ? ,
				`jp_yuanyin`= ?,
				 `jp_zc`= ?
			WHERE `jp_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'sssssssssss', $jp_name, $jp_gender, $jp_age,  $jp_fenyuan ,$jp_sfzh, $jp_phone, $jp_yuanyin,  $jp_time ,$jp_txtime,$jp_zc,$jp_id);
	

	if ($jp_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:jiepin_quanxian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "修改该用户失败！<br><br>";
		header('Refresh: 3; url=jiepin_quanxian.php');  //3s后跳转

    	
	}

  

