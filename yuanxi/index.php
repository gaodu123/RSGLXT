<?php
session_start();
if(isset($_SESSION['qx_name'])){//如果已知经登录

}else{//否则

    
echo ' <html>
     <head lang="en"> 
     <meta charset="UTF-8">
    <title>成农院人事管理系统</title><link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
     .mx-5 {
  margin-left: 14rem !important;
}
    </style>
   </head>

   <body>
   <center>
   <div class="container">
  <div class="row">

    <br> <br> <br> <br> <br> <br> <br> <br>
     <div class="col-sm-9 mx-5" style="background:url(https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1589612408883&di=e0d81ea76c2df00596edb16b6ba2b193&imgtype=0&src=http%3A%2F%2Fhbimg.b0.upaiyun.com%2Fea945652ba6c31165c5819f64757742e8fa24d4a33390-ce9VZy_fw658);
    background-size:100% 100%;
    background-repeat:no-repeat;
   "><br> <br><br>
   
      <h2 > 小样，没登陆就想进来？&nbsp;&nbsp;<h5>  <div class="panel-body">
      <a href="http://localhost:81/RSGLXT/index.html" > 快点我进行登录！！</a>
    </div></h5></h2>
      
      
         <br> <br> <br> <br><br>    <br> <br> <br> <br><br> 
    </div>

  </div>
</div>
<center>
</body>
</html>


    ';
exit();//强制中断程序的执行版
}
?>
<!DOCTYPE >
<html >
    <head lang="en">
    <base href="<%=basePath%>">
    
   
        <meta charset="UTF-8">
        <title>成农院人事管理系统</title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
       
        <link rel="stylesheet" href="CSS/admin.css">
        <link rel="stylesheet" href="CSS/header.css">
         <link rel="stylesheet" href="JS/admin.js">
        <!-- <link rel="stylesheet" href="./css/theme5.css"> -->
        <script src="JS/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="JS/xadmin.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.8.2.min.js"></script>
      <style>
          

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }
        html,body{
            height: 100%;
        }
        .menu-list{
            height: 100%;
            padding-top:20px;
            font-size:12px;
            background-color: #AAAAAA;
        }
        .menu-list ul{
            list-style: none;
            padding:0;
            margin:0 auto;
        }
        .menu-list ul li{
            text-align:left;
            color: #000000;
        }
        .menu-list ul li.first-menu{
            overflow: hidden;
        }
        .menu-list ul li:HOVER>a{
            color: #227700;
        }
        .menu-list ul li a{
            display:block;
            padding:16px 0;
            color: #000000;
            text-decoration:none;
        }
        .menu-list ul li.first-menu>a{
            padding-left: 15px;
        }
        .menu-list ul li.first-menu.active>a{
            color: #FFFFFF;
            vertical-align: middle;
        }
        .menu-list ul li.first-menu.active ul li.second-menu.current a{
            background-color: #008800;
            font-size: 12px;
        }
        .menu-list ul li.first-menu ul{
            display:none;
        }
        .menu-list ul li.first-menu ul li.second-menu a{
            padding: 12px 0 12px 31px;
            font-size:12px;
            color: #000000;
        }
        .mr-1 {
  margin-right: 2rem !important;
}
    </style>
    </head>
    <body style="background: #DDDDDD">


<body>


  <!-- 顶部开始 -->
    <nav class="navbar navbar-default" role="navigation" style="background: #008800">
    <div class="container-fluid">
    <div class="navbar-header">
        <p class="navbar-brand"  style="color: #FFFFFF">成农院人事管理系统</p>&nbsp;
        <p class="navbar-brand" style="color: #FFFFFF; font-size: 15;">当前时间为：<?php

$datetime = new DateTime();

echo $datetime->format('Y-m-d H:i:s');

?></p>
    </div>


    <div>
        
        
       <!--向右对齐-->


        <ul class="nav navbar-nav navbar-right mr-1">
            <li class="dropdown">
                <a href="#"  data-toggle="dropdown" style="color: #FFFFFF">
                   <?   
        echo $_SESSION['qx_name'];?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" >
                  
                    <li><a href="http://localhost:81/RSGLXT/index.php" >退出</a></li>
                    
                </ul>
            </li>
        </ul>
        <p class="navbar-text navbar-right " style="color:  #FFFFFF">院系管理员</p>&nbsp;
       
    </div>
    </div>
</nav>
        <!-- 顶部结束 -->
       

<!--左侧导航栏-->
   <table width="100%" >
    <tr >
    <td valign="top" style="background: #AAAAAA"  width="10%">
    <div class="menu-list">
    <ul style="background: #AAAAAA">
       
        <li class="first-menu" >
            <a href="javascript:;" ><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;合同管理 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul>
                <li class="second-menu">
                    <a href="hetong/sy_index.php" target="leftifr" >试用期合同登记</a>
                </li>
                 <li class="second-menu">
                    <a href="hetong/zs_index.php" target="leftifr" >正式合同登记</a>
                </li>
               
            </ul>
            
            
        </li>
        <li class="first-menu">
            <a href="javascript:;">    <span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;录用管理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul>
                <li class="second-menu">
                    <a href="luyong/renshi_quanxian.php" target="leftifr">就职人员信息</a>
                </li>
              
                
            </ul>
        </li>
        <li class="first-menu">
            <a href="javascript:;">  <span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;解聘管理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul>
                <li class="second-menu">
                    <a href="jiepin/jiepin_quanxian.php" target="leftifr">解聘登记</a>
                </li>
                
            </ul>
        </li>

         <li class="first-menu">
            <a href="javascript:;"><span class="glyphicon glyphicon-tower"></span>&nbsp;&nbsp;培训管理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul>
              
                <li class="second-menu">
                    <a href="peixun/peixun_jl/jl_quanxian.php" target="leftifr">培训记录</a>
                </li>

                <li class="second-menu">
                    <a href="peixun/peixun_kc/kc_quanxian.php" target="leftifr">培训课程</a>
                </li>

                

               
               
            </ul>
        </li>
    </ul>
</div>
</td>

    <!-- 右侧内容 -->
        <td width="80%"><iframe width="100%" height="580" frameborder="0" marginheight="0" marginwidth="0" name="leftifr"  src='hetong/sy_index.php'>
     
       
        
        </iframe> 





    </td>
   
    </tr>
</table>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p  style=" font-family:'Arial Negreta', 'Arial Normal', 'Arial';
  font-weight:700;
  font-style:normal; 
  font-size:17px;

">欢迎来到成农院人事管理系统</p>
 

</div>
  </body>
<script type="text/javascript">
 $(".menu-list .first-menu").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
            $(this).find("ul").slideToggle(500);
            $(this).siblings().find("ul").hide();
        });
        
        $(".menu-list .second-menu").click(function(){
            var $this = $(this);
            $(".second-menu").each(function () {
                if($(this).hasClass("current")){
                    $(this).removeClass("current");
                }
            })
            $this.addClass("current").siblings().removeClass("current");
        });
        
        
         //  阻止事件冒泡
        $(".menu-list .first-menu ul").bind("click",function(event){
            event.stopPropagation();
        });
        
  
</script>
</html>
