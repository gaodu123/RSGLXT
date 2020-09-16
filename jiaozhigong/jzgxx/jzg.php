
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
    </style>
    </head>
    <body style="background: #DDDDDD">

<div class="form-inline" role="form">
    <div class="row">
      <div class="col-sm-12 ">

 <form class="navbar-form navbar-center" action="jzg_chaxun.php" method="get" enctype="multipart/form-data">
           <div class="form-group">
           
              <input name="qx_id" type="text" class="form-control" placeholder="请输入职工号">
              <button type="submit" class="btn btn-default" style="background: #55AA00; color: #FFFFFF">查询个人信息</button>
           </div>
           
         </form>


      </div>
  </div>
</div>



















</body>



</html>