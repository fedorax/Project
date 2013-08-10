<?php /* Smarty version Smarty-3.1.12, created on 2013-08-10 08:53:29
         compiled from "C:\xampp\htdocs\MobileProject\site\app\views\layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222945205d1de16d944-24373231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51e27bad82fd3821a1e59a78037311b097a58479' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MobileProject\\site\\app\\views\\layouts\\default.tpl',
      1 => 1376117604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222945205d1de16d944-24373231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5205d1de270708_34559789',
  'variables' => 
  array (
    'page_contents' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5205d1de270708_34559789')) {function content_5205d1de270708_34559789($_smarty_tpl) {?><!DOCTYPE>
<html lang="ja">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>
    <body>
        <?php echo $_smarty_tpl->tpl_vars['page_contents']->value;?>

    </body>
</html><?php }} ?>