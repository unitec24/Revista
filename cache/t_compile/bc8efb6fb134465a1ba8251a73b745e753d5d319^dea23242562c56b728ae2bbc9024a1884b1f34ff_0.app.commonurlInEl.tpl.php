<?php
/* Smarty version 4.3.1, created on 2024-12-14 16:06:12
  from 'app:commonurlInEl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_675d9ee4565371_29361335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea23242562c56b728ae2bbc9024a1884b1f34ff' => 
    array (
      0 => 'app:commonurlInEl.tpl',
      1 => 1724443806,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d9ee4565371_29361335 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	// Initialise JS handler.
	$(function() {
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inElElId']->value,"javascript" ));?>
').pkpHandler(
			'$.pkp.controllers.UrlInDivHandler',
			{
				sourceUrl: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['inElUrl']->value ));?>
,
				refreshOn: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['refreshOn']->value ));?>

			}
		);
	});
<?php echo '</script'; ?>
>

<<?php echo $_smarty_tpl->tpl_vars['inEl']->value;?>
 id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inElElId']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['inElClass']->value) {?> class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inElClass']->value ));?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['inElPlaceholder']->value;?>
</<?php echo $_smarty_tpl->tpl_vars['inEl']->value;?>
>
<?php }
}
