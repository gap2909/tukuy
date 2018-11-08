<link rel="stylesheet" type="text/css" href="{$_pPlant.url}app/modulos/usuarios/vistas/css/login.css">

<div class="container well" id="formularioRegistro">
    <div class="row">
        <div class="col-xs-12">
            <img src="{$_pPlant.url}app/modulos/usuarios/vistas/img/compose.png" class="img-resFiles_Icon_96ponsive" id="avatarRegistro" >
        </div>
        
    </div>
        <div><h1 class="text-center text-primary">{$titulo}</h1></div>
    
    <p>{$_error}</p>
    <form class="registro" action="" method="post">
        
        <input id="enviar" name="enviar" type="hidden" value="1">
        <div class="form-group">
            <label class="sr-only" for="usuario">Usuario:</label>
            <input class="form-control" id="usuario" name="usuario" type="text" value="{$datos.usuario}" placeholder="Usuario" autofocus="true">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="nombres">Nombres:</label>
            <input class="form-control" id="nombres" name="nombres" type="text" value="{$datos.nombres}"  placeholder="Nombres">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="apellidos">Apellidos:</label>
            <input class="form-control" id="apellidos" name="apellidos" type="text" value="{$datos.apellidos}" placeholder="Apellidos">
        </div>
        
        <div class="form-group">
            <label for="nacimiento">Fecha Nacimiento:</label>
            <input class="form-control" id="nacimiento" name="nacimiento" type="date" value="{$datos.nacimiento}" placeholder="Fecha Nacimiento">
        </div>
        
        <div class="form-group">
            <label>G&eacute;nero: </label><br>
            <label for="genero">Hombre: </label>
                <input class="radio radio-inline" name="genero" type="radio" value="1">
            <label for="genero"> | Mujer: </label>
                <input class="radio radio-inline" name="genero" type="radio" value="2">
            
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="email">Correo-E:</label>
            <input class="form-control" id="email" name="email" type="email" value="{$datos.email}" placeholder="Correo Electr&oacute;nico">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="email2">Confirmar Correo-E:</label>
            <input class="form-control" id="email2" name="email2" type="email" value="{$datos.email2}" placeholder="Confirmar Correo">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="clave">Clave:</label>
            <input class="form-control" id="clave" name="clave" type="password" value="{$datos.clave}" placeholder="Clave">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="clave2">Confirmar Clave:</label>
            <input class="form-control" id="clave2" name="clave2" type="password" value="{$datos.clave2}" placeholder="Confirmar Clave">
        </div>
        
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
        </div>
        
        <p class="help-block">
            ¿Ya estas registrado? <a class="btn btn-sm btn-success" href="{$_pPlant.url}usuarios/login">Acceder</a>
        </p>
    </form>
</div>