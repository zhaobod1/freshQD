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
<link href="themes/lizi/index.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<script type="text/javascript" src="themes/lizi/js/common.js"></script>
<script type="text/javascript" src="themes/lizi/js/index.js"></script>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<script type="text/javascript" src="themes/lizi/js/lizi_index.js"></script>

 
<?php echo $this->fetch('library/index_ad.lbi'); ?>



<?php echo $this->fetch('library/recommend_promotion.lbi'); ?>








<?php if ($this->_var['new_goods']): ?>
<?php endif; ?>

 













 
 


<div class="series_list"> 
 </div>

 

 <?php echo $this->fetch('library/page_footer.lbi'); ?>




<script>
    /* *
     * 添加商品到收藏夹
     */
    function huo15_collect(goodsId)
    {
        /*var i_heart = $("#huo15_a_" + goodsId + " i");
        console.log(i_heart)
        if (i_heart.hasClass('icon-heart-empty')) {
            i_heart.removeClass('icon-heart-empty').addClass('icon-heart');
        }
        if (i_heart.hasClass('.icon-heart')) {
            i_heart.removeClass('icon-heart').addClass('icon-heart-empty');
        }*/
        Ajax.call('user.php?act=collect', 'id=' + goodsId, huo15_collectResponse, 'GET', 'JSON');
    }

    /* *
     * 处理收藏商品的反馈信息
     */
    function huo15_collectResponse(result)
    {
        alert(result.message);
    }
</script>

</body>
</html>
