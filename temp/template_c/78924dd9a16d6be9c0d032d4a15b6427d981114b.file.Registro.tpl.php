<?php /* Smarty version Smarty-3.1.16, created on 2018-06-13 00:13:11
         compiled from "C:\wamp64\www\gap\app\modulos\usuarios\vistas\registro\Registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307635b2061979e4f57-09325691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78924dd9a16d6be9c0d032d4a15b6427d981114b' => 
    array (
      0 => 'C:\\wamp64\\www\\gap\\app\\modulos\\usuarios\\vistas\\registro\\Registro.tpl',
      1 => 1521494096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307635b2061979e4f57-09325691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_pPlant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b2061980d9708_24718307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2061980d9708_24718307')) {function content_5b2061980d9708_24718307($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/css/login.css">

<div class="container well" id="formularioRegistro">
    <div class="row">
        <div class="col-xs-12">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
app/modulos/usuarios/vistas/img/User_Files_Icon_96.png" class="img-responsive" id="avatarRegistro" >
        </div>
        
    </div>
        <div><h1 class="text-center text-primary">Registro de Usuario</h1></div>
    <form class="registro" action="" method="post">
        <div class="form-group">
            <label class="sr-only" for="usuario">Usuario:</label>
            <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" required="true" autofocus="true">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="nombres">Nombres:</label>
            <input class="form-control" id="nombres" name="nombres" type="text" placeholder="Nombres" required="true">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="apellidos">Apellidos:</label>
            <input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="Apellidos" required="true">
        </div>
        
        
        <div class="form-group">
            <label for="nacimiento">Fecha Nacimiento:</label>
            <input class="form-control" id="nacimiento" name="nacimiento" type="date" placeholder="Fecha Nacimiento" required="true">
        </div>
        
        <div class="form-group">
            <label>G&eacute;nero: </label>
            <label for="hombre" class="radio-inline">
                <input class="radio" id="hombre" name="genero" type="radio">Hombre
            </label>
            <label for="mujer" class="radio-inline">
                <input class="radio" id="mujer" name="genero" type="radio">Mujer
            </label>
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="email">Correo-E:</label>
            <input class="form-control" id="email" name="email" type="email" placeholder="Correo Electr&oacute;nico" required="true">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="email2">Confirmar Correo-E:</label>
            <input class="form-control" id="email2" name="email2" type="email" placeholder="Confirmar Correo" required="true">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="clave">Clave:</label>
            <input class="form-control" id="clave" name="clave" type="password" placeholder="Clave" required="true" >
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="clave2">Confirmar Clave:</label>
            <input class="form-control" id="clave2" name="clave2" type="password" placeholder="Confirmar Clave" required="true" >
        </div>
        
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
        </div>
        
        <p class="help-block">
            ¿Ya estas registrado? <a class="btn btn-sm btn-success" href="<?php echo $_smarty_tpl->tpl_vars['_pPlant']->value['url'];?>
usuarios/login">Acceder</a>
        </p>
    </form>
</div><?php }} ?>
