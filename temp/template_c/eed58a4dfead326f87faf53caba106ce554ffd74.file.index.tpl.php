<?php /* Smarty version Smarty-3.1.16, created on 2018-06-16 02:00:25
         compiled from "C:\wamp64\www\gap\app\vistas\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58905b122a9cb34a77-85896391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eed58a4dfead326f87faf53caba106ce554ffd74' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\vistas\\index\\index.tpl',
      1 => 1529114383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58905b122a9cb34a77-85896391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b122a9ccdfe61_98982189',
  'variables' => 
  array (
    'titulo' => 0,
    'nombre_usuario' => 0,
    'mensaje' => 0,
    'boton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b122a9ccdfe61_98982189')) {function content_5b122a9ccdfe61_98982189($_smarty_tpl) {?><div class="container-fluid jumbotron">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
    <a class="btn btn-primary" href="#"><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</a>
</div><?php }} ?>
