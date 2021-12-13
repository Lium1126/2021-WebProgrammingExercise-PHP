<?php
/* Smarty version 3.1.33, created on 2021-10-28 02:25:18
  from '/Applications/MAMP/htdocs/04/bbs/templates/bbs.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_617a0a0eaa4848_33878333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a2f06e793974d816c4eb2a59f86d296723a6b6' => 
    array (
      0 => '/Applications/MAMP/htdocs/04/bbs/templates/bbs.html',
      1 => 1635387915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617a0a0eaa4848_33878333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/04/bbs/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>サクッと掲示板</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<h1>サクッと掲示板</h1>

		<?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
	<ul class="error-message">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error_message']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
		<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<?php }?>

	<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
		<table>
			<tr>
				<th>投稿者名</th>
				<td><input type="text" name="name" size="30"></td>
			</tr>
			<tr>
				<th>タイトル</th>
				<td><input type="text" name="title" size="50"></td>
			</tr>
			<tr colspan="2">
				<td colspan="2"><textarea name="body" cols="50" rows="5"></textarea></td>
			</tr>
		</table>
		<input name="save" type="submit" value="投稿する">
	</form>

	<hr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bbs_list']->value, 'bbs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bbs']->value) {
?>
	<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bbs']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
	<p><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['bbs']->value['date'],"%Y年%m月%e日 %H:%M:%S"), ENT_QUOTES, 'UTF-8', true);?>
 / 投稿者：<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bbs']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong></p>
	<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['bbs']->value['body'], ENT_QUOTES, 'UTF-8', true));?>
</p>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>

</html><?php }
}
