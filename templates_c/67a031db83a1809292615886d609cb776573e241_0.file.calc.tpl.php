<?php
/* Smarty version 4.1.0, created on 2022-04-06 17:04:36
  from 'C:\xampp\htdocs\php_07b\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624dac04bb2091_26051594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a031db83a1809292615886d609cb776573e241' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07b\\app\\views\\calc.tpl',
      1 => 1649251596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624dac04bb2091_26051594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_284134661624dac04ba3891_02362379', 'content');
?>








<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_284134661624dac04ba3891_02362379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_284134661624dac04ba3891_02362379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<div class="major">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="button primary small">wyloguj</a>
	<span style="float:right;">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, Rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>
	<!-- First Section -->
	<section id="first" class="main special">

	<div>
         
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<label for="kwota">Kwota: </label>
		<input id="kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" />
		<br />
		<label for="lata">Liczba lat: </label>
		<input id="lata" type="text" name="lata"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
"  />
		<br />
		<label for="oprocentowanie">Oprocentowanie: </label>
		<input id="oprocentowanie" type="text" name="oprocentowanie"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
"   />
		<br />
		<br />
		<input type="submit" value="Oblicz" />
	</form>	
	</div>
							</section>

    <section id="cta" class="main  ">
        
        <div class="l-box-lrg pure-u-1 pure-u-med-3-5">


<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
        <div class="messages inf">
                Miesięczna rata: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 złotych
        </div>
        <?php }?>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
