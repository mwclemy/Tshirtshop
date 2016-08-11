<?php
/* Smarty version 3.1.30-dev/74, created on 2016-08-10 18:03:30
  from "C:\xampp\htdocs\tshirtshop\presentation\templates\department.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/74',
  'unifunc' => 'content_57ab5052d7a9e3_24160133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d570e4337483d00c0618ce10da38b6154e1415f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tshirtshop\\presentation\\templates\\department.tpl',
      1 => 1470844998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_57ab5052d7a9e3_24160133 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_load_presentation_object')) require_once 'C:\\xampp\\htdocs\\tshirtshop\\presentation\\smarty_plugins\\function.load_presentation_object.php';
echo smarty_function_load_presentation_object(array('filename'=>"department",'assign'=>"obj"),$_smarty_tpl);?>

<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mName;?>
</h1>
<p class="description"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDescription;?>
</p>
<?php $_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
