<div class="z-detail-point-box cle" style="border-width:0 0 1px 0">
              <div class="z-detail-point-box-left">
		<p><font>温馨提示：</font>因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间等不同，为此以下回复仅对提问者3天内有效，其他网友仅供参考！若由此给您带来不便请多谅解！</p>
              </div>
              <div class="z-detail-point-box-right">
                <div>对自己使用过的商品进行评价，它将成为大家购买参考依据。</div>
                <div><font>评论隐私保护：</font>1.匿名评论；2.注册用户评论(加密处理)</div>
                <div class="good_com_box"> <?php if ($this->_var['factor'] == 0): ?>用户可放心发表使用后的心得感受<a href="javascript:void(0);" onClick="commentsFrom()" id="go_com" class="btn go_btn">我要评价</a> <?php elseif ($this->_var['factor'] == 1): ?>只有登陆的用户才可以对该商品 <a href="javascript:void(0);" onClick="commentsFrom()" id="go_com" target="_blank" class="btn go_btn" rel="nofollow">我要评价</a> <?php elseif ($this->_var['factor'] == 2): ?>在本站购买过一次其他商品的用户才可以对该商品 <a href="javascript:void(0);" onClick="commentsFrom()" id="go_com" target="_blank" class="btn go_btn" rel="nofollow">我要评价</a> <?php elseif ($this->_var['factor'] == 3): ?>购买过此<?php echo $this->_var['goods_name']; ?>的顾客，在收到商品才可以对该商品 <a href="javascript:void(0);" onClick="commentsFrom()" id="go_com" target="_blank" class="btn go_btn" rel="nofollow">我要评价</a><?php endif; ?> </div>
              </div>
            </div>
<div class="z-com-box-head">
  <div class="z-select"> </div>
  全部评价（<?php echo $this->_var['pager']['record_count']; ?>） </div>
<div class="z-com-list" id="ECS_COMMENT"> 
  <?php if ($this->_var['comments']): ?> 
  <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
  <div class="z-com cle">
    <div class="z-com-left"> <img class="face_img" src="themes/lizi/images/default_45.png"> <span class="u-name"><?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></span> </div>
    <div class="z-com-right">
      <div class="left_arrow"> <i class="left_arrow-line">◆</i> <i class="left_arrow-bg">◆</i> </div>
      <div class="z-com-right-head cle"> <span class="min_star"><cite class="ping_star"><i style="width:<?php echo $this->_var['comment']['rank_w']; ?>%;"></i></cite></span> <span class="com-time"><?php echo $this->_var['comment']['add_time']; ?> </span> </div>
      <div class="z-coms" id="comment_id_1329143">
        <div class="z-coms-text ">
          <div class="user-com cle"><span></span> </div>
          <div class="z-coms-img"><?php echo $this->_var['comment']['content']; ?></div>
        </div>
        
        <?php if ($this->_var['comment']['re_content']): ?>
        <div class="z-com-hf">
          <div class="top_arrow"><i class="top_arrow-line">◆</i><i class="top_arrow-bg">◆</i></div>
          <div class="hf_list">
            <ul>
              <li>
                <div class="cle hf_list_li"><span class="hf_face"><img class="face_img" src="themes/lizi/images/default_45.png"></span><span class="hf_text"> <em class="hf_name"><?php echo $this->_var['lang']['admin_username']; ?></em><em class="hf_name">：</em><?php echo $this->_var['comment']['re_content']; ?></span></div>
              </li>
            </ul>
          </div>
        </div>
        <?php endif; ?> 
      </div>
    </div>
  </div>
  
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php else: ?> 
  <?php echo $this->_var['lang']['no_comments']; ?> 
  <?php endif; ?>
  
  <div id="compage">
    <div class="pagenav">
      <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <?php if ($this->_var['pager']['page_prev'] != "javascript:;"): ?>
          <a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="step"><?php echo $this->_var['lang']['page_prev']; ?></a>
        <?php else: ?>
        <a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="step" style="border:1px solid #eee; color:#ccc;"><?php echo $this->_var['lang']['page_prev']; ?></a>
        <?php endif; ?> 
        <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
        <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?> 
        <span class="currentStep"><?php echo $this->_var['key']; ?></span> 
        <?php else: ?> 
        <a href="<?php echo $this->_var['item']; ?>" class="step"><?php echo $this->_var['key']; ?></a> 
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        
        <?php if ($this->_var['pager']['page_next'] != "javascript:;"): ?><a href="<?php echo $this->_var['pager']['page_next']; ?>" class="step"><?php echo $this->_var['lang']['page_next']; ?></a><?php else: ?><a href="<?php echo $this->_var['pager']['page_next']; ?>" class="step" style="border:1px solid #eee; color:#ccc;"><?php echo $this->_var['lang']['page_next']; ?></a><?php endif; ?> 
        
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </form>
    </div>
  </div>
</div>
<script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script> 


<div id="commentsFrom">
  <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
    <ul class="form addr-form" id="addr-form">
    <span style="position:absolute; right:10px; top:5px; font-size:24px; cursor:pointer;" onClick="easyDialog.close();">×</span>
      <li>
        <label><?php echo $this->_var['lang']['username']; ?></label>
        <?php if ($_SESSION['user_name']): ?><?php echo $_SESSION['user_name']; ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?>
      </li>
         <li>
        <label>E-mail</label>
       <input type="text" name="email" id="email"  maxlength="100" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" class="txt"/>
      </li>
         <li>
        <label><?php echo $this->_var['lang']['comment_rank']; ?></label>
       <input name="comment_rank" type="radio" value="1" id="comment_rank1" />
          <img src="themes/lizi/images/stars1.gif" />
          <input name="comment_rank" type="radio" value="2" id="comment_rank2" />
          <img src="themes/lizi/images/stars2.gif" />
          <input name="comment_rank" type="radio" value="3" id="comment_rank3" />
          <img src="themes/lizi/images/stars3.gif" />
          <input name="comment_rank" type="radio" value="4" id="comment_rank4" />
          <img src="themes/lizi/images/stars4.gif" />
          <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" />
          <img src="themes/lizi/images/stars5.gif" />
      </li>
            <li>
        <label><?php echo $this->_var['lang']['comment_content']; ?></label>
       <textarea name="content" class="txt" style="height:80px; width:300px;"></textarea>
      </li>
     <?php if ($this->_var['enabled_captcha']): ?>
    <li> 
     <label><?php echo $this->_var['lang']['comment_captcha']; ?></label>

              <input type="text" class="txt" name="captcha" maxlength="6">
              <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" width="100" height="34" style="position:relative; top:13px;" > </li>
          <?php endif; ?>    
              
 
      <li>
      	<input type="hidden" name="cmt_type" value="<?php echo $this->_var['comment_type']; ?>" />
        <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
        <label>&nbsp;&nbsp;&nbsp;&nbsp;</label>
       <input name="" type="submit"  value="提交评论" class="btn" style="border:none; height:40px; cursor:pointer; width:150px; font-size:16px;">
      </li>
    </ul>
  </form>
</div>

 

<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;

  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + $.toJSON(cmt), commentResponse, 'POST', 'JSON');
   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
	easyDialog.close();
  	window.location.reload();
  }
  
	function commentsFrom(){
		easyDialog.open({
			  container : 'commentsFrom'
		});	
	}

//]]>

</script>