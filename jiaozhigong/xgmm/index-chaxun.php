<?php
	//连接数据库
	include 'conn.php';

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
		echo "<script type='text/javascript'>alert('查询不到该用户！');location='javascript:history.back()';</script>";
		header('Refresh: 2; url=index.php');  //3s后跳转
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
				<form action="index-xiugai.php" method="post" enctype="multipart/form-data">
            <h3 align="center">您正在修改-<strong style="color: #008800"><?php echo $arr["qx_name"] ?></strong>-的密码</h3>
            <br>
					
					<table class="table" >


 <tr >
 	<td align="center" width="200px;" style="background: 	#F5F5F5">职工号</td>

 	<td align="center" width="300px;">
 		<input type="text" name="qx_id" size="5"  style="border: 0;text-align: center;"    value="<?php echo $arr["qx_id"] ?>" readonly="readonly">
 	</td>
 	 </tr>

 	 <tr>
 	<td align="center" width="200px;" style="background: 	#F5F5F5">姓名</td>	
 	<td align="center"width="300px;"><input type="text" name="qx_name" size="5"  style="border: 0;text-align: center;"    value="<?php echo $arr["qx_name"] ?>" readonly="readonly"></td>
 </tr>

 <tr>
 	<td align="center"width="200px;" style="background: 	#F5F5F5"   >密码</td>
 	 <td align="center" width="300px;">&nbsp;&nbsp;&nbsp;

<input type="text" name="qx_pass" size="20" style="border: 0;text-align: center;" placeholder="点击-输入新密码">
 	</td>
 	 



</tr>








						</table>
						<br><br><br>
						<center>
						<div>
							<input type="button" onClick="javascript :history.back(-1);"  class="btn btn-primary btn-lg" value="返回" style="background:  #AA0000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit"  class="btn btn-primary btn-lg"   style="background: #008800;color: #FFFFFF" value="提交">
							
							




							
						</div>
					</center>
				</form>
			</div>
			</div>
		</div>

	</body>
</html>







