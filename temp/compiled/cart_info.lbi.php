<a class="tit" href="flow.php">
    <i class="icon-shopping-cart icon-2x"></i>
    <span>
        <i class="iconfont"></i>
    </span>
    <em class="num" id="hd_cartnum" style="visibility: visible;">
        <?php echo $this->_var['number']; ?>
    </em>
</a>
       <div class="list">
<?php if ($this->_var['cart_list']): ?>
<div class="data">
 <?php $_from = $this->_var['cart_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_66439000_1484060979');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_66439000_1484060979']):
?>
  <dl>
    <dt><a target="_blank" href="<?php echo $this->_var['goods_0_66439000_1484060979']['url']; ?>"><img src="<?php echo $this->_var['goods_0_66439000_1484060979']['thumb']; ?>"></a></dt>
    <dd>
      <h4><a target="_blank" href="<?php echo $this->_var['goods_0_66439000_1484060979']['url']; ?>"><?php echo $this->_var['goods_0_66439000_1484060979']['short_name']; ?></a></h4>
      <p><span class="red"><?php echo $this->_var['goods_0_66439000_1484060979']['shop_price']; ?></span>&nbsp;<i>X</i>&nbsp;<?php echo $this->_var['goods_0_66439000_1484060979']['goods_number']; ?></p>
      <a class="iconfont del" title="删除" href="javascript:deleteCartGoods(<?php echo $this->_var['goods_0_66439000_1484060979']['rec_id']; ?>);">Ť</a></dd>
  </dl>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>

<div class="count">共<span class="red" id="hd_cart_count"><?php echo $this->_var['number']; ?></span>件商品哦~
  <p>总价:<span class="red"><em id="hd_cart_total"><?php echo $this->_var['amount']; ?></em></span><a href="flow.php" class="btn">去结算</a></p>
</div>

<?php else: ?>
<p class="fail" style="display:none;"><i class="iconfont">ŭ</i><br>
  购物车空啦<br>
  爱Ta，就带Ta来购物车吧</p>
<?php endif; ?> 
</div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
  }
}
</script> 