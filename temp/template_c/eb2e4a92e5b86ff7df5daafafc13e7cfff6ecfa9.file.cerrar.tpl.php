<?php /* Smarty version Smarty-3.1.16, created on 2018-06-15 15:56:06
         compiled from "C:\wamp64\www\gap\app\modulos\usuarios\vistas\cerrar\cerrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102125b23e196cb5ef0-28314269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb2e4a92e5b86ff7df5daafafc13e7cfff6ecfa9' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\usuarios\\vistas\\cerrar\\cerrar.tpl',
      1 => 1529077555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102125b23e196cb5ef0-28314269',
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
  'unifunc' => 'content_5b23e197247a65_10858564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b23e197247a65_10858564')) {function content_5b23e197247a65_10858564($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<p>Gracias por preferirnos. Esperamos que regrese nuevamente.</p>

<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
">Inicio</a> | 
<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/login">Iniciar Sesi&oacute;n</a><?php }} ?>
