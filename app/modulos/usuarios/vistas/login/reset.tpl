<link rel="stylesheet" type="text/css" href="{$_pPlant.url}app/modulos/usuarios/vistas/css/login.css">

<div class="container well" id="formularioLogin">
    <div class="row">
        <div class="col-xs-12">
            <img src="{$_pPlant.url}app/modulos/usuarios/vistas/img/unlocked.png" class="img-responsive" id="avatar" >
        </div>
    </div>
    
    <div><h1 class="text-center text-primary">{$titulo}</h1></div>
    
    <p>{$_error}</p>
    <form class="reset" action="" method="post">
        
        <input id="enviar" name="enviar" type="hidden" value="1">
        
        <div class="form-group">
            <label for="usuario" class="sr-only">Correo:</label>
            <input class="form-control" id="correo" name="correo" type="text" value="{$datos.correo}" placeholder="Correo Electr&oacute;nico" autofocus="true">
        </div>
        
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Resetar Clave</button>
        </div>
    </form>
</div>