<?php exit;?>a:3:{s:8:"template";a:9:{i:0;s:55:"/Users/apple/tina/www/php/freshQD/themes/lizi/goods.dwt";i:1;s:69:"/Users/apple/tina/www/php/freshQD/themes/lizi/library/page_header.lbi";i:2;s:71:"/Users/apple/tina/www/php/freshQD/themes/lizi/library/ur_here_goods.lbi";i:3;s:71:"/Users/apple/tina/www/php/freshQD/themes/lizi/library/goods_gallery.lbi";i:4;s:65:"/Users/apple/tina/www/php/freshQD/themes/lizi/library/history.lbi";i:5;s:72:"/Users/apple/tina/www/php/freshQD/themes/lizi/library/goods_fittings.lbi";i:6;s:66:"/Users/apple/tina/www/php/freshQD/themes/lizi/library/comments.lbi";i:7;s:69:"/Users/apple/tina/www/php/freshQD/themes/lizi/library/page_footer.lbi";i:8;s:67:"/Users/apple/tina/www/php/freshQD/themes/lizi/library/quick_buy.lbi";}s:7:"expires";i:1484144708;s:8:"maketime";i:1484141108;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="食用百香果可以增加胃部饱腹感，减少余热量的摄入，还可以吸附胆固醇和胆汁之类有机分子，抑制人体对脂肪的吸收。因此，长期食用有利于改善人体营养吸收结构，降低体内脂肪，塑造健康优美体态。" />
<title>新鲜水果甜蜜香脆单果约800克_根茎类_生鲜食品_渔湾仔 官方商城</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/lizi/style.css" rel="stylesheet" type="text/css" />
<link href="themes/lizi/goods.css" rel="stylesheet" type="text/css" />
<link href="themes/lizi/quick_buy.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/lizi/js/magiczoom_plus.js"></script>
<script type="text/javascript" src="themes/lizi/js/common.js"></script>
<script language="javascript">
function shows_number(result)
{
     if(result.product_number !=undefined){
         document.getElementById('shows_number').innerHTML = result.product_number+'件';
     }else{
         document.getElementById('shows_number').innerHTML = '无库存';
     }
}
//默认就显示第一个属性库存
function changeKucun()
{
var frm=document.forms['ECS_FORMBUY'];
spec_arr = getSelectedAttributes(frm);
    if(spec_arr==''){
         document.getElementById('shows_number').innerHTML = '65535件';
    }else{
         Ajax.call('goods.php?act=get_products_info', 'id=' + spec_arr+ '&goods_id=' + goods_id, shows_number, 'GET', 'JSON');
    }
}
</script>
<script>
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
<script type="text/javascript" src="themes/lizi/js/quick_buy1.js"></script>
</head>
<body>
<link href="themes/lizi/huo15/css/common.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="themes/lizi/huo15/css/font-awesome.css">
<script type="text/javascript" src="themes/lizi/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/lizi/js/jquery.json.js"></script>
<script type="text/javascript" src="themes/lizi/js/transport_jquery.js"></script>
<script type="text/javascript" src="themes/lizi/js/utils.js"></script>
<script type="text/javascript" src="themes/lizi/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="themes/lizi/js/lizi_common.js"></script>
<style>
.topimg {
  display: none;
}
.topimg{width:100%; height:50px; margin:0 auto}
.topimg a img{width:100%; height:50px; margin:0 auto; border:0px}
</style>
<div class="topimg">
			   <a href='affiche.php?ad_id=10&uri='><img src='data/afficheimg/1460440720430642585.jpg' width='1024' height='50' /></a>	</div>
<div id="header" class="new_header">
  <div class="hd_bar">
    <div class="bd_bar_bd cle">
      <ul class="welcome">
        <li><a id="favorite_wb" href="javascript:;" rel="nofollow">收藏渔湾仔 官方商城</a></li>
		<li id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca</li>
      </ul>
      <ul id="userinfo-bar">
        <li class="more-menu"> <a href="user.php">会员中心</a><i class="iconfont arrow">&#8193;</i>
          <div class="more-bd">
            <div class="list"> <a href="user.php?act=order_list">我的订单</a> <a href="user.php?act=comment_list">我的评价</a> <a href="user.php?act=account_log">我的余额</a> <a href="user.php?act=bonus">我的红包</a> <a href="user.php?act=collection_list">我的收藏</a> <a href="user.php?act=address_list" class="last">修改收货地址</a> </div>
          </div>
        </li>
        <li><a href="mobile/"><i class="iconfont vipico"></i>手机版</a></li>
      </ul>
    </div>
  </div>
  <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
  <div class="hd_main cle">
    <div class="logo"> <a href="./" class="lizi_logo"><img src="themes/lizi/images/logo.png" alt="渔湾仔 官方商城"/></a>
    </div>
    <div class="intro">
      <ul>
        <li class="no1"><a href="javascript:void(0);" target="_blank">
          <h4>正品保障</h4>
          <p>100%正品低价</p>
          </a></li>
        <li class="no2"><a href="javascript:void(0);" target="_blank">
          <h4>30天退换货</h4>
          <p>购物有保障</p>
          </a></li>
        <li class="no3"><a href="javascript:void(0);" target="_blank">
          <h4>满99就包邮</h4>
          <p>闪电发货</p>
          </a></li>
      </ul>
    </div>
  </div>
  <div class="hd_nav">
    <div class="hd_nav_bd cle">
      <div class="main_nav" id="main_nav">
        <div class="main_nav_link"> <!-- <span class="icon-th-list"></span> --><a href="javascript:;">商城列表导航</a> <i class="iconfont"></i> </div>
        <div class="main_cata" id="J_mainCata" style="opacity: 0; display: none;">
          <ul>
                        <li class="first">
              <!--<h3 style="background:url(data/cat_ico/1449088788518670880.png) 20px center no-repeat;"><a href="category.php?id=2">生鲜食品</a></h3>-->
               <h3 ><i class="icon-circle"></i><a href="category.php?id=2">生鲜食品</a></h3>
            </li>
                        <li >
              <!--<h3 style="background:url(data/cat_ico/1449088848823694266.png) 20px center no-repeat;"><a href="category.php?id=1">酒水饮料</a></h3>-->
               <h3 ><i class="icon-circle"></i><a href="category.php?id=1">酒水饮料</a></h3>
            </li>
                        <li >
              <!--<h3 style="background:url(data/cat_ico/1449088901458193225.png) 20px center no-repeat;"><a href="category.php?id=5">水产</a></h3>-->
               <h3 ><i class="icon-circle"></i><a href="category.php?id=5">水产</a></h3>
            </li>
                        <li >
              <!--<h3 style="background:url(data/cat_ico/1449088957941770398.png) 20px center no-repeat;"><a href="category.php?id=11">蔬菜水果</a></h3>-->
               <h3 ><i class="icon-circle"></i><a href="category.php?id=11">蔬菜水果</a></h3>
            </li>
                        <li >
              <!--<h3 style="background:url(data/cat_ico/1449089137240745101.png) 20px center no-repeat;"><a href="category.php?id=9">休闲食品</a></h3>-->
               <h3 ><i class="icon-circle"></i><a href="category.php?id=9">休闲食品</a></h3>
            </li>
                        <li >
              <!--<h3 style="background:url(data/cat_ico/1449089235904530709.png) 20px center no-repeat;"><a href="category.php?id=12">奶类食品</a></h3>-->
               <h3 ><i class="icon-circle"></i><a href="category.php?id=12">奶类食品</a></h3>
            </li>
                        <li >
              <!--<h3 style="background:url(data/cat_ico/1449089297229428349.png) 20px center no-repeat;"><a href="category.php?id=6">天然干货</a></h3>-->
               <h3 ><i class="icon-circle"></i><a href="category.php?id=6">天然干货</a></h3>
            </li>
                        <li >
              <!--<h3 style="background:url(data/cat_ico/1449089358084135937.png) 20px center no-repeat;"><a href="category.php?id=7">精选茗茶</a></h3>-->
               <h3 ><i class="icon-circle"></i><a href="category.php?id=7">精选茗茶</a></h3>
            </li>
                      </ul>
        </div>
        <div class="J_subCata" id="J_subCata" style="opacity: 0; left: 213px; top: 35px;">
          
          <div class="J_subView" style="display: none;">
                      <dl>
              <dt><a href="category.php?id=15">精品肉类</a> </dt>
              <dd>
              	 			<a href="category.php?id=64">羊肉</a>
					<a href="category.php?id=65">禽类</a>
					<a href="category.php?id=66">猪肉</a>
					<a href="category.php?id=67">牛肉</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=16">海鲜水产</a> </dt>
              <dd>
              	 			<a href="category.php?id=68">参鲍</a>
					<a href="category.php?id=69">鱼</a>
					<a href="category.php?id=70">虾</a>
					<a href="category.php?id=71">蟹/贝</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=17">蛋制品</a> </dt>
              <dd>
              	 			<a href="category.php?id=72">松花蛋/咸鸭蛋</a>
					<a href="category.php?id=73">鸡蛋</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=18">叶菜类</a> </dt>
              <dd>
              	 			<a href="category.php?id=74">生菜</a>
					<a href="category.php?id=75">菠菜</a>
					<a href="category.php?id=76">圆椒</a>
					<a href="category.php?id=77">西兰花</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=19">根茎类</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=20">茄果类</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=21">菌菇类</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=22">进口生鲜</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                        </div>
          
          <div class="J_subView" style="display: none;">
                      <dl>
              <dt><a href="category.php?id=23">白酒</a> </dt>
              <dd>
              	 			<a href="category.php?id=83">五粮液</a>
					<a href="category.php?id=84">泸州老窖</a>
					<a href="category.php?id=85">茅台</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=24">葡萄酒</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=25">洋酒</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=26">啤酒</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=27">其他酒品</a> </dt>
              <dd>
              	 			<a href="category.php?id=78">其他品牌</a>
					<a href="category.php?id=79">黄酒</a>
					<a href="category.php?id=80">养生酒</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=28">饮料/水</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=29">红酒</a> </dt>
              <dd>
              	 			<a href="category.php?id=81">白兰地</a>
					<a href="category.php?id=82">威士忌</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                        </div>
          
          <div class="J_subView" style="display: none;">
                      <dl>
              <dt><a href="category.php?id=30">食用油</a> </dt>
              <dd>
              	 			<a href="category.php?id=86">其他食用油</a>
					<a href="category.php?id=87">菜仔油</a>
					<a href="category.php?id=88">花生油</a>
					<a href="category.php?id=89">橄榄油</a>
					<a href="category.php?id=90">礼盒</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=31">米面杂粮</a> </dt>
              <dd>
              	 			<a href="category.php?id=91">面粉/面条</a>
					<a href="category.php?id=92">大米</a>
					<a href="category.php?id=93">意大利面</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=32">厨房调料</a> </dt>
              <dd>
              	 			<a href="category.php?id=94">调味油/汁</a>
					<a href="category.php?id=95">酱油/醋</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=33">南北干货</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=34">方便速食</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=35">调味品</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                        </div>
          
          <div class="J_subView" style="display: none;">
                      <dl>
              <dt><a href="category.php?id=41">有机蔬菜</a> </dt>
              <dd>
              	 			<a href="category.php?id=96">西红柿</a>
					<a href="category.php?id=97">韭菜</a>
					<a href="category.php?id=98">青菜</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=42">精选蔬菜</a> </dt>
              <dd>
              	 			<a href="category.php?id=99">甘蓝</a>
					<a href="category.php?id=100">胡萝卜</a>
					<a href="category.php?id=101">黄瓜</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=43">进口水果</a> </dt>
              <dd>
              	 			<a href="category.php?id=102">火龙果</a>
					<a href="category.php?id=103">菠萝蜜</a>
					<a href="category.php?id=104">奇异果</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=44">国产水果</a> </dt>
              <dd>
              	 			<a href="category.php?id=105">水果礼盒</a>
					<a href="category.php?id=106">苹果</a>
					<a href="category.php?id=107">雪梨</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                        </div>
          
          <div class="J_subView" style="display: none;">
                      <dl>
              <dt><a href="category.php?id=36">休闲零食</a> </dt>
              <dd>
              	 			<a href="category.php?id=108">果冻</a>
					<a href="category.php?id=109">枣类</a>
					<a href="category.php?id=110">蜜饯</a>
					<a href="category.php?id=111">肉类零食</a>
					<a href="category.php?id=112">坚果炒货</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=37">糖果</a> </dt>
              <dd>
              	 			<a href="category.php?id=113">创意喜糖</a>
					<a href="category.php?id=114">口香糖</a>
					<a href="category.php?id=115">软糖</a>
					<a href="category.php?id=116">棒棒糖</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=38">巧克力</a> </dt>
              <dd>
              	 			<a href="category.php?id=117">夹心巧克力</a>
					<a href="category.php?id=118">白巧克力</a>
					<a href="category.php?id=119">松露巧克力</a>
					<a href="category.php?id=120">黑巧克力</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=39">肉干肉脯/豆干</a> </dt>
              <dd>
              	 			<a href="category.php?id=121">牛肉干</a>
					<a href="category.php?id=122">猪肉脯</a>
					<a href="category.php?id=123">牛肉粒</a>
					<a href="category.php?id=124">猪肉干</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=40">鱿鱼丝/鱼干</a> </dt>
              <dd>
              	 			<a href="category.php?id=125">鱿鱼足</a>
					<a href="category.php?id=126">鱿鱼丝</a>
					<a href="category.php?id=127">墨鱼/乌贼</a>
					<a href="category.php?id=128">鱿鱼仔</a>
					<a href="category.php?id=129">鱿鱼片</a>
		              </dd>
            </dl>
	    <div class="clear"></div>
                        </div>
          
          <div class="J_subView" style="display: none;">
                      <dl>
              <dt><a href="category.php?id=45">进口奶品</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=46">国产奶品</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=47">奶粉</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=48">有机奶</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=49">原料奶</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                        </div>
          
          <div class="J_subView" style="display: none;">
                      <dl>
              <dt><a href="category.php?id=53">菌菇类</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=54">腌干海产</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=55">汤料</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=56">豆类</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=57">干菜/菜干</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=58">干果/果干</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=59">豆制品</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=60">腊味</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                        </div>
          
          <div class="J_subView" style="display: none;">
                      <dl>
              <dt><a href="category.php?id=61">白茶</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=62">红茶</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                          <dl>
              <dt><a href="category.php?id=63">绿茶</a> </dt>
              <dd>
              	               </dd>
            </dl>
	    <div class="clear"></div>
                        </div>
                  </div>
      </div>
      
      <div class="search-wrapper">
        <div class="search_box">
          <form action="search.php" method="get" id="searchForm" name="searchForm" onSubmit="return checkSearchForm()">
            <input class="sea_input" type="text" name="keywords" id="keyword" value="" autocomplete="off" placeholder="请输入关键词">
            <input type="hidden" value="k1" name="dataBi">
            <button type="submit" class="sea_submit"><i class="icon-search icon-large"></i></button>
          </form>
        </div>
      </div>
      
      <ul class="sub_nav cle hide" id="sub_nav">
        <li class="current"><a href="./" rel="nofollow">首页</a>
        </li>
              </ul>
      <div class="hd_cart" id="ECS_CARTINFO">
         554fcae493e564ee0dc75bdf2ebf94cacart_info_mb5|a:1:{s:4:"name";s:13:"cart_info_mb5";}554fcae493e564ee0dc75bdf2ebf94ca      </div>
    </div>
  </div>
  <div class="search_result"></div>
</div>
<div class="newsCenter-wrapper">
    <div class="newsCenter">
        <ul>
                              <li>【渔湾仔】欢迎您光临本店</li>
          <li>【渔湾仔】竭诚为您服务</li>
          <li>【渔湾仔】提供最新鲜品质，为了客户最满意</li>
                  </ul>
    </div>
</div>
<script>
  $(function () {
    // 火一五信息科技 huo15.com Created by zhaobo on 2017/1/10.
//    分类树色条样式
    $(".main_cata li:even").css({
        background:"#daf8f0"
    })
    $("#J_subCata").remove();
      //暂时隐藏客服浮窗
      $("#side-bar").hide();
    //初始化Li的位置
    $(".newsCenter ul").height(44*$(".newsCenter ul li").length)
    $(".newsCenter ul li").each(function(index,element) {
      var holeHeight = $(".newsCenter ul").height();
      //alert ($(this).css('top'));
      var oldtop = $(this).css('top');
      console.log("oldtop",oldtop,"index",index)
      var pp = /px/g;
      var newtop =Number(oldtop.replace(pp,""))+44*index; //44是li的高度
      console.log("newtop",newtop)
      $(this).css("top",newtop + "px");
    });
    //自动滚动。
    var auto_time = setInterval("newsCenterutomove()",3000);
    $(".newsCenter ul").hover(function () {
      clearInterval(auto_time);
    },function () {
      auto_time = setInterval("newsCenterutomove()",3000);
    });
  });
  //逐步移动
  function newsCenterutomove()
  {
    $(".newsCenter ul li").each(function() {
        var holeHeight = $(".newsCenter").height();
        console.log("AUTO_holeHeight",holeHeight)
        var oldtop = $(this).css('top');
        console.log("AUTO_oldtop",oldtop)
        var pp = /px/g;
        var newtop =Number(oldtop.replace(pp,""))+44; //44是li的高度
//      console.log("newtop",newtop)
        if ( newtop >= holeHeight )
        {
          $(this).css("top","0px");
        }
        else
        {
          $(this).css("top",newtop+"px");
        }
      });
  }
</script>
<script type="text/javascript" src="themes/lizi/js/magiczoomplus.js"></script>
<script type="text/javascript" src="themes/lizi/js/easydialog.min.js"></script>
<script type="text/javascript" src="themes/lizi/js/lizi_goods.js"></script>
<div id="wrapper">
  <div class="breadcrumbs cle"> <div class="menus">您当前的位置：<a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=2">生鲜食品</a> <code>&gt;</code> <a href="category.php?id=19">根茎类</a> <code>&gt;</code> 新鲜水果甜蜜香脆单果约800克</div>
 
     
  </div>
  <div class="detail cle"> 
     
    <div class="detail_img" id="detail_img">
  <div class="pic_view"> <a href="images/201512/goods_img/1_P_1449024889889.jpg" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: current; zoom-distance: 10;zoom-width: 400; zoom-height: 400;" onclick="window.open('gallery.php?id=1'); return false;"> <img  alt="新鲜水果甜蜜香脆单果约800克" src="images/201512/goods_img/1_P_1449024889889.jpg"> </a> </div>
  <div class="item-thumbs" id="item-thumbs">
  <a class="prev" href="javascript:void(0);"></a>
  <a class="next" href="javascript:void(0);"></a>
  <div class="bd">
    <ul class="cle">
       
            <li class="current"> <a href="images/201512/goods_img/1_P_1449024889889.jpg" rel="zoom-id: Zoomer" rev="images/201512/goods_img/1_P_1449024889889.jpg"> <img alt="新鲜水果甜蜜香脆单果约800克" src="images/201512/thumb_img/1_thumb_P_1449024889723.jpg"> </a></li>
            <li > <a href="images/201512/goods_img/1_P_1449024889264.jpg" rel="zoom-id: Zoomer" rev="images/201512/goods_img/1_P_1449024889264.jpg"> <img alt="新鲜水果甜蜜香脆单果约800克" src="images/201512/thumb_img/1_thumb_P_1449024889757.jpg"> </a></li>
            <li > <a href="images/201512/goods_img/1_P_1449024889726.jpg" rel="zoom-id: Zoomer" rev="images/201512/goods_img/1_P_1449024889726.jpg"> <img alt="新鲜水果甜蜜香脆单果约800克" src="images/201512/thumb_img/1_thumb_P_1449024889686.jpg"> </a></li>
            <li > <a href="images/201512/goods_img/1_P_1449024889018.jpg" rel="zoom-id: Zoomer" rev="images/201512/goods_img/1_P_1449024889018.jpg"> <img alt="新鲜水果甜蜜香脆单果约800克" src="images/201512/thumb_img/1_thumb_P_1449024889930.jpg"> </a></li>
            <li > <a href="images/201512/goods_img/1_P_1449024889287.jpg" rel="zoom-id: Zoomer" rev="images/201512/goods_img/1_P_1449024889287.jpg"> <img alt="新鲜水果甜蜜香脆单果约800克" src="images/201512/thumb_img/1_thumb_P_1449024889543.jpg"> </a></li>
       
            
    </ul>
    </div>
  
  </div>
</div>
    <form action="javascript:addToCart(1)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      
      
      <div class="item-info" id="item-info">
        <dl class="loaded">
          
          <dt class="product_name">
            <h1>新鲜水果甜蜜香脆单果约800克</h1>
            <p class="desc"> <span class="gray">食用百香果可以增加胃部饱腹感，减少余热量的摄入，还可以吸附胆固醇和胆汁之类有机分子，抑制人体对脂肪的吸收。因此，长期食用有利于改善人体营养吸收结构，降低体内脂肪，塑造健康优美体态。</span> </p>
          </dt>
          
          
          <dd class="property">
            <ul>
                            <li> 此商品为免运费商品，计算配送金额时将不计入配送费用 </li>
              
               
               
              
               
               
              
                            <li> <span class="lbl">市场价</span> <em class="cancel">￥232元</em> </li>
                            <li> 
                 
		<script type="text/javascript" src="themes/lizi/js/lefttime.js"></script>
                <span class="icon_promo">抢购</span> <span class="lbl">促销价</span> <span class="unit"> <strong class="nala_price red" id="ECS_SHOPPRICE">￥156元</strong> </span>  <span class="timedown" id="timedown"><i class="iconfont">:</i>剩余时间：<strong id="leftTime" class="font_w">请稍等, 正在载入中...</strong></span> 
                 
              </li>
              
               
              
                            <li><span>可使用<em class="red">100</em>积分</span></li>
                            
    
                            <li style="color:#666;"> 
                 
                <span class="lbl">促&nbsp;&nbsp;&nbsp;销</span>
                 
                <a href="group_buy.php" title="团购活动" style="font-weight:100; color:#1e9246; text-decoration:none;">[团购活动]</a> 
                 
                <a href="group_buy.php?act=view&amp;id=6" title="团购活动 雷米高澳丽得成犬粮20kg的时间为2015-11-25到2022-11-29，赶快来抢吧！" style="font-weight:100; color:#1e9246;">雷米高澳丽得成犬粮20kg</a><br />
                 
                <span class="lbl">促&nbsp;&nbsp;&nbsp;销</span>
                 
                <a href="activity.php" title="优惠活动" style="font-weight:100; color:#1e9246; text-decoration:none;">[优惠活动]</a> 
                 
                <a href="activity.php" title="优惠活动 购物金额满500元，省100元的时间为2015-11-20到2023-11-25，赶快来抢吧！" style="font-weight:100; color:#1e9246;">购物金额满500元，省100元</a><br />
                 
              </li>
                            
              <li><span class="lbl">销&nbsp;&nbsp;&nbsp;量</span><span>最近售出<em class="red">1000</em>件</span>（<a href="#pjxqitem" id="pjxqitem_trig">已有 1 人评价</a>）</li>
            </ul>
          </dd>
          
           
          
          
          
          <dd class="tobuy-box cle">
            <ul class="sku">
              
               
                              <div> 
                 <span class="lbl2">外观</span>
                   
                   
                   
                  
                  <input type="hidden" name="spec_attr_type" value="214">
                  <div class="ys_xuan" id="xuan_214">
                    <div class="catt" id="catt_214"> 
                       
                      <a class="cattsel" onclick="show_attr_status(this,1);" name="4" id="xuan_a_4">
		      <p style="background:#FFCE6B; height:40px; width:40px" title="红色">
		      		                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_4" type="radio" name="spec_214" value="4" checked />
                      </a> 
                       
                      <a  onclick="show_attr_status(this,1);" name="5" id="xuan_a_5">
		      <p style="background:#9661FF; height:40px; width:40px" title="蓝色">
		      		                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_5" type="radio" name="spec_214" value="5"  />
                      </a> 
                       
                      <a  onclick="show_attr_status(this,1);" name="6" id="xuan_a_6">
		      <p style="background:#6B9621; height:40px; width:40px" title="绿色">
		      		                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_6" type="radio" name="spec_214" value="6"  />
                      </a> 
                       
                    </div>
                  </div>
                  <input type="hidden" name="spec_list" value="2" />
                   
                   
                   
                </div>
                              <div> 
                 <span class="lbl2">款式</span>
                   
                   
                   
                  
                  <input type="hidden" name="spec_attr_type" value="215">
                  <div class="ys_xuan" id="xuan_215">
                    <div class="catt" id="catt_215"> 
                       
                      <a class="cattsel" onclick="show_attr_status(this,1);" name="7" id="xuan_a_7">
		      <p class="padd" style="background:url(images/201512/thumb_img/1_thumb_G_1449025104251.jpg) no-repeat transparent;" title="时尚款">
		      		      <img src="images/201512/thumb_img/1_thumb_G_1449025104251.jpg" width="40" height="40" alt="时尚款">
		                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_7" type="radio" name="spec_215" value="7" checked />
                      </a> 
                       
                      <a  onclick="show_attr_status(this,1);" name="8" id="xuan_a_8">
		      <p class="padd" style="background:url(images/201512/thumb_img/1_thumb_G_1449025115783.jpg) no-repeat transparent;" title="经典款">
		      		      <img src="images/201512/thumb_img/1_thumb_G_1449025115783.jpg" width="40" height="40" alt="经典款">
		                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_8" type="radio" name="spec_215" value="8"  />
                      </a> 
                       
                      <a  onclick="show_attr_status(this,1);" name="9" id="xuan_a_9">
		      <p class="padd" style="background:url(images/201512/thumb_img/1_thumb_G_1449025126133.jpg) no-repeat transparent;" title="出众款">
		      		      <img src="images/201512/thumb_img/1_thumb_G_1449025126133.jpg" width="40" height="40" alt="出众款">
		                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_9" type="radio" name="spec_215" value="9"  />
                      </a> 
                       
                    </div>
                  </div>
                  <input type="hidden" name="spec_list" value="2" />
                   
                   
                   
                </div>
                              <div> 
                 <span class="lbl2">重量</span>
                   
                   
                   
                  
                  <input type="hidden" name="spec_attr_type" value="211">
                  <div class="ys_xuan" id="xuan_211">
                    <div class="catt" id="catt_211"> 
                       
                      <a class="cattsel" onclick="show_attr_status(this,1);" name="1" id="xuan_a_1">
		      <p style="padding:6px 10px;" title="500克">
		                            <em>500克</em>
                                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_1" type="radio" name="spec_211" value="1" checked />
                      </a> 
                       
                      <a  onclick="show_attr_status(this,1);" name="3" id="xuan_a_3">
		      <p style="padding:6px 10px;" title="2000克">
		                            <em>2000克</em>
                                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_3" type="radio" name="spec_211" value="3"  />
                      </a> 
                       
                      <a  onclick="show_attr_status(this,1);" name="2" id="xuan_a_2">
		      <p style="padding:6px 10px;" title="1000克">
		                            <em>1000克</em>
                                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_2" type="radio" name="spec_211" value="2"  />
                      </a> 
                       
                    </div>
                  </div>
                  <input type="hidden" name="spec_list" value="2" />
                   
                   
                   
                </div>
               
              
              <script type="text/javascript">
var myString=new Array();
myString[0]="|1|4|7|";
myString[1]="|1|4|8|";
myString[2]="|1|4|9|";
myString[3]="|1|5|7|";
myString[4]="|1|5|8|";
myString[5]="|1|5|9|";
myString[6]="|1|6|7|";
myString[7]="|1|6|8|";
myString[8]="|1|6|9|";
myString[9]="|2|4|7|";
myString[10]="|2|4|8|";
myString[11]="|2|4|9|";
myString[12]="|2|5|7|";
myString[13]="|2|5|8|";
myString[14]="|2|5|9|";
myString[15]="|2|6|7|";
myString[16]="|2|6|8|";
myString[17]="|2|6|9|";
myString[18]="|3|4|7|";
myString[19]="|3|4|8|";
myString[20]="|3|4|9|";
myString[21]="|3|5|7|";
myString[22]="|3|5|8|";
myString[23]="|3|5|9|";
myString[24]="|3|6|7|";
myString[25]="|3|6|8|";
myString[26]="|3|6|9|";
</script> 
               
              
              
              <li class="skunum_li cle"> <span class="lbl">数&nbsp;&nbsp;&nbsp;量</span>
                <div class="skunum" id="skunum"> <span class="minus" title="减少1个数量"><i class="iconfont">-</i></span>
                  <input id="number" name="number" type="text" min="1" value="1" onchange="countNum(0)">
                  <span class="add" title="增加1个数量"><i class="iconfont">+</i></span> <cite class="storage"> 件 </cite> 
		</div>
		<div class="skunum" id="skunum">
               
             <cite class="storage">(<font id="shows_number">载入中···</font>)</cite>
               
		</div>
              </li>
              
              
              <li class="add_cart_li"> <a href="javascript:addToCart(1)" class="btn" id="buy_btn"><i class="iconfont">ŭ</i>加入购物车</a> <a id="fav-btn" class="graybtn" href="javascript:collect(1)"><i class="iconfont">Ū</i>收藏</a></li>
	    </ul>
          </dd>
        </dl>
      </div>
    </form>
    <div class="seemore_items" id="seemore_items">
  <h3>看了又看<a href="javascript:;" class="next refresh" title="换一组"><i class="iconfont"></i></a></h3>
  <div class="bd">
    <ul id="history_list">
      554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca    </ul>
  </div>
</div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('seemore_items').style.display='none';
}
else
{
    document.getElementById('seemore_items').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script> </div>
  <div class="detail_bgcolor">
    <div class="z-detail-box cle">
      <div class="z-detail-left">
      
      <div class="taocan_box">
  <div class="hd"> <strong>最体贴的优惠</strong> <span>要优惠？自己凑单还不如来这划算</span> </div>
  <div class="taocan_bd">
    <div class="tabs_bar_warp">
      <div class="tabs_bar taocan_tabs" id="taocan_tabs">
        <ul>
          
           
          <li class="current"><a href="javascript:;">套餐<span class="icon_step">一</span></a>
          </li>
                    
        </ul>
      </div>
    </div>
    <div class="taocan_panels" id="taocan_panels"> 
      
            <div class="panel" style="display: block;">
        <form name="m_goods_0" method="post" action="" onSubmit="return false;">
          <h4></h4>
          <ul class="cle">
            <div style="float:left;"><li><a target="_blank" class="pic" href=""> <img alt="新鲜水果甜蜜香脆单果约800克" src="images/201512/thumb_img/1_thumb_G_1449024889033.jpg"></a>
              <p class="name"> <a target="_blank" href="">新鲜水果甜蜜香脆单果约800克</a> </p>
              <p class="price">
                <input type="checkbox" value="1" data="￥156元 " spare="0" stock="0" class="m_goods_body m_goods_0" item="m_goods_0">
                ￥156元</p>
            	</li>
            </div>
            <div id="fittingBox" class="fittingitem">
              <ul> 
                 
                                
                <li class="plus"></li>
                <li> <a target="_blank" class="pic" href="goods.php?id=10"> <img alt="内蒙新鲜牛肉1斤清真生鲜牛肉火锅食材" src="images/201512/thumb_img/10_thumb_G_1448944572962.jpg"></a>
                  <p class="name"> <a target="_blank" href="goods.php?id=10">内蒙新鲜牛肉1斤清真生鲜牛肉火锅食材</a> </p>
                  <p class="price">
                    <input class="m_goods_list m_goods_0" item="m_goods_0" type="checkbox" value="10" data="88" spare="0" stock="0">
                    ￥88</p>
                </li>
                
                 
                 
                                
                <li class="plus"></li>
                <li> <a target="_blank" class="pic" href="goods.php?id=11"> <img alt="澳洲进口120天谷饲牛仔骨4份原味生鲜" src="images/201512/thumb_img/11_thumb_G_1448944388914.jpg"></a>
                  <p class="name"> <a target="_blank" href="goods.php?id=11">澳洲进口120天谷饲牛仔骨4份原味生鲜</a> </p>
                  <p class="price">
                    <input class="m_goods_list m_goods_0" item="m_goods_0" type="checkbox" value="11" data="26" spare="0" stock="0">
                    ￥26</p>
                </li>
                
                 
                 
                                
                <li class="plus"></li>
                <li> <a target="_blank" class="pic" href="goods.php?id=47"> <img alt="日本蒜蓉粉丝扇贝270克6只装" src="images/201512/thumb_img/47_thumb_G_1448946213633.jpg"></a>
                  <p class="name"> <a target="_blank" href="goods.php?id=47">日本蒜蓉粉丝扇贝270克6只装</a> </p>
                  <p class="price">
                    <input class="m_goods_list m_goods_0" item="m_goods_0" type="checkbox" value="47" data="130" spare="0" stock="0">
                    ￥130</p>
                </li>
                
                 
                 
              </ul>
            </div>
            <li class="equal"></li>
            <li class="price_info submit_0">
              <p class="count"> <b>0</b> 件商品，套餐购买立省 <span class="red tip_spare">0.00 元</span> </p>
              <p>原&nbsp;价：<span class="res-totalprice totalprice">¥0.00</span></p>
              <p>套餐价：<span class="red res-totalprice combo_price">¥0.00 </span></p>
              <p class="buy"><a href="javascript:addMultiToCart('m_goods_0', '1')" class="btn">购买套餐</a></p>
              <input type="hidden" name="m_goods_0_number" value="1" />
            </li>
          </ul>
        </form>
      </div>
       
      
    </div>
  </div>
</div>
<script type="text/javascript">
var btn_buy = "确定";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
var select_base = '请选择套餐基本件';
var select_shop = '请选择套餐商品';
var data_not_complete = '数据格式不完整';
var understock = '库存不足，请选择其他商品';
$(function(){
	
	$(".fittingitem").each(function(i, e) {
        var a = $(this).find(".plus");
		var b = a.size();
		var c = $(this).find("li:not(.plus)");
		var d = c.size();
		$(this).find("ul").width(b*40+d*170);
    });
	
	//组合套餐tab切换
	var _tab = $('#cn_b h2');
	var _con = $('#cn_h blockquote');
	var _index = 0;
	_con.eq(0).show().siblings('blockquote').hide();
	_tab.css('cursor','pointer');
	_tab.click(function(){
		_index = _tab.index(this);
		_tab.eq(_index).removeClass('h2bg').siblings('h2').addClass('h2bg');
		_con.eq(_index).show().siblings('blockquote').hide();
	})
	//选择基本件
	$('.m_goods_body').click(function(){
		if($(this).prop('checked')){
			ec_group_addToCart($(this).attr('item'), 1); //基本件(组,主件)
		}else{
			ec_group_delInCart($(this).attr('item'), 1); //删除基本件(组,主件)
			display_Price($(this).attr('item'),$(this).attr('item').charAt($(this).attr('item').length-1));
		}
	})
	//变更选购的配件
	$('.m_goods_list').click(function(){
		//是否选择主件
		if(!$(this).parents('form').find('.m_goods_body').prop('checked')){
			alert(select_base);
			return false;
		}
		if($(this).prop('checked')){
			ec_group_addToCart($(this).attr('item'), $(this).val(),1); //新增配件(组,配件,主件)
		}else{
			ec_group_delInCart($(this).attr('item'), $(this).val(),1); //删除基本件(组,配件,主件)
			display_Price($(this).attr('item'),$(this).attr('item').charAt($(this).attr('item').length-1));
		}
	})
	//可以购买套餐的最大数量
	$(".combo_stock").keyup(function(){
		var group = $(this).parents('form').attr('name');
		getMaxStock(group);//根据套餐获取该套餐允许购买的最大数
	});
})
//允许购买套餐的最大数量
function getMaxStock(group){
	var obj = $('input[name="'+group+'_number"]');
	var original = parseInt(Number(obj.val()));
	var stock = $("."+group).eq(0).attr('stock');
	//是否是数字
	if(isNaN(original)){
		original = 1;
		obj.val(original);
	}
	$("."+group).each(function(index){
		if($("."+group).eq(index).prop('checked')){
			var item_stock = parseInt($("."+group).eq(index).attr('stock'));
			stock = (stock > item_stock)?item_stock:stock;//取最小值
		}
	});
	//更新
	original = (original < 1)?1:original;
	stock = (stock < 1)?1:stock;
	if(original > stock){
		obj.val(stock);
	}
}
function accAdd(arg1, arg2) {
    var r1, r2, m, c;
    try {
        r1 = arg1.toString().split(".")[1].length;
    }
    catch (e) {
        r1 = 0;
    }
    try {
        r2 = arg2.toString().split(".")[1].length;
    }
    catch (e) {
        r2 = 0;
    }
    c = Math.abs(r1 - r2);
    m = Math.pow(10, Math.max(r1, r2));
    if (c > 0) {
        var cm = Math.pow(10, c);
        if (r1 > r2) {
            arg1 = Number(arg1.toString().replace(".", ""));
            arg2 = Number(arg2.toString().replace(".", "")) * cm;
        } else {
            arg1 = Number(arg1.toString().replace(".", "")) * cm;
            arg2 = Number(arg2.toString().replace(".", ""));
        }
    } else {
        arg1 = Number(arg1.toString().replace(".", ""));
        arg2 = Number(arg2.toString().replace(".", ""));
    }
    return (arg1 + arg2) / m;
}
//统计套餐价格
function display_Price(_item,indexTab){
	var _size = $('.'+_item).size();
	var _amount_shop_price = 0;
	var _amount_spare_price = 0;
	indexTab = indexTab - 1;
	var fitting_num = 0;
	for(i=0; i<_size; i++){
		obj = $('.'+_item).eq(i);
		if(obj.prop('checked')){
			_amount_shop_price = accAdd(_amount_shop_price,parseFloat(obj.attr('data'))); //原件合计
			_amount_spare_price = accAdd(_amount_spare_price,parseFloat(obj.attr('spare'))); //优惠合计
			fitting_num++;
		}
	}
	$('.price_info:eq('+indexTab+') .count b').text(fitting_num);//配件数量
		
	var tip_spare = $('.tip_spare:eq('+indexTab+')');//节省文本
	tip_spare.text(_amount_spare_price+"元");//省钱显示提示信息
	
	//显示总价
	$('.combo_price:eq('+indexTab+')').text("¥"+_amount_shop_price);
	
	//显示参考价
	$('.totalprice:eq('+indexTab+')').text("¥"+(parseInt(_amount_shop_price)+_amount_spare_price));
}
//处理添加商品到购物车
function ec_group_addToCart(group,goodsId,parentId){
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var quick		   = 0;
  var group_item   = (typeof(parentId) == "undefined") ? goodsId : parseInt(parentId);
  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group = group + '_' + group_item;//组名
  Ajax.call('flow.php?step=add_to_cart_combo', 'goods=' + $.toJSON(goods), ec_group_addToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}
//处理添加商品到购物车的反馈信息
function ec_group_addToCartResponse(result)
{
  if (result.error > 0)
  {
    // 如果需要缺货登记，跳转
    if (result.error == 2)
    {
      alert(understock);
	  cancel_checkboxed(result.group, result.goods_id);//取消checkbox
    }
    // 没选规格，弹出属性选择框
    else if (result.error == 6)
    {
      ec_group_openSpeDiv(result.message, result.group, result.goods_id, result.parent);
    }
    else
    {
      alert(result.message);
	  cancel_checkboxed(result.group, result.goods_id);//取消checkbox
    }
  }
  else
  {
	//处理Ajax数据
	var group = result.group.substr(0,result.group.lastIndexOf("_"));
	$("."+group).each(function(index){
		if($("."+group).eq(index).val()==result.goods_id){
			//主件显示价格、配件显示基本件+属性价
			var goods_price = (result.parent > 0) ? (parseFloat(result.fittings_price)+parseFloat(result.spec_price)):result.goods_price;
			$("."+group).eq(index).attr('data',goods_price);//赋值到文本框data参数
			$("."+group).eq(index).attr('stock',result.stock);//赋值到文本框stock参数
			$('.'+group+'_display').eq(index).text(goods_price);//前台显示
		}
	});
	getMaxStock(group);//根据套餐获取该套餐允许购买的最大数
	display_Price(group,group.charAt(group.length-1));//显示套餐价格
  }
}
//处理删除购物车中的商品
function ec_group_delInCart(group,goodsId,parentId){
  var goods        = new Object();
  var group_item   = (typeof(parentId) == "undefined") ? goodsId : parseInt(parentId);
  goods.goods_id = goodsId;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group = group + '_' + group_item;//组名
  Ajax.call('flow.php?step=del_in_cart_combo', 'goods=' + $.toJSON(goods), ec_group_delInCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}
//处理删除购物车中的商品的反馈信息
function ec_group_delInCartResponse(result)
{
	var group = result.group;
	if (result.error > 0){
		alert(data_not_complete);
	}else if(result.parent == 0){
		$('.'+group).attr("checked",false);
	}
	display_Price(group,group.charAt(group.length-1));//显示套餐价格
}
//生成属性选择层
function ec_group_openSpeDiv(message, group, goods_id, parent) 
{
  var _id = "speDiv";
  var m = "mask";
  if (docEle(_id)) document.removeChild(docEle(_id));
  if (docEle(m)) document.removeChild(docEle(m));
  //计算上卷元素值
  var scrollPos; 
  if (typeof window.pageYOffset != 'undefined') 
  { 
    scrollPos = window.pageYOffset; 
  } 
  else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') 
  { 
    scrollPos = document.documentElement.scrollTop; 
  } 
  else if (typeof document.body != 'undefined') 
  { 
    scrollPos = document.body.scrollTop; 
  }
  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "hidden";
    i++;
  }
  // 新激活图层
  var newDiv = document.createElement("div");
  newDiv.id = _id;
  newDiv.style.position = "absolute";
  newDiv.style.zIndex = "10000";
  newDiv.style.width = "300px";
  newDiv.style.height = "260px";
  newDiv.style.top = (parseInt(scrollPos + 200)) + "px";
  newDiv.style.left = (parseInt(document.body.offsetWidth) - 200) / 2 + "px"; // 屏幕居中
  newDiv.style.overflow = "auto"; 
  newDiv.style.background = "#FFF";
  newDiv.style.border = "3px solid #59B0FF";
  newDiv.style.padding = "5px";
  //生成层内内容
  newDiv.innerHTML = '<h4 style="font-size:14; margin:15 0 0 15;">' + select_spe + "</h4>";
  for (var spec = 0; spec < message.length; spec++)
  {
      newDiv.innerHTML += '<hr style="color: #EBEBED; height:1px;"><h6 style="text-align:left; background:#ffffff; margin-left:15px;">' +  message[spec]['name'] + '</h6>';
      if (message[spec]['attr_type'] == 1)
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          if (val_arr == 0)
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' checked /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
          else
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
        } 
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
      else
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          newDiv.innerHTML += "<input style='margin-left:15px;' type='checkbox' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + ' [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';     
        }
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
  }
  newDiv.innerHTML += "<br /><center>[<a href='javascript:ec_group_submit_div(\"" + group + "\"," + goods_id + "," + parent + ")' class='f6' >" + btn_buy + "</a>]&nbsp;&nbsp;[<a href='javascript:ec_group_cancel_div(\"" + group + "\"," + goods_id + ")' class='f6' >" + is_cancel + "</a>]</center>";
  document.body.appendChild(newDiv);
  // mask图层
  var newMask = document.createElement("div");
  newMask.id = m;
  newMask.style.position = "absolute";
  newMask.style.zIndex = "9999";
  newMask.style.width = document.body.scrollWidth + "px";
  newMask.style.height = document.body.scrollHeight + "px";
  newMask.style.top = "0px";
  newMask.style.left = "0px";
  newMask.style.background = "#FFF";
  newMask.style.filter = "alpha(opacity=30)";
  newMask.style.opacity = "0.40";
  document.body.appendChild(newMask);
} 
//获取选择属性后，再次提交到购物车
function ec_group_submit_div(group, goods_id, parentId) 
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var input_arr      = document.getElementById('speDiv').getElementsByTagName('input'); //by mike
  var quick		   = 1;
  var spec_arr = new Array();
  var j = 0;
  for (i = 0; i < input_arr.length; i ++ )
  {
    var prefix = input_arr[i].name.substr(0, 5);
    if (prefix == 'spec_' && (
      ((input_arr[i].type == 'radio' || input_arr[i].type == 'checkbox') && input_arr[i].checked)))
    {
      spec_arr[j] = input_arr[i].value;
      j++ ;
    }
  }
  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goods_id;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group    = group;//组名
  Ajax.call('flow.php?step=add_to_cart_combo', 'goods=' + $.toJSON(goods), ec_group_addToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));
  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }
}
//关闭mask和新图层的同时取消选择
function ec_group_cancel_div(group, goods_id){
  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));
  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }
  cancel_checkboxed(group, goods_id);//取消checkbox
}
/*
*套餐提交到购物车 by mike
*/
function addMultiToCart(group,goodsId){
	var goods     = new Object();
	var number    = $('input[name="'+group+'_number"]').val();
	
	goods.group = group;
	goods.goods_id = goodsId;
	goods.number = (number < 1) ? 1:number;
	
	//判断是否勾选套餐
	if(!$("."+group).is(':checked')){
		alert(select_shop);
		return false;	
	}
	//alert(goodsId);
	Ajax.call('flow.php?step=add_to_cart_group', 'goods=' + $.toJSON(goods), addMultiToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}
//回调
function addMultiToCartResponse(result){
	if(result.error > 0){
		alert(result.message);
	}else{
		window.location.href = 'flow.php';
	}
}
//取消选项
function cancel_checkboxed(group, goods_id){
	//取消选择
	group = group.substr(0,group.lastIndexOf("_"));
	$("."+group).each(function(index){
		if($("."+group).eq(index).val()==goods_id){
			$("."+group).eq(index).attr("checked",false);			  
		}
	});
}
/*
//sleep
function sleep(d){
	for(var t = Date.now();Date.now() - t <= d;);
}
*/
</script> 
        <div class="tabs_bar_warp">
          <div class="tabs_bar" id="tabs_bar">
            <ul>
              <li class="current_select"> <a class="spxqitem" rel="nofollow" href="javascript:void(0);">商品详情</a> </li>
              <li class=""><a class="pjxqitem" href="javascript:void(0);" name="pjxqitem" rel="nofollow">评价详情(<em>1</em>)</a></li>
              <li class="tab-buy" id="tab-buy"><strong id="ECS_SHOPPRICE_TOP">￥156元</strong><a class="btn" href="javascript:addToCart(1);">购 买</a> </li>
            </ul>
          </div>
        </div>
        <div class="product_tabs">
          <div class="sectionbox z-box" id="spxqitem">
            <div class="spxq_main">
              <div>
                <div>
                  <table>
                    <tbody>
                      <tr>
                        <td width="20%" class="th"> 产品名称 :</td>
                        <td width="80%"> 新鲜水果甜蜜香脆单果约800克</td>
                      </tr>
                       
                      
                                            
                    </tbody>
                  </table>
                </div>
                <p>&nbsp; </p>
              </div>
              <div class="spxq_dec"><p><img width="790" height="441" src="/images/upload/Image/1(1).jpg" alt="" /><br />
<img width="790" height="595" src="/images/upload/Image/2.jpg" alt="" /><br />
<img width="790" height="602" src="/images/upload/Image/3.jpg" alt="" /></p></div>
            </div>
          </div>
          <div class="z-box sectionbox">
            
              
              	<script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><div class="z-detail-com-box" id="ECS_COMMENT">554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:1;}554fcae493e564ee0dc75bdf2ebf94ca</div>
    
          </div>
        </div>
      </div>
	  
	  <div class="z-detail-right">
	  	<div class="tabs_bar_right">
			<div class="tabs_bar2">热卖商品</div>
		</div>
	  	<div class="hot_box">
			<ul>
								<li>
					<a href="goods.php?id=49" target="_self">
						<img width="194px" height="194px" src="images/201511/thumb_img/49_thumb_G_1448162819357.jpg" />
						<p>1分钱支付测试商品</p>
						<p class="hot_price">
							          					￥0元          											</p>
					</a>
				</li>
								<li>
					<a href="goods.php?id=16" target="_self">
						<img width="194px" height="194px" src="images/201512/thumb_img/16_thumb_G_1448947194349.jpg" />
						<p>52度茅台集团国隆双喜酒500mlx6</p>
						<p class="hot_price">
							          					￥19元          											</p>
					</a>
				</li>
								<li>
					<a href="goods.php?id=30" target="_self">
						<img width="194px" height="194px" src="images/201512/thumb_img/30_thumb_G_1448948662661.jpg" />
						<p>泰国菠萝蜜16-18斤 1个装</p>
						<p class="hot_price">
							          					￥9元          											</p>
					</a>
				</li>
								<li>
					<a href="goods.php?id=33" target="_self">
						<img width="194px" height="194px" src="images/201512/thumb_img/33_thumb_G_1448948479944.jpg" />
						<p>现摘芭乐 番石榴台湾珍珠芭乐</p>
						<p class="hot_price">
							          					￥23元          											</p>
					</a>
				</li>
								<li>
					<a href="goods.php?id=34" target="_self">
						<img width="194px" height="194px" src="images/201512/thumb_img/34_thumb_G_1448948399017.jpg" />
						<p>潍坊萝卜5斤/箱 礼盒</p>
						<p class="hot_price">
							          					￥38元          											</p>
					</a>
				</li>
								<li>
					<a href="goods.php?id=21" target="_self">
						<img width="194px" height="194px" src="images/201512/thumb_img/21_thumb_G_1448946793103.jpg" />
						<p>西夫拉姆进口洋酒小酒版</p>
						<p class="hot_price">
							          					￥46元          											</p>
					</a>
				</li>
								<li>
					<a href="goods.php?id=42" target="_self">
						<img width="194px" height="194px" src="images/201512/thumb_img/42_thumb_G_1448948895152.jpg" />
						<p>伊利官方直营全脂营养舒化奶250ml*12盒*2提</p>
						<p class="hot_price">
							          					￥36元          											</p>
					</a>
				</li>
							</ul>
		</div>
	  </div>
	  
	  
    </div>
  </div>
</div>
<div class="add_ok" id="cart_show">
    <div class="tip">
        <i class="iconfont"></i>商品已成功加入购物车
    </div>
    <div class="go">
        <a href="javascript:easyDialog.close();" class="back">&lt;&lt;继续购物</a>
        <a href="flow.php" class="btn">去结算</a>
    </div>
</div>
<div id="footer">
  <div class="ft-bg">
    <div class="w-ensure mb20">
    	<div class="w-main">
        	<ul>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr1.gif"></a></li>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr2.gif"></a></li>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr3.gif"></a></li>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr4.gif"></a></li>
            </ul>
        </div>
    </div>
    <div class="ft_main">
      <div class="ft_links">
        <div class="ft_nav"> 
           
           
          <a href="article.php?id=1"    
          class="noborder" 
           rel="nofollow">免责条款</a> 
           
          <a href="article.php?id=2"    rel="nofollow">隐私保护</a> 
           
          <a href="article.php?id=3"    rel="nofollow">咨询热点</a> 
           
          <a href="article.php?id=4"    rel="nofollow">联系我们</a> 
           
          <a href="article.php?id=5"    rel="nofollow">公司简介</a> 
           
          <a href="wholesale.php"    rel="nofollow">批发方案</a> 
           
          <a href="myship.php"    rel="nofollow">配送方式</a> 
           
           
          
        </div>
      </div>
      <div class="ft_txt">
        <p>&copy; 2005-2017 渔湾仔 官方商城 版权所有，并保留所有权利。ICP备案证书号：<a href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow">鲁ICP备14022957号-1</a></p>
        <p class="ft_contact"> <span>服务时间：09:00-23:00</span> </p>
          
                </div>
    </div>
  </div>
</div>
<script>
	$(function(){
		$(window).scroll(function(){
			if($(window).scrollTop()>100){  //距顶部多少像素时，出现返回顶部按钮
				$("#side-bar .gotop").fadeIn();	
			}
			else{
				$("#side-bar .gotop").hide();
			}
		});
		$("#side-bar .gotop").click(function(){
			$('html,body').animate({'scrollTop':0},500); //返回顶部动画 数值越小时间越短
		});
	});
</script>
<ul id="side-bar" class="side-pannel side-bar">
      <a href="http://wpa.qq.com/msgrd?v=3&uin=3186355915&site=渔湾仔 官方商城&menu=yes" target="_blank" class="kefuqq"></a>
        <a href="http://amos1.taobao.com/msg.ww?v=2&uid=%E9%9D%99%E9%9D%99%E7%9A%84%E6%99%BA%E5%9B%8A%E5%9B%A2&s=2" target="_blank" class="kefuww"></a>
    <a href="javascript:;" class="qr weixin"><i></i></a>
  <a href="javascript:;" class="gotop" style="display:none;"></a>
</ul>
<script type="text/javascript" src="js/quick_buy1.js"></script>
<div class="quickBoxOuter" id="quickBoxOuter">
      <div class="quickBoxInner clearfix">
        <div class="title-bar">
          <h2>快速订购<font>(闪电下单，无需走购物车流程，简单方便更快捷！)</font></h2>
          <a href="javascript:closeLogin('quickBoxOuter')" class="close_quick"></a>
          </div>
        <div class="quickBox clearfix">
          <form action="quick_buy.php" method="post" name="ECS_FORMQUICKBUY" id="ECS_FORMQUICKBUY" onsubmit="return checkOrderForm(this)">
            <input name="goods_id" type="hidden" value="1"/>
            <input name="goods_sn" type="hidden" value="ECS000000"/>
            <input name="goods_weight" type="hidden" value="0克"/>
            <input name="market_price" type="hidden" value="￥232元"/>
            <ul class="QuickProductBox clearfix">
              <li><em>商品名称：</em>
                <input name="goods_name" type="text" class="textInput" value="新鲜水果甜蜜香脆单果约800克" readonly style="width:300px" />
              </li>
              
                            <li> <em>外观：</em>
                
                                				<div class="sku_box2">
				                 <label class="selected sku_list2" for="spec_quick_value_4">
                  <input style="display:none;" type="radio" name="spec_quick_214" value="4" id="spec_quick_value_4" checked onclick="quick_to_cart(1)" />
                  红色 <span class="icon_bg">已选中</span></label>
                                <label class=" sku_list2" for="spec_quick_value_5">
                  <input style="display:none;" type="radio" name="spec_quick_214" value="5" id="spec_quick_value_5"  onclick="quick_to_cart(1)" />
                  蓝色 <span class="icon_bg">已选中</span></label>
                                <label class=" sku_list2" for="spec_quick_value_6">
                  <input style="display:none;" type="radio" name="spec_quick_214" value="6" id="spec_quick_value_6"  onclick="quick_to_cart(1)" />
                  绿色 <span class="icon_bg">已选中</span></label>
                				</div>
				
				
				
                <input type="hidden" name="spec_list" value="2" />
                                              </li>
                            <li> <em>款式：</em>
                
                                				<div class="sku_box2">
				                 <label class="selected sku_list2" for="spec_quick_value_7">
                  <input style="display:none;" type="radio" name="spec_quick_215" value="7" id="spec_quick_value_7" checked onclick="quick_to_cart(1)" />
                  时尚款 <span class="icon_bg">已选中</span></label>
                                <label class=" sku_list2" for="spec_quick_value_8">
                  <input style="display:none;" type="radio" name="spec_quick_215" value="8" id="spec_quick_value_8"  onclick="quick_to_cart(1)" />
                  经典款 <span class="icon_bg">已选中</span></label>
                                <label class=" sku_list2" for="spec_quick_value_9">
                  <input style="display:none;" type="radio" name="spec_quick_215" value="9" id="spec_quick_value_9"  onclick="quick_to_cart(1)" />
                  出众款 <span class="icon_bg">已选中</span></label>
                				</div>
				
				
				
                <input type="hidden" name="spec_list" value="2" />
                                              </li>
                            <li> <em>重量：</em>
                
                                				<div class="sku_box2">
				                 <label class="selected sku_list2" for="spec_quick_value_1">
                  <input style="display:none;" type="radio" name="spec_quick_211" value="1" id="spec_quick_value_1" checked onclick="quick_to_cart(1)" />
                  500克 <span class="icon_bg">已选中</span></label>
                                <label class=" sku_list2" for="spec_quick_value_3">
                  <input style="display:none;" type="radio" name="spec_quick_211" value="3" id="spec_quick_value_3"  onclick="quick_to_cart(1)" />
                  2000克 <span class="icon_bg">已选中</span></label>
                                <label class=" sku_list2" for="spec_quick_value_2">
                  <input style="display:none;" type="radio" name="spec_quick_211" value="2" id="spec_quick_value_2"  onclick="quick_to_cart(1)" />
                  1000克 <span class="icon_bg">已选中</span></label>
                				</div>
				
				
				
                <input type="hidden" name="spec_list" value="2" />
                                              </li>
                            
            </ul>
            <ul class="quickAddressBox clearfix">
              
              <li class="w150"><em>购物数量：</em><input name="qty" type="text" value="1" class="textInput" id="textNum"  onblur="quick_to_cart(1)"/></li>
              <li class="w150"><em>商品总价：</em><span class="total_price" id="total_price">&nbsp;</span></li>
              
              
              <li class="w150" style="clear:both"><em>收货人姓名：</em> <input name="consignee" class="textInput" value="" type="text" /> <font>*</font></li>
              
              <li class="w150"> <em>联系电话：</em><input name="tel" class="textInput" value="" type="text" /><font>*</font> </li> 
              
                
              <li><em>配送区域：</em>
                <input name="country" id="country" type="hidden" value="1" />
                <select name="province" id="selProvinces_1" onchange="region.changed(this, 2, 'selCities_1');quick_to_cart(0);" style="border:1px solid #ccc;">
                  <option value="0"></option>
                                    <option value="2" >北京</option>
                                    <option value="3" >安徽</option>
                                    <option value="4" >福建</option>
                                    <option value="5" >甘肃</option>
                                    <option value="6" >广东</option>
                                    <option value="7" >广西</option>
                                    <option value="8" >贵州</option>
                                    <option value="9" >海南</option>
                                    <option value="10" >河北</option>
                                    <option value="11" >河南</option>
                                    <option value="12" >黑龙江</option>
                                    <option value="13" >湖北</option>
                                    <option value="14" >湖南</option>
                                    <option value="15" >吉林</option>
                                    <option value="16" >江苏</option>
                                    <option value="17" >江西</option>
                                    <option value="18" >辽宁</option>
                                    <option value="19" >内蒙古</option>
                                    <option value="20" >宁夏</option>
                                    <option value="21" >青海</option>
                                    <option value="22" selected>山东</option>
                                    <option value="23" >山西</option>
                                    <option value="24" >陕西</option>
                                    <option value="25" >上海</option>
                                    <option value="26" >四川</option>
                                    <option value="27" >天津</option>
                                    <option value="28" >西藏</option>
                                    <option value="29" >新疆</option>
                                    <option value="30" >云南</option>
                                    <option value="31" >浙江</option>
                                    <option value="32" >重庆</option>
                                    <option value="33" >香港</option>
                                    <option value="34" >澳门</option>
                                    <option value="35" >台湾</option>
                                  </select>
                <select name="city" id="selCities_1" onchange="region.changed(this, 3, 'selDistricts_1');quick_to_cart(0);" style="border:1px solid #ccc;">
                  <option value="0"></option>
                                    <option value="283" >济南</option>
                                    <option value="284" selected>青岛</option>
                                    <option value="285" >滨州</option>
                                    <option value="286" >德州</option>
                                    <option value="287" >东营</option>
                                    <option value="288" >菏泽</option>
                                    <option value="289" >济宁</option>
                                    <option value="290" >莱芜</option>
                                    <option value="291" >聊城</option>
                                    <option value="292" >临沂</option>
                                    <option value="293" >日照</option>
                                    <option value="294" >泰安</option>
                                    <option value="295" >威海</option>
                                    <option value="296" >潍坊</option>
                                    <option value="297" >烟台</option>
                                    <option value="298" >枣庄</option>
                                    <option value="299" >淄博</option>
                                  </select>
                <select name="district" id="selDistricts_1"  onchange="quick_to_cart(0);" style="border:1px solid #ccc;">
                  <option value="0"></option>
                                    <option value="2342" >市南区</option>
                                    <option value="2343" >市北区</option>
                                    <option value="2344" >城阳区</option>
                                    <option value="2345" >四方区</option>
                                    <option value="2346" >李沧区</option>
                                    <option value="2347" >黄岛区</option>
                                    <option value="2348" >崂山区</option>
                                    <option value="2349" >胶州市</option>
                                    <option value="2350" >即墨市</option>
                                    <option value="2351" >平度市</option>
                                    <option value="2352" >胶南市</option>
                                    <option value="2353" >莱西市</option>
                                  </select>
                <font>*</font> </li>
              <li><em>街道地址：</em>
                <input name="address" class="textInput" value="" type="text" style="width:300px;" />
                <font>*</font> </li>
             
              <li style="display:none"><em>手机：</em>
                <input name="mobile" class="textInput" value="" type="text" />
              </li>
              <li style="display:none"><em>email：</em>
                <input name="email" class="textInput" value="" type="text" />
              </li>
              <li style="display:none"><em>备注信息：</em>
                <textarea name="postscript" cols="50" rows="3" id="postscript" style="border:1px solid #ccc;"></textarea>
              </li>
              <input name="address_id" class="textInput" value="" type="hidden" />
              <li id="shipping_list" style="display:none;"></li>
              <li id="payment_list">
			  	<em>支付方式：</em>
				<div class="sku_box2">
								<label class="selected sku_list2" for="pay_quick_value_1"><input type="radio" name="payment" id="pay_quick_value_1" value="1"  checked isCod="0"  onClick="quick_to_cart(1);" style="display:none;"/>支付宝<span class="icon_bg">已选中</span></label>
								<label class=" sku_list2" for="pay_quick_value_2"><input type="radio" name="payment" id="pay_quick_value_2" value="2"  isCod="0"  onClick="quick_to_cart(1);" style="display:none;"/>余额支付<span class="icon_bg">已选中</span></label>
								<label class=" sku_list2" for="pay_quick_value_3"><input type="radio" name="payment" id="pay_quick_value_3" value="3"  isCod="0"  onClick="quick_to_cart(1);" style="display:none;"/>银行汇款/转帐<span class="icon_bg">已选中</span></label>
								<label class=" sku_list2" for="pay_quick_value_4"><input type="radio" name="payment" id="pay_quick_value_4" value="4"  isCod="1"  onClick="quick_to_cart(1);" style="display:none;"/>货到付款<span class="icon_bg">已选中</span></label>
								</div>
			  </li>
            </ul>
            <ul class="quickAddressBox clearfix" style="display:none">
              
            </ul>
            <ul class="quickAddressBox clearfix">
              <li style="clear:both"> <em>&nbsp;</em>
                <input type="image" src="themes/lizi/images/zt_cart_bg05.jpg" value="" style="cursor:pointer; border:0px;" />
              </li>
            </ul>
          </form>
        </div>
      </div>
      
      <script type="text/javascript" src="js/region.js"></script>      <script language="javascript">
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
region.isAdmin = false;
var consignee_not_null = "收货人姓名不能为空！";
var country_not_null = "请您选择收货人所在国家！";
var province_not_null = "请您选择收货人所在省份！";
var city_not_null = "请您选择收货人所在城市！";
var district_not_null = "请您选择收货人所在区域！";
var invalid_email = "您输入的邮件地址不是一个合法的邮件地址。";
var address_not_null = "收货人的详细地址不能为空！";
var tele_not_null = "电话不能为空！";
var shipping_not_null = "请您选择配送方式！";
var payment_not_null = "请您选择支付方式！";
var goodsattr_style = "1";
var tele_invaild = "电话号码不有效的号码";
var zip_not_num = "邮政编码只能填写数字";
var mobile_invaild = "手机号码不是合法号码";
var flow_no_payment = "您必须选定一个支付方式。";
        var flow_no_shipping = "您必须选定一个配送方式。";
 </script>
</div>
    <div id="fade" class="black_overlay"></div>
</body>
<script type="text/javascript">
var goods_id = 1;
var goodsattr_style = 1;
var gmt_end_time = 1637740800;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 1;
var now_time = 1484112308;
onload = function(){
  changePrice();
  changeKucun();//这里是添加的
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    
    if (document.getElementById('ECS_SHOPPRICE'))
      document.getElementById('ECS_SHOPPRICE').innerHTML = res.result;
	 if (document.getElementById('ECS_SHOPPRICE_TOP'))
      document.getElementById('ECS_SHOPPRICE_TOP').innerHTML = res.result;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
	
  }
}
</script>
</html>
