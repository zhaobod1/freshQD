<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/lizi/common.css" rel="stylesheet" type="text/css" />
<link href="themes/lizi/article.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body class="article">
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div id="wrapper"> 
	<?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="help_main">
    <div class="help_left_h">
      <h2 class="help_center">帮助中心</h2>
      <div id="h_box">
	  	<h3><span class="num_1"></span>关于<?php echo $this->_var['shop_name']; ?></h3>
	  	<ul>
			<li> <a href="article-47.html">关于我们</a> </li>
			<li> <a href="article-48.html">联系我们</a> </li>
			<li> <a href="article-49.html">加入我们</a> </li>
		</ul>
		<h3><span class="num_2"></span>服务保证</h3>
	  	<ul>
			<li> <a href="article-50.html">保密送货</a> </li>
			<li> <a href="article-51.html">售后质保</a> </li>
			<li> <a href="article-52.html">退换原则</a> </li>
		</ul>
		<h3><span class="num_3"></span>支付配送</h3>
	  	<ul>
			<li> <a href="article-57.html">在线支付</a> </li>
			<li> <a href="article-58.html">货到付款</a> </li>
		</ul>
		<h3><span class="num_4"></span>新手指南</h3>
	  	<ul>
			<li> <a href="article-53.html">会员注册</a> </li>
			<li> <a href="article-54.html">发货说明</a> </li>
			<li> <a href="article-55.html">购物流程</a> </li>
			<li> <a href="article-56.html">常见问题</a> </li>
		</ul>
      </div>
    </div>
    <div class="help_right">
      <h3 class="help_title"><?php echo htmlspecialchars($this->_var['article']['title']); ?></h3>
      <div class="help_content"> 
        <?php if ($this->_var['article']['content']): ?> 
        <?php echo $this->_var['article']['content']; ?> 
        <?php endif; ?> 
        <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
        <div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
        <?php endif; ?>
        <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #ccc;"> 
           
          <?php if ($this->_var['next_article']): ?>
          <?php echo $this->_var['lang']['next_article']; ?>:<a href="<?php echo $this->_var['next_article']['url']; ?>" class="f6"><?php echo $this->_var['next_article']['title']; ?></a><br />
          <?php endif; ?> 
           
          <?php if ($this->_var['prev_article']): ?>
          <?php echo $this->_var['lang']['prev_article']; ?>:<a href="<?php echo $this->_var['prev_article']['url']; ?>" class="f6"><?php echo $this->_var['prev_article']['title']; ?></a> <?php endif; ?> </div>
      </div>
    </div>
    <div style="clear:both"></div>
  </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
