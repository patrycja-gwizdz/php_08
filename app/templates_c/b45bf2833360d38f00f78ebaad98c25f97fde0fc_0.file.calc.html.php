<?php
/* Smarty version 4.1.0, created on 2022-03-29 11:57:48
  from 'C:\xampp\htdocs\php_04\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6242d81cadc045_56895448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b45bf2833360d38f00f78ebaad98c25f97fde0fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04\\app\\calc.html',
      1 => 1648547621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6242d81cadc045_56895448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15550450676242d81cabd366_15695381', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9975165376242d81cabec91_14287103', 'content');
?>








<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_15550450676242d81cabd366_15695381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15550450676242d81cabd366_15695381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Zadanie 4<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_9975165376242d81cabec91_14287103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9975165376242d81cabec91_14287103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>


<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
            <fieldset>

                <label for="kwota"> Kwota: </label>
                <input id="kwota" type="text" name="kwota" /><br />

                <label for="lata">Liczba lat: </label>
                <input id="lata" type="text" name="lata"  /><br />

                <label for="oprocentowanie">Oprocentowanie: </label>
                <input id="oprocentowanie" type="text" name="oprocentowanie" /><br />

                <button type="submit" class="pure-button">Oblicz</button>
            </fieldset>
        </form>
    </div>


    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
        <h4>Wystąpiły błędy: </h4>
        <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        <?php }?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <h4>Miesięczna rata</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 złotych
        </p>
        <?php }?>

    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
