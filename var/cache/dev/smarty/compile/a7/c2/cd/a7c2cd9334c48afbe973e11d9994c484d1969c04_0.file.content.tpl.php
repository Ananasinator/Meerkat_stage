<?php
/* Smarty version 4.3.1, created on 2023-06-05 19:03:23
  from '/var/www/html/admin693k53rwtf6nko76hma/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e155bca4912_15079657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7c2cd9334c48afbe973e11d9994c484d1969c04' => 
    array (
      0 => '/var/www/html/admin693k53rwtf6nko76hma/themes/new-theme/template/content.tpl',
      1 => 1681819498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647e155bca4912_15079657 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
