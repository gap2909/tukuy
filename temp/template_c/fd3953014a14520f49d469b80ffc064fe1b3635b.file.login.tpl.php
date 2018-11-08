<?php /* Smarty version Smarty-3.1.16, created on 2018-03-19 21:00:35
         compiled from "C:\wamp64\www\gap\\app\modulos\usuarios\vistas\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279305aaec72a627789-70100381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3953014a14520f49d469b80ffc064fe1b3635b' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\\\app\\modulos\\usuarios\\vistas\\login\\login.tpl',
      1 => 1521493225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279305aaec72a627789-70100381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aaec72a7e1f97_45343745',
  'variables' => 
  array (
    '_pPlant' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaec72a7e1f97_45343745')) {function content_5aaec72a7e1f97_45343745($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/css/login.css">

<div class="container well" id="formularioLogin">
    <div class="row">
        <div class="col-xs-12">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/img/profle.png" class="img-responsive" id="avatar" >
        </div>
    </div>
    <div><h1 class="text-center text-primary">Acceso de Usuario</h1></div>
    <form class="login" action="" method="post">
        <div class="form-group">
            <label for="usuario" class="sr-only">Usuario:</label>
            <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" required="true" autofocus="true">
        </div>
        
        <div class="form-group">
            <label for="clave" class="sr-only">Clave:</label>
            <input class="form-control" id="clave" name="clave" type="password" placeholder="Clave" required="true" >
        </div>
        
        <div class="checkbox">
            <label class="checkbox">
                <input value="1" name="recuerdame" type="checkbox">No cerrar sesi&oacute;n
            </label>
        </div>
        
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
        </div>
        
        <p class="help-block">
            ¿No puedes acceder? <a class="btn btn-sm btn-info" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/login/resetear">Recuperar Clave</a>
        </p>
        <p class="help-block">
            ¿No te has registrado? <a class="btn btn-sm btn-success" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/registro">Registrarme</a>
        </p>
    </form>
</div><?php }} ?>
