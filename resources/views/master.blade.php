<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
  <title>@yield('title')</title>
 <link rel="stylesheet" href="{{asset('/css/weui.css')}}">
  <link rel="stylesheet" href="{{asset('/css/book.css')}}">
<link rel="stylesheet" href="{{asset('/css/swipe.css')}}">
  <link rel="stylesheet" href="http://localhost/dashboard/laravel52/public/build/book.min.css">
</head>
<body>
<div class="bk_title_bar">
  <img class="bk_back" src="http://localhost/dashboard/laravel52/public/images/back.png" alt="" onclick="history.go(-1);">
  <p class="bk_title_content"></p>
  <img class="bk_menu" src="http://localhost/dashboard/laravel52/public/images/menu.png" alt="" onclick="onMenuClick();">
</div>


<div class="page">
  @yield('content')
</div>

<!-- tooltips -->
<div class="bk_toptips"><span></span></div>

<!--BEGIN actionSheet-->
<div id="actionSheet_wrap">
    <div class="weui_mask_transition" id="mask"></div>
    <div class="weui_actionsheet" id="weui_actionsheet">
        <div class="weui_actionsheet_menu">
            <div class="weui_actionsheet_cell" onclick="onMenuItemClick(1)">主页</div>
            <div class="weui_actionsheet_cell" onclick="onMenuItemClick(2)">书籍类别</div>
            <div class="weui_actionsheet_cell" onclick="onMenuItemClick(3)">购物车</div>
            <div class="weui_actionsheet_cell" onclick="onMenuItemClick(4)">我的订单</div>
        </div>
        <div class="weui_actionsheet_action">
            <div class="weui_actionsheet_cell" id="actionsheet_cancel">取消</div>
        </div>
    </div>
</div>

</body>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
<script src="{{asset('/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('/js/swipe.min.js')}}" charset="utf-8"></script>
<script src="{{asset('/js/book.js')}}" charset="utf-8"></script>
<script src="http://localhost/dashboard/laravel52/public/build/book.min.js" charset="utf-8"></script>

@yield('my-js')

</html>