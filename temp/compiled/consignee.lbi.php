<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport_jquery.js')); ?>
<table class="aui_dialog">
  <tbody>
    <tr>
      <td colspan="2" class="aui_header"><div class="aui_titleBar">
          <div class="aui_title" style="cursor: move;"><?php echo $this->_var['lang']['consignee_info']; ?></div>
          </div>
      </td>
    </tr>
    <tr>
      <td class="aui_icon" style="display: none;"><div class="aui_iconBg"></div></td>
      <td class="aui_main" style="width: auto; height: auto;"><div class="aui_content" style="padding: 20px 35px;">
          <ul class="form addr-form" id="addr-form">
            <?php if ($this->_var['real_goods_count'] > 0): ?>
             
            <li> 
              <label class="bt"><font color="#ff0000" style="float:left;">(必填)*</font><?php echo $this->_var['lang']['country_province']; ?>:</label>
              <select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
                <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
                <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
                <?php $_from = $this->_var['province_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
                <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
                <?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="display:none"<?php endif; ?> style="border:1px solid #ccc;">
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
                <?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
             </li>
            <?php endif; ?>
            <li>
              <label class="bt"><font color="#ff0000" style="float:left;">(必填)*</font><?php echo $this->_var['lang']['consignee_name']; ?>:</label>
              <input name="consignee" type="text" class="txt" id="consignee_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" />
            </li>
            <li>
              <label class="bt"><font color="#ff0000" style="float:left;">(必填)*</font><?php echo $this->_var['lang']['email_address']; ?>:</label>
              <input name="email" type="text" class="txt" id="email_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['email']); ?>" />
            </li>
            
            <?php if ($this->_var['real_goods_count'] > 0): ?> 
            
            <li>
              <label class="bt"><font color="#ff0000" style="float:left;">(必填)*</font><?php echo $this->_var['lang']['detailed_address']; ?>:</label>
              <input name="address" type="text" class="txt txt-long"  id="address_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" />
			  <font color="#999999">请填写详细的路名或街道地址，确保准确送达</font>
              </li>
            
            <?php endif; ?>
            
            <li>
              <label><font color="#ff0000" style="float:left;">(必填)*</font><?php echo $this->_var['lang']['backup_phone']; ?>:</label>
              <input name="mobile" type="text" class="txt" id="mobile_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" />
			  <font color="#999999">(填写11位手机号)</font>
            </li>
            
            <?php if ($this->_var['real_goods_count'] > 0): ?> 
            
	    <li>
              <label class="bt"><?php echo $this->_var['lang']['phone']; ?>:</label>
              <input name="tel" type="text" class="txt" id="tel_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" />
			  <font color="#999999">如：028-12345678</font>
              </li>
            <?php endif; ?>
            
            <li class="last" style="padding-left:100px; padding-top:20px;">
              <input type="submit" name="Submit" class="btn" value="<?php echo $this->_var['lang']['shipping_address']; ?>" />
                             <input type="hidden" name="step" value="consignee" />
          <input type="hidden" name="act" value="checkout" />
          <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
          
              <?php if ($_SESSION['user_id'] > 0 && $this->_var['consignee']['address_id'] > 0): ?> 
              
              <a href="javascript:;" onclick="if (confirm('<?php echo $this->_var['lang']['drop_consignee_confirm']; ?>')) location.href='flow.php?step=drop_consignee&amp;id=<?php echo $this->_var['consignee']['address_id']; ?>'"   hidefocus="true" class="graybtn">删 除</a> <?php endif; ?> 
              
            </li>
          </ul>
        </div></td>
    </tr>
    <tr>
      <td colspan="2" class="aui_footer"><div class="aui_buttons" style="display: none;"></div></td>
    </tr>
  </tbody>
</table>