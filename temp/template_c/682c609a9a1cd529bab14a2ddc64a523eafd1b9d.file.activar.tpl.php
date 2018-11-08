<?php /* Smarty version Smarty-3.1.16, created on 2018-06-24 21:19:35
         compiled from "C:\wamp64\www\gap\app\modulos\usuarios\vistas\registro\activar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283355b300ae758ee17-97819033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682c609a9a1cd529bab14a2ddc64a523eafd1b9d' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\usuarios\\vistas\\registro\\activar.tpl',
      1 => 1529874692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283355b300ae758ee17-97819033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    '_mensaje' => 0,
    '_error' => 0,
    '_pPlant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b300ae78a8561_55627756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b300ae78a8561_55627756')) {function content_5b300ae78a8561_55627756($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<p><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
">Ir al Inicio</a>
<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/login">Iniciar Sesi&oacute;n</a><?php }} ?>
