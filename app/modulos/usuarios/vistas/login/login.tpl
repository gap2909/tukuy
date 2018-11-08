<link rel="stylesheet" type="text/css" href="{$_pPlant.url}app/modulos/usuarios/vistas/css/login.css">

<div class="container well" id="formularioLogin">
    <div class="row">
        <div class="col-xs-12">
            <img src="{$_pPlant.url}app/modulos/usuarios/vistas/img/profle.png" class="img-responsive" id="avatar" >
        </div>
    </div>
    <div><h1 class="text-center text-primary">{$titulo}</h1></div>
    
    <p>{$_error}</p>
    <form class="login" action="" method="post">
        
        <input id="enviar" name="enviar" type="hidden" value="1">
        
        <div class="form-group">
            <label for="usuario" class="sr-only">Usuario:</label>
            <input class="form-control" id="usuario" name="usuario" type="text" value="{$datos.usuario}" placeholder="Usuario" autofocus="true">
        </div>
        
        <div class="form-group">
            <label for="clave" class="sr-only">Clave:</label>
            <input class="form-control" id="clave" name="clave" type="password" placeholder="Clave">
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
            ¿No puedes acceder? <a class="btn btn-sm btn-info" href="{$_pPlant.url}usuarios/login/reset">Recuperar Clave</a>
        </p>
        <p class="help-block">
            ¿No te has registrado? <a class="btn btn-sm btn-success" href="{$_pPlant.url}usuarios/registro">Registrarme</a>
        </p>
    </form>
</div>