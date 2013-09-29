<?php /* Smarty version Smarty-3.1.12, created on 2013-08-18 08:26:26
         compiled from "C:\xampp\htdocs\Project\site\app\views\templates\index\parts\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11444520f8990a9cdd7-67713560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfbaf372133091675b245ef45384046b9a743e9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\site\\app\\views\\templates\\index\\parts\\nav.tpl',
      1 => 1376807138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11444520f8990a9cdd7-67713560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_520f8990aa6883_02754322',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520f8990aa6883_02754322')) {function content_520f8990aa6883_02754322($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Project Name</a>
		</div>

		<div class="navbar-collapse collapse navbar-responsive-collapse" id="navbar-main">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="nav-header">Nav header</li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul></li>
			</ul>
			<form class="navbar-form navbar-nav navbar-right" method="post"
				action="./index.php">
				<input type="text" name="mail" placeholder="Email" class="span2">
				<input type="password" name="pass" placeholder="Password"
					class="span2">
				<button type="submit" name="loginbtn" class="btn">Sign in</button>
			</form>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>
</div><?php }} ?>