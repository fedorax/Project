<?php /* Smarty version Smarty-3.1.12, created on 2013-08-10 08:58:56
         compiled from "C:\xampp\htdocs\MobileProject\site\app\views\layouts\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282065205e2efc8f231-83989075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9200e7f77fee5c62eaa3f308168d9f8808ebb3e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MobileProject\\site\\app\\views\\layouts\\header.tpl',
      1 => 1376117932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282065205e2efc8f231-83989075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5205e2efc91be1_25667907',
  'variables' => 
  array (
    'page_title' => 0,
    'javascripts' => 0,
    'request' => 0,
    'js' => 0,
    'stylesheets' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5205e2efc91be1_25667907')) {function content_5205e2efc91be1_25667907($_smarty_tpl) {?><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Title -->
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>

<!-- Javascript -->
<script src="http://code.jquery.com/jquery.js"></script>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['request']->value['base_path'];?>
/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
<?php } ?>

<!-- Stylesheet -->
<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['request']->value['base_path'];?>
/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" rel="stylesheet" media="screen"/>
<?php } ?>
<?php }} ?>