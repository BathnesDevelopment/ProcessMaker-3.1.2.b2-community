<?php /* Smarty version 2.6.18, created on 2016-11-01 12:40:55
         compiled from C:/opt/processmaker/workflow/engine/templates/popupMenu.html */ ?>
<?php if ($this->_tpl_vars['printTemplate']): ?>
<?php $_from = $this->_tpl_vars['form']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
  <?php if (( $this->_tpl_vars['field']->type === 'javascript' )): ?>
  <script type="text/javascript">
    <?php echo $this->_tpl_vars['field']->field; ?>

  </script>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['printJavaScript']): ?>
var oPopupMenu_<?php echo $this->_tpl_vars['form']->name; ?>
;
function popupMenu_<?php echo $this->_tpl_vars['form']->name; ?>
( target )
<?php echo '
{
  try {
  '; ?>

  var menuObserver=leimnud.factory(leimnud.pattern.observer,true);
  leimnud.event.add(document.body,"click",menuObserver.update);

  oPopupMenu_<?php echo $this->_tpl_vars['form']->name; ?>
 = new leimnud.module.app.menuRight();
  oPopupMenu_<?php echo $this->_tpl_vars['form']->name; ?>
.make(
  <?php echo '
  {
    target: target,
  '; ?>

  theme: "<?php echo $this->_tpl_vars['form']->theme; ?>
",
  menu:[
    <?php $this->assign('firstfield', true); ?>
    <?php $_from = $this->_tpl_vars['form']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['field']):
?>
    <?php if ($this->_tpl_vars['field']->type === 'popupoption'): ?>
      <?php if (! $this->_tpl_vars['firstfield']): ?>,<?php endif; ?>
      <?php echo $this->_tpl_vars['field']->getEvents(); ?>

      <?php $this->assign('firstfield', false); ?>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php echo '
    ],
    parent:leimnud
    });
    '; ?>

    menuObserver.register(oPopupMenu_<?php echo $this->_tpl_vars['form']->name; ?>
.remove,oPopupMenu_<?php echo $this->_tpl_vars['form']->name; ?>
);
	<?php echo '

  } catch (e) {
  }
}
'; ?>

<?php endif; ?>