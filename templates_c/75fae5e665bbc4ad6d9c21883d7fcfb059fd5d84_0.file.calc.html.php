<?php
/* Smarty version 4.1.0, created on 2022-04-06 14:12:40
  from 'C:\xampp\htdocs\php_07\app\views\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624d83b84d4166_89717557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75fae5e665bbc4ad6d9c21883d7fcfb059fd5d84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07\\app\\views\\calc.html',
      1 => 1649247157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624d83b84d4166_89717557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1083695569624d83b84c8473_72281738', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1872793806624d83b84c9046_70365742', 'content');
?>








<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'footer'} */
class Block_1083695569624d83b84c8473_72281738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1083695569624d83b84c8473_72281738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1872793806624d83b84c9046_70365742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1872793806624d83b84c9046_70365742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
        <h4>Miesięczna rata</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 złotych
        </p>
        <?php }?>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
