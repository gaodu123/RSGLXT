<?php
	//连接数据库
	include 'conns.php';

	//获取id
	$qx_id = $_GET['qx_id'];


	//编写查询sql语句
	$sql = "SELECT * FROM `quanxians` WHERE `qx_id`=$qx_id";
	//执行查询操作、处理结果集
	$result = mysqli_query($link, $sql);
	if (!$result) {
	    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
	}
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	if (!$data) {
		//输出提示，跳转到首页
		echo "<center>"."<script type='text/javascript'>alert('查询不到该用户！');location='javascript:history.back()';</script>";
		header('Refresh: 2; url=jzg.php');  //3s后跳转
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
		<title>成农院人事管理系统</title>
		

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="resources/css/styles1.css" type="text/css" rel="stylesheet"/>
   

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
	</head>
	<body>
		
		<div class="form-inline" role="form">
    <div class="row">
      <div class="col-sm-11  mx-1">
      	<br><br>
      	<br><br>
      
<!--输出定制表单-->
	 <div class="table-responsive">
				<form action="" method="post" enctype="multipart/form-data">
            
					
					<table border="2" style="height: 200px;">

 <tr >
 	<td align="center" width="200px;" style="background: 	#F5F5F5">职工号</td><td align="center" width="300px;"><?php echo $arr["qx_id"] ?></td>
 	<td align="center" width="200px;" style="background: 	#F5F5F5">姓名</td>	<td align="center"width="300px;"><?php echo $arr["qx_name"] ?></td>
 	<td align="center"width="200px;" style="background: 	#F5F5F5">性别</td> <td align="center" width="300px;"><?php echo $arr["gender"] ?></td>
 	 
 </tr>

<tr>
  <td align="center" width="80px;" style="background: 	#F5F5F5">身份证号</td><td align="center" colspan="3"><?php echo $arr["qx_sfzh"] ?></td>
  <td align="center" width="80px;" style="background: 	#F5F5F5">民族</td><td align="center" ><?php echo $arr["mz"] ?></td>
</tr>

<tr>

   <td align="center" width="80px;" style="background: 	#F5F5F5">邮箱</td><td align="center" colspan="2"><?php echo $arr["eamil"] ?></td>
  <td align="center" width="80px;" style="background: 	#F5F5F5">联系方式</td><td align="center" colspan="2"><?php echo $arr["qx_phone"] ?></td>

</tr>

<tr>
  <td align="center" width="80px;" style="background: 	#F5F5F5">学历</td><td align="center" colspan="3"><?php echo $arr["qx_sfzh"] ?></td>
  <td align="center" width="80px;" style="background: 	#F5F5F5">民族</td><td align="center" colspan="2"><?php echo $arr["mz"] ?></td>
</tr>



<tr>

   <td align="center" width="80px;" style="background: 	#F5F5F5">政治面貌</td><td align="center" ><?php echo $arr["zzmm"] ?></td>
  <td align="center" width="80px;" style="background: 	#F5F5F5">籍贯</td><td align="center" colspan="3"><?php echo $arr["jiguan"] ?></td>

</tr>

<tr>

   <td align="center" width="80px;" style="background: 	#F5F5F5">学历</td><td align="center" ><?php echo $arr["xueli"] ?></td>
  <td align="center" width="80px;" style="background: 	#F5F5F5">职位</td><td align="center"><?php echo $arr["zc"] ?></td>
   <td align="center" width="80px;" style="background: 	#F5F5F5">分院</td><td align="center" ><?php echo $arr["fenyuan"] ?></td>

</tr>









						</table>
						<br><br><br>
						<center>
						<div>
							
							<?php 

echo "
<input type='button' class='btn btn-primary btn-lg' style='background:  #AA0000'     onClick='javascript :history.back(-1);'' value='    返回    '>


<a href='xiugai.php? qx_id={$arr['qx_id']}'  class='btn btn-primary btn-lg' type='submit'  style='background: #008800;color: #FFFFFF'>完善个人信息</a>;

"

 ?>




							
						</div>
					</center>
				</form>
			</div>
			</div>
		</div>

	</body>
</html>







