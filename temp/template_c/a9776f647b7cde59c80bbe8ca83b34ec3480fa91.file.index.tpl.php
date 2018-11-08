<?php /* Smarty version Smarty-3.1.16, created on 2018-11-08 16:39:01
         compiled from "C:\wamp\www\web\app\vistas\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18903172905be466a51131c9-23535101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9776f647b7cde59c80bbe8ca83b34ec3480fa91' => 
    array (
      0 => 'C:\\wamp\\www\\web\\app\\vistas\\index\\index.tpl',
      1 => 1529114383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18903172905be466a51131c9-23535101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'nombre_usuario' => 0,
    'mensaje' => 0,
    'boton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5be466a518cfc4_97552895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be466a518cfc4_97552895')) {function content_5be466a518cfc4_97552895($_smarty_tpl) {?><div class="container-fluid jumbotron">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
    <a class="btn btn-primary" href="#"><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</a>
</div><?php }} ?>
