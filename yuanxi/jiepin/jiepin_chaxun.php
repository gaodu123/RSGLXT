<?php
	//连接数据库
	include 'conn.php';

	//获取id
	$jp_id = $_GET['jp_id'];


	//编写查询sql语句
	$sql = "SELECT * FROM `yuanxi_jiepin` WHERE `jp_id`=$jp_id";
	//执行查询操作、处理结果集
	$result = mysqli_query($link, $sql);
	if (!$result) {
	    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
	}
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	if (!$data) {
		//输出提示，跳转到首页
		echo "<script type='text/javascript'>alert('查找不到该教师信息！');location='javascript:history.back()';</script>";
		header('Refresh: 2; url=jiepin_quanxian.php');  //3s后跳转
		exit();
	}
	//将二维数数组转化为一维数组
	foreach ($data as $key => $value) {
	  foreach ($value as $k => $v) {
	    $arr[$k]=$v;
	  }
	}





?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>学生信息管理系统</title>
		

		<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">


body
{
  align:center;
   
}

h1{
  
  align:center;
}
p
{
    align:center;
    text-align:center;
    font-size:40px;}
    
tr{
  align:center;
}
td{
  align:center;
}

.bj{
   background:url("first/images/bg.jpg");
    background-size:100% 100%;
    background-repeat:no-repeat;
}
s

#jz{
text-align: center;

}
#ziti{
  font-color: #FFFFFF;
}

#rcorners2 {
    border-radius: 25px;
    background-color: red; /* 浏览器不支持时显示 */
    background-image: linear-gradient(#e66465, #9198e5);
    
}

#rcorners3 {
    border-radius: 25px;
    border: 2px solid #FFFFFF;
    
     
    align:center;
}
.mx-5 {
  margin-left: 3rem !important;
}
.mx-1{
   margin-left: 4rem !important;
}
.mx-2{
  margin-left: 10rem !important;
}
}
#example3 {
    border: 10px dotted black;
    padding:35px;
    background-image: linear-gradient(#e66465, #9198e5);
    background-clip: content-box;
}
.button
 {background-color: #4CAF50;}

</style>
	<style>

	td{
		width: 80px;
	}
	h1
{
	font-family:"Times New Roman";
	font-size:40px;
	
}

</style>
<body>
	<br><br>
<h3    align="center"><?php echo $arr["jp_name"] ?>&nbsp;信息</h3>
<form action="jiepin_quanxian.php" method="post" enctype="multipart/form-data">
<br>
	<table border="1" width="1000" align="center" cellspacing="0">
		
  <tr align="center">



			<td bgcolor="#ededed" height="50">职工号</td>
			<td><?php echo $arr["jp_id"] ?></td>
			<td bgcolor="#ededed">姓名</td>
			<td><?php echo $arr["jp_name"] ?></td>
			<td bgcolor="#ededed">性别</td>
			<td><?php echo $arr["jp_gender"] ?></td>
			<td colspan="2" rowspan="3" >头像</td>
		</tr>
		<tr align="center">
			<td bgcolor="#ededed" height="50">年龄</td>
			<td><?php echo $arr["jp_age"] ?></td>
			<td bgcolor="#ededed">分院</td>
			<td><?php echo $arr["jp_fenyuan"] ?></td>
			<td bgcolor="#ededed">职位</td>
			<td><?php echo $arr["jp_zc"] ?></td>
		</tr>
        <tr align="center">
			<td bgcolor="#ededed" height="50">身份证号</td>
			<td colspan="2"><?php echo $arr["jp_sfzh"] ?></td>
			<td bgcolor="#ededed">联系方式</td>
			<td colspan="2"><?php echo $arr["jp_phone"] ?></td>
			
		</tr>
	
		<tr align="center">
			<td bgcolor="#ededed" height="50">离职原因</td>
			<td ><?php echo $arr["jp_yuanyin"] ?></td>
			<td bgcolor="#ededed">解聘时间</td>
			<td colspan="2"><?php echo $arr["jp_time"] ?></td>
            <td bgcolor="#ededed">停下时间</td>
			<td ><?php echo $arr["jp_txtime"] ?></td>
		</tr>
		
	
	</table>
	<br><br><br><br><br><br>
						<center>
						<div>
							
							
								<input type="button" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="确定">
							
						</div>
					</center>
</form>
	</body>
</html>







