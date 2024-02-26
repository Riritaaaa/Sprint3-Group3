<?php
/* Smarty version 4.3.4, created on 2024-02-27 00:36:41
  from '/var/www/html/themes/classic/templates/checkout/cart-empty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65dccc2942b6d0_08807690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bfefeabc49f3f1ee66c8a26a326b433b35ee45f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/cart-empty.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dccc2942b6d0_08807690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87414822365dccc29427089_70259668', 'continue_shopping');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37368848065dccc29429797_53645202', 'cart_actions');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106676376765dccc2942a148_04121524', 'continue_shopping');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90683829165dccc2942a5e9_29973160', 'cart_voucher');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78591531965dccc2942aa50_16087637', 'display_reassurance');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/cart.tpl');
}
/* {block 'continue_shopping'} */
class Block_87414822365dccc29427089_70259668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_87414822365dccc29427089_70259668',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="label" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </a>
<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_actions'} */
class Block_37368848065dccc29429797_53645202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_actions' => 
  array (
    0 => 'Block_37368848065dccc29429797_53645202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="checkout text-sm-center card-block">
    <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
  </div>
<?php
}
}
/* {/block 'cart_actions'} */
/* {block 'continue_shopping'} */
class Block_106676376765dccc2942a148_04121524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_106676376765dccc2942a148_04121524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_voucher'} */
class Block_90683829165dccc2942a5e9_29973160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_90683829165dccc2942a5e9_29973160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'cart_voucher'} */
/* {block 'display_reassurance'} */
class Block_78591531965dccc2942aa50_16087637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_reassurance' => 
  array (
    0 => 'Block_78591531965dccc2942aa50_16087637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'display_reassurance'} */
}
