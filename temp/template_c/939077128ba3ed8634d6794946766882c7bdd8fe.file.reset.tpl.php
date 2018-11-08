<?php /* Smarty version Smarty-3.1.16, created on 2018-06-21 01:34:25
         compiled from "C:\wamp64\www\gap\app\modulos\usuarios\vistas\login\reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81275b2aec27e2bc67-84616025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '939077128ba3ed8634d6794946766882c7bdd8fe' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\usuarios\\vistas\\login\\reset.tpl',
      1 => 1529544859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81275b2aec27e2bc67-84616025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b2aec28181483_85698528',
  'variables' => 
  array (
    '_pPlant' => 0,
    'titulo' => 0,
    '_error' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2aec28181483_85698528')) {function content_5b2aec28181483_85698528($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/css/login.css">

<div class="container well" id="formularioLogin">
    <div class="row">
        <div class="col-xs-12">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/img/unlocked.png" class="img-responsive" id="avatar" >
        </div>
    </div>
    
    <div><h1 class="text-center text-primary"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1></div>
    
    <p><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
    <form class="reset" action="" method="post">
        
        <input id="enviar" name="enviar" type="hidden" value="1">
        
        <div class="form-group">
            <label for="usuario" class="sr-only">Correo:</label>
            <input class="form-control" id="correo" name="correo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['correo'];?>
" placeholder="Correo Electr&oacute;nico" autofocus="true">
        </div>
        
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Resetar Clave</button>
        </div>
    </form>
</div><?php }} ?>
