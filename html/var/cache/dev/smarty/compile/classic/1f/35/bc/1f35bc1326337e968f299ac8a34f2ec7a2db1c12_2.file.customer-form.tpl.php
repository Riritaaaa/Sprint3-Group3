<?php
/* Smarty version 4.3.4, created on 2024-02-27 00:58:19
  from '/var/www/html/themes/classic/templates/customer/_partials/customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65dcd13b4616d6_80639989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f35bc1326337e968f299ac8a34f2ec7a2db1c12' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/customer-form.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_65dcd13b4616d6_80639989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88524319365dcd13b45a8c8_22431436', 'customer_form');
?>


<?php echo '<script'; ?>
>
  document.addEventListener("DOMContentLoaded", function() {
  
    var checkbox = document.getElementById("needinvoice");
    var form = document.getElementById("xform");
    var checkbox1 = document.querySelector('input[name="psgdpr"]');
    var checkbox2 = document.querySelector('input[name="customer_privacy"]');
    var f1 = document.querySelector('input[name="firstname"]');
    var l1 = document.querySelector('input[name="lastname"]');
    var e1 = document.querySelector('input[name="email"]');

    // Hide the form initially
    form.style.display = "none";
    checkbox1.checked = true;
    checkbox2.checked = true;
    f1.value = "quest";
    l1.value = "quest";
    e1.value = "quest@gmail.com";

    // Add event listener to the checkbox
    checkbox.addEventListener("change", function() {
        if (checkbox.checked) {
            // If checkbox is checked, show the form
            form.style.display = "block";
            checkbox1.checked = false;
            checkbox2.checked = false;
            f1.value = "";
            l1.value = "";
            e1.value = "";
        } else {
            // If checkbox is unchecked, hide the form
            form.style.display = "none";
            checkbox1.checked = true;
            checkbox2.checked = true;
            f1.value = "quest";
            l1.value = "quest";
            e1.value = "quest@gmail.com";
        }
    });
});
<?php echo '</script'; ?>
><?php }
/* {block 'customer_form_errors'} */
class Block_48854169465dcd13b45b027_99574814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'customer_form_errors'} */
/* {block 'customer_form_actionurl'} */
class Block_24586611665dcd13b45c177_64296658 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block 'needinvoice'} */
class Block_211826558265dcd13b45c793_82750950 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="form-group row">
          <div class="col-md-9 col-md-offset-3">
            <input name = "needinvoice" id="needinvoice" type = "checkbox" value = "1" >
            <label for="needinvoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'need invoice','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
          </div>
        </div>
    <?php
}
}
/* {/block 'needinvoice'} */
/* {block "form_field"} */
class Block_196279398065dcd13b45e9b4_37244702 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === "password") {?>
            <div class="field-password-policy">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

            </div>
          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php }?>
        <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_111040228565dcd13b45d457_95099775 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == "id_gender") {
continue 1;
}?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196279398065dcd13b45e9b4_37244702', "form_field", $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_175812082865dcd13b4607c6_98608654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
class Block_6761107465dcd13b460344_21475044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175812082865dcd13b4607c6_98608654', "form_buttons", $this->tplIndex);
?>

    </footer>
  <?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
class Block_88524319365dcd13b45a8c8_22431436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customer_form' => 
  array (
    0 => 'Block_88524319365dcd13b45a8c8_22431436',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_48854169465dcd13b45b027_99574814',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_24586611665dcd13b45c177_64296658',
  ),
  'needinvoice' => 
  array (
    0 => 'Block_211826558265dcd13b45c793_82750950',
  ),
  'form_fields' => 
  array (
    0 => 'Block_111040228565dcd13b45d457_95099775',
  ),
  'form_field' => 
  array (
    0 => 'Block_196279398065dcd13b45e9b4_37244702',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_6761107465dcd13b460344_21475044',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_175812082865dcd13b4607c6_98608654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48854169465dcd13b45b027_99574814', 'customer_form_errors', $this->tplIndex);
?>




<form action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24586611665dcd13b45c177_64296658', 'customer_form_actionurl', $this->tplIndex);
?>
" id="customer-form" class="js-customer-form" method="post">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211826558265dcd13b45c793_82750950', 'needinvoice', $this->tplIndex);
?>



  <div id = "xform">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111040228565dcd13b45d457_95099775', "form_fields", $this->tplIndex);
?>

  </div>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6761107465dcd13b460344_21475044', 'customer_form_footer', $this->tplIndex);
?>


</form>
<?php
}
}
/* {/block 'customer_form'} */
}
