<?php /* Smarty version 2.6.18, created on 2016-10-31 09:19:06
         compiled from mem:defaultTemplatepluginImport */ ?>
<form id="<?php echo $this->_tpl_vars['form_id']; ?>
" name="<?php echo $this->_tpl_vars['form_name']; ?>
" action="<?php echo $this->_tpl_vars['form_action']; ?>
" class="<?php echo $this->_tpl_vars['form_className']; ?>
" method="post" encType="multipart/form-data" style="margin:0px;" onsubmit='return validateForm("<?php echo $this->_tpl_vars['form_objectRequiredFields']; ?>
".parseJSON());'>  
  <div class="borderForm" style="padding-left: 0pt; padding-right: 0pt; width:500">
		<div class="boxTop"><div class="a"></div><div class="b"></div><div class="c"></div></div>
		<div class="content" style="">
	  <table width="99%">
      <tbody><tr>
        <td valign="top">
        <input class="notValidateThisFields" name="__notValidateThisFields__" id="__notValidateThisFields__" value="" type="hidden">
        <input name="DynaformRequiredFields" id="DynaformRequiredFields" value="<?php echo $this->_tpl_vars['form_objectRequiredFields']; ?>
" type="hidden">
           <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                   <tbody><tr>
              <td class="FormTitle" colspan="2" align=""><?php echo $this->_tpl_vars['form']['TITLE1']; ?>
</td>
             </tr>
                                                <tr>
              <td class="FormLabel" width="<?php echo $this->_tpl_vars['form_labelWidth']; ?>
"><?php echo $this->_tpl_vars['MAX_FILE_SIZE']; ?>
</td>
              <!-- <td class='FormFieldContent' width="<?php echo $this->_tpl_vars['form_width']; ?>
" ><?php echo $this->_tpl_vars['form']['MAX_FILE_SIZE']; ?>
 </td>  //-->
              <td class="FormFieldContent" width="<?php echo $this->_tpl_vars['form_fieldContentWidth']; ?>
"><?php echo $this->_tpl_vars['form']['MAX_FILE_SIZE']; ?>
</td> 
              </tr>
                                                <tr>
              <td class="FormLabel" width="<?php echo $this->_tpl_vars['form_labelWidth']; ?>
"><?php echo $this->_tpl_vars['PLUGIN_FILENAME']; ?>
</td>
              <!-- <td class='FormFieldContent' width="<?php echo $this->_tpl_vars['form_width']; ?>
" ><?php echo $this->_tpl_vars['form']['PLUGIN_FILENAME']; ?>
 </td>  //-->
              <td class="FormFieldContent" width="<?php echo $this->_tpl_vars['form_fieldContentWidth']; ?>
"><?php echo $this->_tpl_vars['form']['PLUGIN_FILENAME']; ?>
</td> 
              </tr>
                                               <tr>
              <td class="FormButton" colspan="2" align=""><?php echo $this->_tpl_vars['form']['SAVE']; ?>
 &nbsp; <?php echo $this->_tpl_vars['form']['BTN_CANCEL']; ?>
</td>
             </tr>
                                                                   </tbody></table>
        </td>
      </tr>
    </tbody></table>
    		</div>
		<div class="boxBottom"><div class="a"></div><div class="b"></div><div class="c"></div></div>
  </div>
              <script type="text/javascript">
    <?php echo $this->_tpl_vars['form']['JS']; ?>

  </script>
</form>  