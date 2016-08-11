{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="store_front" assign="obj"}
<!DOCTYPE html>
<html>
<head>
<title>{#site_title#}</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" type="text/css" href="{$obj->mSiteUrl}styles/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/tshirtshop.css" />
</head>
<body>
<div class="container">
<div class="row header">
<a href="{$obj->mSiteUrl}">
<img class="image-logo" src="{$obj->mSiteUrl}images/tshirtshop.tif"
alt="tshirtshop logo" />
</a>
</div>
<div class="row main">
<div class="navigation-pane col-md-4">
{include file="departments_list.tpl"}
{include file=$obj->mCategoriesCell}
</div>
<div class="contents col-md-6">
{include file=$obj->mContentsCell}
</div>
</div>
</div>
</body>
</html>