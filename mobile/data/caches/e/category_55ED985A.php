<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:73:"/Users/apple/tina/www/php/freshQD/mobile/themes/ocailong_com/category.dwt";i:1;s:83:"/Users/apple/tina/www/php/freshQD/mobile/themes/ocailong_com/library/goods_list.lbi";i:2;s:84:"/Users/apple/tina/www/php/freshQD/mobile/themes/ocailong_com/library/page_footer.lbi";}s:7:"expires";i:1484153848;s:8:"maketime";i:1484150248;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>酒水饮料_渔湾仔 官方商城 触屏版</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/ocailong_com/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/ocailong_com/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/ocailong_com/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
    <div id="search_box2" >
      <div class="search_box" >
        <form method="post" action="search.php" name="searchForm" id="searchForm_id">
          <input placeholder="请输入商品名称" name="keywords" type="text" id="keywordBox" />
          <button class="ico_07" type="submit" onclick="return check('keywordBox')"> </button>
        </form>
      </div>
    </div>
    <div class="header_r header_search"> <a class="switchBtn switchBtn-album" href="javascript:void(0);"  onclick="changeCl(this)" style="opacity: 1;"> 切换 </a> </div>
  </header>
  <div class="categoryleve clearfix"><span>分类：</span>
									<a  href="category.php?id=23">白酒</a>
							<a  href="category.php?id=24">葡萄酒</a>
							<a  href="category.php?id=25">洋酒</a>
							<a  href="category.php?id=26">啤酒</a>
							<a  href="category.php?id=27">其他酒品</a>
							<a  href="category.php?id=28">饮料/水</a>
							<a  href="category.php?id=29">红酒</a>
					</div>
<div class="filter" style="position:static; top:0px; width:100%;">
  <form method="GET" class="sort" name="listform">
    <ul class="filter-inner">
      <li class="filter-cur"> <a href="category.php?category=1&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sales_volume_base&order=ASC#goods_list">销量 <span> <i class="f-ico-triangle-mt "></i> <i class="f-ico-triangle-mb f-ico-triangle-slctd"></i> </span> </a> </li>
      <li class=""> <a href="category.php?category=1&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=DESC#goods_list">综合</a> </li>
      <li class=""> <a href="category.php?category=1&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=click_count&order=DESC#goods_list">人气<i class="f-ico-arrow-d"></i></a> </li>
      <li class="filter-cur"> <a href="category.php?category=1&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list">价格 <span> <i class="f-ico-triangle-mt "></i> <i class="f-ico-triangle-mb "></i> </span> </a> </li>
      <li class="filter-navBtn"><a href="javascript:;" class="j_filterBtn disabled" onclick="mtShowMenu()">筛选</a></li>
    </ul>
    <input type="hidden" name="category" value="1" />
    <input type="hidden" name="display" value="grid" id="display" />
    <input type="hidden" name="brand" value="0" />
    <input type="hidden" name="price_min" value="0" />
    <input type="hidden" name="price_max" value="0" />
    <input type="hidden" name="filter_attr" value="0" />
    <input type="hidden" name="page" value="1" />
    <input type="hidden" name="sort" value="sales_volume_base" />
    <input type="hidden" name="order" value="DESC" />
  </form>
</div>
<form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <div class="srp album flex-f-row" id="J_ItemList" style="opacity:1;"> 
    <div class="product flex_in single_item">
      <div class="pro-inner"></div>
    </div>
    <a href="javascript:;" class="get_more"></a>
  </div>
  </form>
  <div id="content" class="footer mr-t20">
  <div class="in">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input name="keywords" type="text" id="keywordfoot" />
        <button class="ico_07" type="submit" value="搜索" onclick="return check('keywordfoot')"> </button>
      </form>
    </div>
    <a href="./" class="homeBtn"> <span class="ico_05"> </span> </a> <a href="#top" class="gotop"> <span class="ico_06"> </span> <p> TOP </p>
    </a>
  </div>
  <p class="link region"> <a href="./"> 返回首页 </a> <a href="flow.php"> 购物车 </a> <a href="user.php"> 会员中心 </a> <a href="ectouch.php?act=contact"> 联系我们 </a> </p>
  <p class="region"> 
     
    &copy; 2005-2017 渔湾仔 官方商城 版权所有，并保留所有权利。 </p>
  <div class="favLink region"> <a href="http://www.ocailong.com"> powered by O菜龙工作室 </a> </div>
</div>
<div class="global-nav">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">分类</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">搜索</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">会员中心</span>
            </a>
        </div>
    </div>
    <div class="global-nav__operate-wrap">
        <span class="global-nav__yhd-logo"></span>
        <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
    </div>
</div>
<div id="toTop" class="toTop">
  <img alt="" src="themes/ocailong_com/images/scropTop.png">
</div>
<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}
	var offset = $("#toTop").offset();		
	var bottom = $("#toTop").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#toTop").fadeIn(800);
			
			if(isIe6)
			{			
				$("#toTop").css("position","absolute")	
				$("#toTop").css("bottom",bottom)
			}
		}
		else
		{
			$("#toTop").fadeOut(500);
		}
		
	});
	
	$("#toTop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
})
</script>
<script type="text/javascript" src="themes/ocailong_com/js/zepto.min.js"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script></div>
<div id="nav" class="nav" style="right:-275px;">
  <form class="hold-height" action="category.php">
    <div class="attrExtra">
      <input type="hidden" name="category" value="1"/>
      <button class="attrExtra-submit" type="submit">确定</button>
      <button class="attrExtra-cancel" type="button"  onclick="mtShowMenu()">取消</button>
    </div>
    <div class="attrs attr-fix" style="overflow: auto;height: 100%"> 
       
       
      
            <div class="attr brandAttr">
        <div class="attrKey">品牌</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
             
                        <li class="av-selected"> 
               
              <a href="javascript:void(0);" data="0">全部</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="1">艾尔Aier</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="5">森美</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="6">哈根纽翠斯</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="7">比瑞吉</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="8">百利本能</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="9">金赏</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="10">维洛司</a></li>
                        <input type="hidden" name="brand" value="0" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
       
      
       
      
            <input type="hidden" name="filter_attr" value="0"/>
       
       
    </div>
  </form>
</div>
<script type="text/javascript" src="themes/ocailong_com/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/ocailong_com/js/jquery.more.js"></script>
<script type="text/javascript" src="themes/ocailong_com/js/ectouch.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'category.php?act=asynclist&category=1&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sales_volume_base&order=DESC', 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/ocailong_com/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
</body>
</html>