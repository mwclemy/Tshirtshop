<?php
/* Smarty version 3.1.30-dev/74, created on 2016-08-10 20:01:55
  from "C:\xampp\htdocs\tshirtshop\presentation\templates\first_page_contents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/74',
  'unifunc' => 'content_57ab6c13b82026_55609302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36595415f6b937c9597ddfca10643cd0a115c070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tshirtshop\\presentation\\templates\\first_page_contents.tpl',
      1 => 1470851591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_57ab6c13b82026_55609302 (Smarty_Internal_Template $_smarty_tpl) {
?>

<p class="description">
We hope you have fun developing TShirtShop, the e-commerce store from
Beginning PHP and MySQL E-Commerce: From Novice to Professional!
</p>
<p class="description">
We have the largest collection of t-shirts with postal stamps on Earth!
Browse our departments and cateogories to find your favorite!
</p>
<?php $_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
