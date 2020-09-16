
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
        .mx-1{
   margin-left: 4rem !important;
}
    </style>
    </head>
    <body style="background: #DDDDDD">


<body>

        <!-- 顶部结束 -->
       

<!--左侧导航栏-->
   <table width="100%" >
    <tr >
    <td valign="top"  width="100%" class="mx-1">
   <div class="form-inline" role="form">
    <div class="row">
      <div class="col-sm-12 ">



<div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown" style="width: 160px;">请选择分院
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="shiyong/xinxi/xinxi.php" target="topifr">信息技术分院</a></li>
        <li><a href="shiyong/xiandai/xiandai.php" target="topifr">现代农业分院</a></li>
        <li><a href="shiyong/yuanlin/yuanlin.php" target="topifr">园林园艺分院</a></li>
        <li><a href="shiyong/xumu/xumu.php" target="topifr">畜牧兽医分院</a></li>
        <li><a href="shiyong/chengjian/chenjian.php" target="topifr">城乡建设分院</a></li>
        <li><a href="shiyong/jinguan/jinguan.php" target="topifr">经济管理分院</a></li>
        <li><a href="shiyong/jidian/jidian.php" target="topifr">机电技术分院</a></li>
    </ul>
</div>
  </div>
</div>

</td>
</tr>
<tr>

    <!-- 右侧内容 -->
        <td width="80%"><iframe width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0" name="topifr"  src='renshi-gongzi/xinxi/xinxi.php'>
     
       
        
        </iframe> 





    </td>
   
    </tr>
</table>


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
