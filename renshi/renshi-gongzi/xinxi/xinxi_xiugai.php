<?php
//连接数据库
include 'conn.php';

//获取id
$xx_id = $_GET['xx_id'];
//编写查询sql语句
$sql = "SELECT * FROM `renshi_gz_xx` WHERE `xx_id`=$xx_id";
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

//将二维数数组转化为一维数组
foreach ($data as $key => $value) {
  foreach ($value as $k => $v) {
    $arr[$k]=$v;
  }
}

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";

?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>院系管理员</title>
		<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			body {
				background-image: url(student.jpg);
				background-size: 100%;
			}

			.box {
				display: table;
				margin: 0 auto;
			}

			h2 {
				text-align: center;
			}

			.add {
				margin-bottom: 20px;
			}
		</style>
	</head>
	<body>
		<!--输出定制表单-->
		<div class="box">
			<h2>您正在修改-<span style="size: 6px; color: #FF4500;"><?php echo $arr["xx_name"] ?></span>-信息</h2><br>
			<div class="add">
				<form action="xiugai_two.php" method="post" enctype="multipart/form-data">
					<table class="table">
						<tr>
							<th>编　　号：</th>
							<td><input type="text" name="xx_id" size="5" value="<?php echo $arr["xx_id"] ?>" readonly="readonly"></td>
						</tr>
						<tr>
							<th>姓　　名：</th>
							<td><input type="text" name="xx_name" size="25" value="<?php echo $arr["xx_name"] ?>" readonly="readonly"></td>
						</tr>
						
                     <tr>
							<th>身份证号：</th>
							<td><input type="text" name="xx_sfzh" size="25" value="<?php echo $arr["xx_sfzh"] ?>"></td>
						</tr>
						 <tr>
							<th>分    院：</th>
							<td><input type="text" name="xx_fenyuan" size="25" value="<?php echo $arr["xx_fenyuan"] ?>" readonly="readonly"></td>
						</tr>

                          <tr>
							<th>职    位：</th>
							<td><input type="text" name="xx_zc" value="<?php echo $arr["xx_zc"] ?>"></td>
						</tr>

						<tr>
							<th>基本工资：</th>
							<td><input type="text" name="xx_jbgz" size="11" value="<?php echo $arr["xx_jbgz"] ?>"></td>
						</tr>

                      
                        <tr>
							<th>岗位工资：</th>
							<td><input type="text" name="xx_gwgz" size="25" value="<?php echo $arr["xx_gwgz"] ?>"></td>
						</tr>
                        

						
						<tr>
							<th>绩效：</th>
							<td><input type="text" name="xx_jixiao" size="25" value="<?php echo $arr["xx_jixiao"] ?>"></td>
						</tr>
                         
                         <tr>
							<th>请假扣款：</th>
							<td><input type="text" name="xx_qjiakk" size="25" value="<?php echo $arr["xx_qjiakk"] ?>"></td>
						</tr>
                        
 <tr>
							<th>医疗社保：</th>
							<td><input type="text" name="xx_ylsb" size="11" value="<?php echo $arr["xx_ylsb"] ?>"></td>
						</tr>

                      
                        <tr>
							<th>奖金：</th>
							<td><input type="text" name="xx_jiangjin" size="25" value="<?php echo $arr["xx_jiangjin"] ?>"></td>
						</tr>

						 <tr>
							<th>实发工资：</th>
							<td><input type="text" name="xx_sfgz" size="25" value="<?php echo $arr["xx_sfgz"] ?>"></td>
						</tr>
						 <tr>
							<th>发放日期：</th>
							<td><input type="text" name="xx_ffny" size="25" value="<?php echo $arr["xx_ffny"] ?>"></td>
						</tr>
						
					




						<tr>
							<th></th>
							<td>
								<input type="button" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="提交">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>







