<?php /* Smarty version Smarty-3.1.16, created on 2018-03-20 03:38:43
         compiled from "C:\wamp64\www\gap\\app\vistas\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143125aac43a53d0902-76213639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86b76e092257fdf7c0a3690ee4373743b2067dda' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\\\app\\vistas\\index\\index.tpl',
      1 => 1521517119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143125aac43a53d0902-76213639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aac43a5402276_44925536',
  'variables' => 
  array (
    'titulo' => 0,
    'mensaje' => 0,
    'boton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aac43a5402276_44925536')) {function content_5aac43a5402276_44925536($_smarty_tpl) {?><div class="container-fluid jumbotron">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
    <a class="btn btn-primary" href="#"><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</a>
</div><?php }} ?>
