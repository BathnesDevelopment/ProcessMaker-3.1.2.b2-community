<?php /* Smarty version 2.6.18, created on 2016-11-01 12:40:55
         compiled from C:/opt/processmaker/workflow/engine/templates/xmlmenu.html */ ?>
<?php if ($this->_tpl_vars['printTemplate']): ?>
<table width='100%' cellspacing="0" cellpadding="0">
 <tr>
  <td valign='top' class='tableOption' width='' align="left">
   <table cellspacing="0" cellpadding="0" width='100%' >
    <tr>
<?php $_from = $this->_tpl_vars['form']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
<?php if (( strcasecmp ( $this->_tpl_vars['field']->colAlign , 'left' ) === 0 ) || ( $this->_tpl_vars['field']->colAlign === '' )): ?>
<?php if (( $this->_tpl_vars['field']->type === 'javascript' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'phpvariable' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'private' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'hidden' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === '' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'print' )): ?>
	 <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php elseif (( $this->_tpl_vars['field']->type === 'button' )): ?>
     <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php elseif (( $this->_tpl_vars['field']->type === 'link' ) || ( $this->_tpl_vars['field']->type === 'menu' )): ?>
     <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><img src="/images/bulletButton.gif" width="6" />&nbsp;<?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php else: ?>
     <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><img src="/images/bulletButton.gif" width="6" />&nbsp;<?php echo $this->_tpl_vars['field']->label; ?>
&nbsp;<?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
     <td class='tableOption'>&nbsp;</td>
    </tr>
   </table>
  </td>
  <td valign='top'  class='tableOption'>
   <table cellspacing="0" cellpadding="0" width='100%'>
    <tr>
<?php $_from = $this->_tpl_vars['form']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
<?php if (( strcasecmp ( $this->_tpl_vars['field']->colAlign , 'center' ) === 0 )): ?>
<?php if (( $this->_tpl_vars['field']->type === 'javascript' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'phpvariable' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'private' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'hidden' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === '' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'button' )): ?>
     <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php elseif (( $this->_tpl_vars['field']->type === 'link' ) || ( $this->_tpl_vars['field']->type === 'menu' )): ?>
     <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php else: ?>
     <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><img src="/images/bulletButton.gif" width="6" />&nbsp;<?php echo $this->_tpl_vars['field']->label; ?>
&nbsp;<?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
    </tr>
   </table>
  </td>
  <td valign='top'>
   <table cellspacing="0" cellpadding="0" align="right" >
    <tr>
<?php $_from = $this->_tpl_vars['form']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
<?php if (( strcasecmp ( $this->_tpl_vars['field']->colAlign , 'right' ) === 0 )): ?>
<?php if (( $this->_tpl_vars['field']->type === 'javascript' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'phpvariable' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'private' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'hidden' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === '' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'button' )): ?>
     <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php elseif (( $this->_tpl_vars['field']->type === 'link' ) || ( $this->_tpl_vars['field']->type === 'menu' )): ?>
     <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><img id="form[<?php echo $this->_tpl_vars['field']->name; ?>
][bullet]" src="/images/bulletButton.gif" />&nbsp;<?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php else: ?>
     <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
"><img id="form[<?php echo $this->_tpl_vars['field']->name; ?>
][bullet]" src="/images/bulletButton.gif" />&nbsp;<?php echo $this->_tpl_vars['field']->label; ?>
&nbsp;<?php echo $this->_tpl_vars['field']->field; ?>
</td>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
    </tr>
   </table>
  </td>
</tr>

<tr>
<td valign='top'  class='tableOption' colspan="5">
   <table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tr>
        <td class='tableOption' align="<?php echo $this->_tpl_vars['field']->colAlign; ?>
" width="<?php echo $this->_tpl_vars['field']->colWidth; ?>
">
<?php $_from = $this->_tpl_vars['form']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>

<?php if (( strcasecmp ( $this->_tpl_vars['field']->colAlign , 'bottom' ) === 0 )): ?>
<?php if (( $this->_tpl_vars['field']->type === 'javascript' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'phpvariable' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'private' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'hidden' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === '' )): ?>
<?php elseif (( $this->_tpl_vars['field']->type === 'button' )): ?>
     <span><?php echo $this->_tpl_vars['field']->field; ?>
</span>
<?php elseif (( $this->_tpl_vars['field']->type === 'link' ) || ( $this->_tpl_vars['field']->type === 'menu' )): ?>
     <div style="padding-left: 6px; padding-top: 8px; float: left;"><?php echo $this->_tpl_vars['field']->field; ?>
</div>
<?php else: ?>
     <span><img src="/images/bulletButton.gif" width="6" />&nbsp;<?php echo $this->_tpl_vars['field']->label; ?>
&nbsp;<?php echo $this->_tpl_vars['field']->field; ?>
</span>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
    </td>
    </tr>
   </table>
  </td>
</tr>

</table>
<script type="text/javascript">
<?php $_from = $this->_tpl_vars['form']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
<?php if (( $this->_tpl_vars['field']->type === 'javascript' )): ?>
    <?php echo $this->_tpl_vars['field']->field; ?>

<?php elseif (( isset ( $this->_tpl_vars['field']->urlAlt ) && ( $this->_tpl_vars['field']->urlAlt !== '' ) )): ?>
    MM_preloadImages('$field->urlAlt');
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</script>
<?php endif; ?>