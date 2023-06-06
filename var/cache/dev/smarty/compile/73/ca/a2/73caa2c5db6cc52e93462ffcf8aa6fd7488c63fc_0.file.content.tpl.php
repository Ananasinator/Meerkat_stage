<?php
/* Smarty version 4.3.1, created on 2023-06-05 19:02:14
  from '/var/www/html/admin693k53rwtf6nko76hma/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e151668a989_06094047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73caa2c5db6cc52e93462ffcf8aa6fd7488c63fc' => 
    array (
      0 => '/var/www/html/admin693k53rwtf6nko76hma/themes/default/template/content.tpl',
      1 => 1681819498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647e151668a989_06094047 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
