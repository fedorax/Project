<?php /* Smarty version Smarty-3.1.12, created on 2013-07-07 23:54:42
         compiled from "C:\Users\vmware\Documents\My Web Sites\空のサイト\site\app\views\layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1701851d975d79596f1-18795099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8abfcaf14c5e905d08dec866a23a33db9178fe58' => 
    array (
      0 => 'C:\\Users\\vmware\\Documents\\My Web Sites\\空のサイト\\site\\app\\views\\layouts\\default.tpl',
      1 => 1373208879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1701851d975d79596f1-18795099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d975d79ede10_22770249',
  'variables' => 
  array (
    'page_title' => 0,
    'javascripts' => 0,
    'request' => 0,
    'js' => 0,
    'stylesheets' => 0,
    'css' => 0,
    'page_contents' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d975d79ede10_22770249')) {function content_51d975d79ede10_22770249($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['request']->value['base_path'];?>
/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['request']->value['base_path'];?>
/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" />
<?php } ?>
</head>
<body>
Sample
<?php echo $_smarty_tpl->tpl_vars['page_contents']->value;?>


</body>
</html><?php }} ?>