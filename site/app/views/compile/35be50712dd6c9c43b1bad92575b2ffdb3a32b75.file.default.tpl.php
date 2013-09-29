<?php /* Smarty version Smarty-3.1.12, created on 2013-08-17 16:32:48
         compiled from "C:\xampp\htdocs\Project\site\app\views\layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4317520f8990ab24f3-76393130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35be50712dd6c9c43b1bad92575b2ffdb3a32b75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\site\\app\\views\\layouts\\default.tpl',
      1 => 1376749397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4317520f8990ab24f3-76393130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_contents' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_520f8990ad7851_78059376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520f8990ad7851_78059376')) {function content_520f8990ad7851_78059376($_smarty_tpl) {?><!DOCTYPE>
<html lang="ja">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>
    <body>
        <?php echo $_smarty_tpl->tpl_vars['page_contents']->value;?>

    </body>
</html><?php }} ?>