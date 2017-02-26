
<link href="themes/lizi/huo15/css/common.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="themes/lizi/huo15/css/font-awesome.css">

<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.json.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/transport_jquery.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/utils.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/lizi_common.js"></script>


<style>
.topimg {
  display: none;
}
.topimg{width:100%; height:50px; margin:0 auto}
.topimg a img{width:100%; height:50px; margin:0 auto; border:0px}
</style>
<div class="topimg">
	<?php
	   $GLOBALS['smarty']->assign('adlist',get_advlist('网站最顶部横幅广告',1));
	?>
	<?php $_from = $this->_var['adlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['ad']['iteration']++;
?>
	   <?php echo $this->_var['ad']['content']; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>

<div id="header" class="new_header">
  <div class="hd_bar">
    <div class="bd_bar_bd cle">
      <ul class="welcome">
        <li><a id="favorite_wb" href="javascript:;" rel="nofollow">收藏<?php echo $this->_var['shop_name']; ?></a></li>
		<li id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
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
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
  <div class="hd_main cle">
    <div class="logo"> <a href="./" class="lizi_logo"><img src="themes/lizi/images/logo.png" alt="<?php echo $this->_var['shop_name']; ?>"/></a>
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
            <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
            <li <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="first"<?php endif; ?>>
              <!--<h3 style="background:url(data/cat_ico/<?php echo $this->_var['cat']['cat_ico']; ?>) 20px center no-repeat;"><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h3>-->
               <h3 ><i class="icon-circle"></i><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h3>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>


        <div class="J_subCata" id="J_subCata" style="opacity: 0; left: 213px; top: 35px;">
          <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>

          <div class="J_subView" style="display: none;">
          <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
            <dl>
              <dt><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> </dt>
              <dd>
              	 <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
			<a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </dd>
            </dl>
	    <div class="clear"></div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>




      </div>
      
      <div class="search-wrapper">
        <div class="search_box">
          <form action="search.php" method="get" id="searchForm" name="searchForm" onSubmit="return checkSearchForm()">
            <input class="sea_input" type="text" name="keywords" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" autocomplete="off" placeholder="请输入关键词">
            <input type="hidden" value="k1" name="dataBi">
            <button type="submit" class="sea_submit"><i class="icon-search icon-large"></i></button>
          </form>
        </div>

      </div>
      
      <ul class="sub_nav cle hide" id="sub_nav">
        <li<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="current"<?php endif; ?>><a href="./" rel="nofollow"><?php echo $this->_var['lang']['home']; ?></a>
        </li>
        <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
        <li<?php if ($this->_var['nav']['active'] == 1): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> rel="nofollow"><?php echo $this->_var['nav']['name']; ?></a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <div class="hd_cart" id="ECS_CARTINFO">
         <?php 
$k = array (
  'name' => 'cart_info_mb5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      </div>
    </div>
  </div>
  <div class="search_result"></div>
</div>



<div class="newsCenter-wrapper">
    <div class="newsCenter">

        <ul>
          <?php $_from = $this->_var['huo15_news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
          <li>【新闻中心】<a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo sub_str(htmlspecialchars($this->_var['article']['title']),15); ?>"><?php echo sub_str($this->_var['article']['short_title'],15); ?></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php if (! $this->_var['huo15_news']): ?>
          <li>【渔湾仔】欢迎您光临本店</li>
          <li>【渔湾仔】竭诚为您服务</li>
          <li>【渔湾仔】提供最新鲜品质，为了客户最满意</li>
          <?php endif; ?>
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
