<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>博客</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="{{asset('Home')}}/style.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('Home')}}/css/buttons.css" rel="stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
        #right{
            float: right;
        }
        .button {
            height: 35px;
        }
    </style>
    <script type="text/javascript" src="{{asset('Home')}}/js/cufon-yui.js"></script>
    <script type="text/javascript" src="{{asset('Home')}}/js/arial.js"></script>
    <script type="text/javascript" src="{{asset('Home')}}/js/cuf_run.js"></script>
    <script type="text/javascript" src="{{asset('Home')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('Home')}}/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="{{asset('Home')}}/js/layer/layer.js"></script>

    <!-- CuFon ends -->
</head>
<body>
<div class="main">
    <div class="header">
        <div class="header_resize">
            <div class="logo">
                <h1><a href="index.html">Simple<span>writing</span></a><small>Let's go</small></h1>
                <span id="right">
                    <a href="javascript:void(0)">登录</a>
                    <a href="javascript:void(0)">注册</a>
                </span>
            </div>
            <div class="clr"></div>
            <div class="menu_nav">
                <ul>
                    <li class="active"><a href="{{url('/')}}">简书</a></li>
                    <li><a href="support.html">下载App</a></li>
                    <li><a href="about.html">我的主页</a></li>
                    <li><a href="blog.html">写文章</a></li>
                    <li class="last"><a href="contact.html">帮助支持</a></li>
                </ul>
                <div class="search">
                    <form id="form" name="form" method="post" action="">
          <span>
          <input name="q" type="text" class="keywords" id="textfield" maxlength="50" placeholder="Search..." />
           </span>
                        <input name="b" type="image" src="{{asset('Home')}}/images/search.gif" class="button" />

                    </form>
                </div>
                <!--/search -->
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <!-- 公共头部代码 -->


    @yield('content')


    <!-- 公共尾部代码 -->
    <div class="fbg">
        <div class="fbg_resize">
            <div class="col c1">
                <h2><span>Image Gallery</span></h2>
                <a href="#"><img src="{{asset('Home')}}/images/gallery_1.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="{{asset('Home')}}/images/gallery_2.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="{{asset('Home')}}/images/gallery_3.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="{{asset('Home')}}/images/gallery_4.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="{{asset('Home')}}/images/gallery_5.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="{{asset('Home')}}/images/gallery_6.jpg" width="58" height="58" alt="pix" /></a> </div>
            <div class="col c2">
                <h2><span>Lorem Ipsum</span></h2>
                <p>Lorem ipsum dolor<br />
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
            </div>
            <div class="col c3">
                <h2><span>Contact</span></h2>
                <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui. Nulla pharetra, mauris vitae interdum dignissim, justo nunc suscipit ipsum. <a href="#">mail@example.com</a><br />
                    <a href="#">+1 (123) 444-5677</a></p>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
<script>
    $("a:contains('注册')").click(function(){
       location.href="{{url('home/member/register')}}";
    });
</script>