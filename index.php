

<?php
session_start();//在最顶端，不要有输出度
$_SESSION['test']='abc';//直接把用户名abc赋予test
?>
<html>
<head>
<title>php basic grammar</title>
<meta charset="utf-8">
<meta name="viewport".content="width=device-width,intial-sca" >

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
<body style=" background: url(https://dss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=409617005,4250916300&fm=26&gp=0.jpg) no-repeat center center fixed; background-size: 100%;"> 

  <br><br><br> <br><br><br>

  <div class="container">
  <div class="row">

    <div class="col-sm-7  col-md-offset-3"  >
     
     <div class="panel panel-success" style="border: 0;">

    <div class="panel-heading" style="background:#227700;" >
        <h3  align="center"  style=" font-family:'Arial Negreta', 'Arial Normal', 'Arial';
  font-weight:700;
  font-style:normal; 
  font-size:24px;
  color:#32CD32;
  text-align:center;text-shadow:10px 4px 4px #333;
" >成&nbsp;&nbsp;&nbsp;&nbsp;农&nbsp;&nbsp;&nbsp;&nbsp;院&nbsp;&nbsp;&nbsp;&nbsp;人&nbsp;&nbsp;&nbsp;&nbsp;事&nbsp;&nbsp;&nbsp;&nbsp;管&nbsp;&nbsp;&nbsp;&nbsp;理&nbsp;&nbsp;&nbsp;&nbsp;系&nbsp;&nbsp;&nbsp;&nbsp;统</h3>
    </div>
<br>
    <div class="panel-body" style="background: url(https://i03piccdn.sogoucdn.com/46d328ddc89ce8f1) no-repeat  background-size: 100%;">
      

      <div class="col-xs-6 col-sm-4" >
      
<img src="https://i02piccdn.sogoucdn.com/d9752fdf3b22fed9" width="190px" height="200px"/>

      </div>
     



     
      <div class="col-xs-6 col-sm-7 mx-1" >
      
      
         <form class="form-horizontal"   action="login/index.php" method="post">
  <div class="form-group">

    <label for="firstname" class="col-sm-2 control-label" style="background: #227700; width: 45px;height: 35px"><span class="glyphicon glyphicon-user" style="color:#FFFFFF"/></label> 
    <div class="col-sm-10">
      <input type="text" class="form-control" id="qx_id"  name ="qx_id" placeholder="请输入员工号" required="required" value="">
   
    </div>

    </div>

    <div class="form-group">

    <label for="firstname" class="col-sm-2 control-label" style="background: #227700; width: 45px;height: 35px"><span class="glyphicon glyphicon-road" style="color:#FFFFFF"/></label> 
    <div class="col-sm-10">
      <input type="text" class="form-control" id="qx_name"  name ="qx_name" placeholder="请输入真实姓名" required="required" value="">
   
    </div>

    </div>

  
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label" style="background: #227700; width: 45px;height: 35px"><span class="glyphicon glyphicon-lock" style="color:#FFFFFF"></span></label>
    <div class="col-sm-10">
      <input type="password" id="password" class="form-control" name ="qx_pass" placeholder="请输入密码" >
      <a href="login/wjmm.php">忘记密码？</a>
    </div>
  </div>





  


<br>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <input type="submit"  name="submit"  value="登录" style="background: #227700; border: 0; color: #FFFFFF ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="reset" value="重置" style="background: #227700; border: 0; color: #FFFFFF">
     <a href="login/zhuce.html" style="color:   #CC0000">还没注册?</a>
    </div>
  </div>
</form>


<br>

</div>



</div>
</div>





      

      
     
     
      
  

</body>
</html>