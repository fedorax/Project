<?php /* Smarty version Smarty-3.1.12, created on 2013-08-17 16:32:48
         compiled from "C:\xampp\htdocs\Project\site\app\views\layouts\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13394520f8990b05ca6-56508028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8de23360f286920052c3e4461c7c9c9fdaca8bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\site\\app\\views\\layouts\\header.tpl',
      1 => 1376749397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13394520f8990b05ca6-56508028',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_520f8990b8f914_75347218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520f8990b8f914_75347218')) {function content_520f8990b8f914_75347218($_smarty_tpl) {?><meta charset="utf-8">
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