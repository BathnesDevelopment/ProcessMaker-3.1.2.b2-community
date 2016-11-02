<?php /* Smarty version 2.6.18, created on 2016-11-01 12:40:22
         compiled from mem:defaultTemplateauthSources_authSources_SearchUsers */ ?>
<form id="<?php echo $this->_tpl_vars['form_id']; ?>
" name="<?php echo $this->_tpl_vars['form_name']; ?>
" action="<?php echo $this->_tpl_vars['form_action']; ?>
" class="<?php echo $this->_tpl_vars['form_className']; ?>
" method="post" encType="multipart/form-data" style="margin:0px;" onsubmit='return validateForm("<?php echo $this->_tpl_vars['form_objectRequiredFields']; ?>
".parseJSON());'><div class="borderForm" style="width:auto; padding-left:0; padding-right:50px;border-width:<?php echo $this->_tpl_vars['form_border']; ?>
;">
<div class="boxTop"><div class="a"></div><div class="b"></div><div class="c"></div></div>
<div class="content" style="width:auto;" >
<table width="90%" cellspacing="0" cellpadding="0">
  <tr>
    <td valign='top' align="center">
      <table cellspacing="0" cellpadding="0" border="0" width="90%">
      <tr>
        <td class='FormTitle' colspan="2" align=""><?php echo $this->_tpl_vars['form']['TITLE']; ?>
</td>
      </tr>
      <tr style="display: none">
        <td colspan="2"><?php echo $this->_tpl_vars['form']['AUTH_SOURCE_UID']; ?>
</td>
      </tr>
      <tr>
        <td class='FormLabel' width="<?php echo $this->_tpl_vars['form_labelWidth']; ?>
"><?php echo $this->_tpl_vars['KEYWORD']; ?>
</td>
        <td class='FormFieldContent' ><?php echo $this->_tpl_vars['form']['KEYWORD']; ?>
</td>
      </tr>
      <tr>
        <td class='FormButton' colspan="2" align="center"><?php echo $this->_tpl_vars['form']['btnSearch']; ?>
 &nbsp; <?php echo $this->_tpl_vars['form']['BTN_CANCEL']; ?>
 </td>
      </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td valign='top'>
      <table cellspacing="0" cellpadding="0" border="0" width="95%">
      <tr>
        <td align="center">
          <span id="spanUsers" />
        </td>
      </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class='FormButton' colspan="2" align="center"><?php echo $this->_tpl_vars['form']['btnImport']; ?>
</td>
  </tr>
</table>
</div>
<div class="boxBottom"><div class="a"></div><div class="b"></div><div class="c"></div></div>
</div>
<script type="text/javascript">
<?php echo $this->_tpl_vars['form']['JS']; ?>

</script>
</form>