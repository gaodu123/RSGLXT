<?php
//连接数据库
include 'conn.php';

$cj_id = $_POST['cj_id'];
$cj_name = $_POST['cj_name'];
$cj_sfzh = $_POST['cj_sfzh'];
$cj_zc = $_POST['cj_zc'];
$cj_kprq = $_POST['cj_kprq'];
$cj_khxm = $_POST['cj_khxm'];
$cj_pj = $_POST['cj_pj'];
$cj_fenzhi = $_POST['cj_fenzhi'];
$cj_khrbh = $_POST['cj_khrbh'];
$cj_khrname = $_POST['cj_khrname'];
$cj_khrzc = $_POST['cj_khrzc'];
$cj_fenyuan = $_POST['cj_fenyuan'];



	//编写预处理sql语句
	$sql = "UPDATE `renshi_jixiao` 
			SET 
				`cj_name`= ?, 
				`cj_sfzh`= ?, 
				`cj_zc`= ? ,
				
				`cj_kprq`= ? ,
				`cj_khxm`= ?, 
				`cj_pj`= ? ,
				`cj_fenzhi`= ? ,
				`cj_khrbh`= ? ,
				`cj_khrname`= ?,
				`cj_khrzc`= ?,
				 `cj_fenyuan`= ?
			WHERE `cj_id`= ?";

	//预处理SQL模板
	$stmt = mysqli_prepare($link, $sql);
	// 参数绑定，并为已经绑定的变量赋值
	mysqli_stmt_bind_param($stmt, 'ssssssssssss', $cj_name, $cj_sfzh, $cj_zc,  $cj_kprq ,$cj_khxm, $cj_pj, $cj_fenzhi,  $cj_khrbh,$cj_khrname,$cj_khrzc,$cj_fenyuan,$cj_id);
	

	if ($cj_id) {
		// 执行预处理（第1次执行）
		$result = mysqli_stmt_execute($stmt);
		//关闭连接
		mysqli_close($link);

		if ($result) {
    		//修改学生成功
			//跳转到首页
			header("Location:jixiao_quanxian.php");
		}else{
			exit('修改用户信息sql语句执行失败。错误信息：' . mysqli_error($link));
		}
	}else{
		//修改学生失败
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('修改信息失败！');location='javascript:history.back()';</script>";
		header('Refresh: 3; url=jixiao_quanxian.php');  //3s后跳转

    	
	}

  

