<?php /* Smarty version Smarty-3.1.16, created on 2018-10-09 12:09:09
         compiled from "C:\wamp64\www\gap\app\modulos\noticias\vistas\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27115bbbf99d0f7f47-44389898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35e03cea52a1ffe8771db1e870e9f52e742041ae' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\noticias\\vistas\\index\\index.tpl',
      1 => 1539086945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27115bbbf99d0f7f47-44389898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bbbf99d378d32_37103101',
  'variables' => 
  array (
    'mensaje' => 0,
    'it' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbbf99d378d32_37103101')) {function content_5bbbf99d378d32_37103101($_smarty_tpl) {?>
<div>
<table class="table table-hover">
	<tr>
		<th>ID</th>
		<th>TITULO</th>
		<th class="center">CUERPO</th>
		<th>PALABRAS CLAVES</th>
		<th>ID CATEGORIA</th>
		<th>AUTOR</th>
		<th>CREADOR</th>
		<th>MODIFICADO</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mensaje']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
	<tr>	
		<td><?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['it']->value['cuerpo'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['it']->value['palabras_claves'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['it']->value['id_categoria'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['it']->value['id_autor'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['it']->value['creado'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['it']->value['modificado'];?>
</td>
	</tr>
	<?php } ?>
	
</table>
</div>	
<?php }} ?>
