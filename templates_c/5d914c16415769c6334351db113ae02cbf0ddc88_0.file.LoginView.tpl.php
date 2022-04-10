<?php
/* Smarty version 4.1.0, created on 2022-04-06 16:05:09
  from 'C:\xampp\htdocs\php_07a\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624d9e15a5a072_74587623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d914c16415769c6334351db113ae02cbf0ddc88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07a\\app\\views\\LoginView.tpl',
      1 => 1649250919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624d9e15a5a072_74587623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_783370149624d9e15a4ccc6_28515162', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_783370149624d9e15a4ccc6_28515162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_783370149624d9e15a4ccc6_28515162',
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
