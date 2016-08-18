<?php
/* Smarty version 3.1.30-dev/74, created on 2016-08-15 13:09:19
  from "C:\xampp\htdocs\tshirtshop\presentation\templates\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/74',
  'unifunc' => 'content_57b1a2df077492_13100060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6452519769c84bdec40cd81dd81edbc10dfefe5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tshirtshop\\presentation\\templates\\product.tpl',
      1 => 1471259344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57b1a2df077492_13100060 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_load_presentation_object')) require_once 'C:\\xampp\\htdocs\\tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php';
echo smarty_function_load_presentation_object(array('filename'=>"product",'assign'=>"obj"),$_smarty_tpl);?>

<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mProduct['image']) {?>
<img width="100px" class="product-image" src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['image'];?>
"
alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
 image" />
<?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mProduct['image_2']) {?>
<img width="200px" class="product-image" src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['image_2'];?>
"
alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
 image 2" />
<?php }?>
<p class="description"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['description'];?>
</p>
<p class="section">
Price:
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mProduct['discounted_price'] != 0) {?>
<span class="old-price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['price'];?>
</span>
<span class="price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['discounted_price'];?>
</span>
<?php } else { ?>
<span class="price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['price'];?>
</span>
<?php }?>
</p>

<p class="attributes">

<?php
$__section_k_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_k']) ? $_smarty_tpl->tpl_vars['__smarty_section_k'] : false;
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes']) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total != 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] = ($__section_k_0_iteration == 1);
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] = ($__section_k_0_iteration == $__section_k_0_total);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] : null) || $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_name'] !== $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_prev'] : null)]['attribute_name']) {
echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_name'];?>
:
<select name="attr_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_name'];?>
">
<?php }?>

<option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_value'];?>

</option>

<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] : null) || $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_name'] !== $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_next'] : null)]['attribute_name']) {?>
</select>
<?php }
}
}
if ($__section_k_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_k'] = $__section_k_0_saved;
}
?>
</p>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mLinkToContinueShopping) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToContinueShopping;?>
">Continue Shopping</a>
<?php }?>
<h2>Find similar products in our catalog:</h2>
<ol>
<?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mLocations) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<li class="navigation">
<a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLocations[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['link_to_department'];?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mLocations[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_name'];?>
</a>
&raquo;
<a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLocations[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['link_to_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mLocations[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_name'];?>
</a>
</li>
<?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
</ol><?php }
}
