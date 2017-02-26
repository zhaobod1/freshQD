<?php if ($this->_var['script_name'] == "category"): ?>
<dl>
  <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_69871500_1484064554');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_69871500_1484064554']):
?> 
  <?php if ($this->_var['cat_0_69871500_1484064554']['id'] == $this->_var['category']): ?> 
  <?php $_from = $this->_var['cat_0_69871500_1484064554']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_69885000_1484064554');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_69885000_1484064554']):
?>
  <dt><?php echo htmlspecialchars($this->_var['child_0_69885000_1484064554']['name']); ?></dt>
  <?php $_from = $this->_var['child_0_69885000_1484064554']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer_0_69894100_1484064554');if (count($_from)):
    foreach ($_from AS $this->_var['childer_0_69894100_1484064554']):
?>
  <dd> <a href="<?php echo $this->_var['childer_0_69894100_1484064554']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer_0_69894100_1484064554']['name']); ?></a> </dd>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
<?php else: ?>
<dl>
  <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_69909600_1484064554');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_69909600_1484064554']):
?> 
 
  <dt><?php echo htmlspecialchars($this->_var['cat_0_69909600_1484064554']['name']); ?></dt>
 <?php $_from = $this->_var['cat_0_69909600_1484064554']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_69917800_1484064554');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_69917800_1484064554']):
?>
  <dd> <a href="<?php echo $this->_var['child_0_69917800_1484064554']['url']; ?>"><?php echo htmlspecialchars($this->_var['child_0_69917800_1484064554']['name']); ?></a> </dd>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
<?php endif; ?>