<?php
/* Smarty version 3.1.30-dev/74, created on 2016-08-10 19:39:54
  from "C:\xampp\htdocs\tshirtshop\presentation\templates\products_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/74',
  'unifunc' => 'content_57ab66eacd97f5_72329567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '683da02b40c7485503ebdc5d9de7726634066f58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tshirtshop\\presentation\\templates\\products_list.tpl',
      1 => 1470850791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ab66eacd97f5_72329567 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_load_presentation_object')) require_once 'C:\\xampp\\htdocs\\tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php';
?>

<?php echo smarty_function_load_presentation_object(array('filename'=>"products_list",'assign'=>"obj"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['obj']->value->mrTotalPages > 1) {?>
<p>
Page <?php echo $_smarty_tpl->tpl_vars['obj']->value->mPage;?>
 of <?php echo $_smarty_tpl->tpl_vars['obj']->value->mrTotalPages;?>

<?php if ($_smarty_tpl->tpl_vars['obj']->value->mLinkToPreviousPage) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToPreviousPage;?>
">Previous</a>
<?php } else { ?>
Previous
<?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mLinkToNextPage) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToNextPage;?>
">Next</a>
<?php } else { ?>
Next
<?php }?>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mProducts) {?>
<table class="product-list" border="0">
<tbody>
<?php
$__section_k_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_k']) ? $_smarty_tpl->tpl_vars['__smarty_section_k'] : false;
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mProducts) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total != 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] = ($__section_k_0_iteration == 1);
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] = ($__section_k_0_iteration == $__section_k_0_total);
if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)%2 == 0) {?>
<tr>
<?php }?>
<td valign="top">
<h3 class="product-title">
<a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['link_to_product'];?>
">
<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>

</a>
</h3>
<p>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['thumbnail'] != '') {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['link_to_product'];?>
">
<img width="100px" src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['thumbnail'];?>
"
alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
" />
</a>
<?php }
echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['description'];?>

</p>
<p class="section">
Price:
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['discounted_price'] != 0) {?>
<span class="old-price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</span>
<span class="price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['discounted_price'];?>
</span>
<?php } else { ?>
<span class="price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</span>
<?php }?>
</p>
</td>
<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)%2 != 0 && !(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] : null) || (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] : null)) {?>
</tr>
<?php }
}
}
if ($__section_k_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_k'] = $__section_k_0_saved;
}
?>
</tbody>
</table>
<?php }
}
}
