<?php
/* Smarty version 3.1.30-dev/74, created on 2017-02-02 13:23:19
  from "/vagrant/presentation/templates/store_front.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/74',
  'unifunc' => 'content_589332c7704933_92212181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '752cc9b6dc592bf0c04f1c1d59f111ec1271fa41' => 
    array (
      0 => '/vagrant/presentation/templates/store_front.tpl',
      1 => 1484836438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:departments_list.tpl' => 1,
  ),
),false)) {
function content_589332c7704933_92212181 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_load_presentation_object')) require_once '/vagrant/presentation/smarty_plugins/function.load_presentation_object.php';
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "site.conf", null, 0);
?>

<?php echo smarty_function_load_presentation_object(array('filename'=>"store_front",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'site_title');?>
</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
styles/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
styles/tshirtshop.css" />
</head>
<body>
<div class="container">
<div class="row header">
<a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
">
<img class="image-logo" src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
images/tshirtshop.tif"
alt="tshirtshop logo" />
</a>
</div>
<div class="row main">
<div class="navigation-pane col-md-4">
<?php $_smarty_tpl->_subTemplateRender("file:departments_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mCategoriesCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</div>
<div class="contents col-md-6">
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mContentsCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</div>
</div>
</div>
</body>
</html><?php }
}
