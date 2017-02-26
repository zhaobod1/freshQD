<?php if ($this->_var['brand_list']): ?>
 <div class="fixed-want" id="fixed-want">
    <div class="hd">大牌推荐</div>
    <div class="bd" style="border-top:0;">
        
        
        <dl class="brand">
            <dd>
            	 <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand_foreach']['iteration']++;
?>
                <a href="<?php echo $this->_var['brand']['url']; ?>" target="_blank" rel="nofollow"><?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?></a>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <p class="more"><a href="brand.php">更多&gt;</a></p>
            </dd>
        </dl>
        </div>
</div>
<?php endif; ?>

