<?php /* Smarty version Smarty-3.1.16, created on 2018-06-15 19:31:12
         compiled from "C:\wamp64\www\gap\app\modulos\usuarios\vistas\login\cerrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92245b241400cae4e6-55134424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5e3b4816ea28c72fa7c20cb1a8af1d634234e2a' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\usuarios\\vistas\\login\\cerrar.tpl',
      1 => 1529077555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92245b241400cae4e6-55134424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    '_pPlant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b2414010fbc54_50083690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2414010fbc54_50083690')) {function content_5b2414010fbc54_50083690($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<p>Gracias por preferirnos. Esperamos que regrese nuevamente.</p>

<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
">Inicio</a> | 
<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/login">Iniciar Sesi&oacute;n</a><?php }} ?>
