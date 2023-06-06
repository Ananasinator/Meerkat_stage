<?php
/* Smarty version 4.3.1, created on 2023-06-05 19:02:23
  from '/var/www/html/admin693k53rwtf6nko76hma/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e151fe3f5b0_33197445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53a9b7a1304e76e4db66e41d8611b0d415136b3b' => 
    array (
      0 => '/var/www/html/admin693k53rwtf6nko76hma/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1681819498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647e151fe3f5b0_33197445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113195356647e151fe3e705_43447752', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_113195356647e151fe3e705_43447752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_113195356647e151fe3e705_43447752',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
