<?php /* Smarty version 2.6.18, created on 2016-11-02 08:35:05
         compiled from mem:defaultTemplatechangePassword */ ?>
<form accept-charset="UTF-8" role="form" class="form-signin" id="<?php echo $this->_tpl_vars['form_id']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" name="<?php echo $this->_tpl_vars['form_name']; ?>
" action="<?php echo $this->_tpl_vars['form_action']; ?>
"  method="post" encType="multipart/form-data" style="margin:0px;" onsubmit="return validateForm('<?php echo $this->_tpl_vars['form_objectRequiredFields']; ?>
');">     
      <div class="boxTop"><div class="a">&nbsp;</div><div class="b">&nbsp;</div><div class="c">&nbsp;</div></div>

     <input type="hidden" class="notValidateThisFields" name="__notValidateThisFields__" id="__notValidateThisFields__" value="<?php echo $this->_tpl_vars['form_objectRequiredFields']; ?>
" />
          <input type="hidden" name="DynaformRequiredFields" id="DynaformRequiredFields" value="<?php echo $this->_tpl_vars['form_objectRequiredFields']; ?>
" />
          <input type="hidden" name="__DynaformName__" id="__DynaformName__" value="<?php echo $this->_tpl_vars['form_name']; ?>
" />

    <fieldset>
      <label class="panel-login">          
        <div class="login_result">
          <?php echo $this->_tpl_vars['form']['THETITLE']; ?>

          <?php echo $this->_tpl_vars['form']['THEDESCRIPTION']; ?>

        </div>
      </label>
     <?php echo $this->_tpl_vars['form']['USR_PASSWORD']; ?>
     
     <?php echo $this->_tpl_vars['form']['USR_PASSWORD_CONFIRM']; ?>
      
    </fieldset>
    <fieldset>
        <label class="panel-login">
            <div class="login_result"></div>
        </label>
        <?php echo $this->_tpl_vars['form']['btnSave']; ?>

        <br>
        <table>
          <tr style="display: none">
              <td colspan="2"><?php echo $this->_tpl_vars['form']['PPP_MINIMUN_LENGTH']; ?>
</td>
            </tr>
                                                <tr style="display: none">
              <td colspan="2"><?php echo $this->_tpl_vars['form']['PPP_MAXIMUN_LENGTH']; ?>
</td>
            </tr>
                                                <tr style="display: none">
              <td colspan="2"><?php echo $this->_tpl_vars['form']['PPP_NUMERICAL_CHARACTER_REQUIRED']; ?>
</td>
            </tr>
                                                <tr style="display: none">
              <td colspan="2"><?php echo $this->_tpl_vars['form']['PPP_UPPERCASE_CHARACTER_REQUIRED']; ?>
</td>
            </tr>
                                                <tr style="display: none">
              <td colspan="2"><?php echo $this->_tpl_vars['form']['PPP_SPECIAL_CHARACTER_REQUIRED']; ?>
</td>
            </tr>
       </table>   
    </fieldset>
    <script type="text/javascript">      
      <?php echo $this->_tpl_vars['form']['JS']; ?>

    </script>
</form>
<script src="/lib/pmdynaform/libs/respondjs/respond.min.js"></script>
<script src="/lib/pmdynaform/libs/html5shiv/html5shiv.js"></script>