<?php
/* Smarty version 4.1.0, created on 2022-04-06 15:15:21
  from 'C:\xampp\htdocs\php_07\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624d9269ca13b2_58485440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b45f5905a0280a873a158193d9e4c0de6fd054c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07\\app\\views\\LoginView.tpl',
      1 => 1649250919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624d9269ca13b2_58485440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1710275737624d9269c9a8f8_56155784', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1710275737624d9269c9a8f8_56155784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1710275737624d9269c9a8f8_56155784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class=" primary button small"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
