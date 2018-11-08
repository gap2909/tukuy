<h1>{$titulo}</h1>

<p>Hola {$usuario}</p>
<p>{$_error}</p>
    <form class="editar" action="{$_pPlant.url}usuarios/perfil/editar" method="post">
        
        <input id="enviar" name="enviar" type="hidden" value="1">
        
        <table class="table table-bordered table-striped">
            <tr>
                <td><label>Nombres:</label></td>
                <td><input id="nombres" name="nombres" type="text" value="{$datos.nombres}"></td>
            </tr>
            <tr>
                <td><label>Apellidos:</label></td>
                <td><input id="apellidos" name="apellidos" type="text" value="{$datos.apellidos}"></td>
            </tr>
            <tr>
                <td><label>Fecha Nacimiento:</label></td>
                <td><input id="f_nacimiento" name="f_nacimiento" type="date" value="{$datos.f_nacimiento}"></td>
            </tr>
            <tr>
                <td><label>G&eacute;nero:</label></td>
                <td>
                    {if $datos.genero == 1}
                        Masculino: <input class="radio radio-inline" name="genero" type="radio" value="1" checked>
                        Femenino: <input class="radio radio-inline" name="genero" type="radio" value="2">
                    {else}
                        Masculino: <input class="radio radio-inline" name="genero" type="radio" value="1">
                        Femenino: <input class="radio radio-inline" name="genero" type="radio" value="2" checked>
                    {/if}
                </td>
            </tr>
            <tr>
                <td><label>Correo:</label></td>
                <td><input id="email" name="email" type="email" value="{$datos.email}"></td>
            </tr>
            <tr>
                <td><label>Confirma Clave actual:</label></td>
                <td><input id="clave" name="clave" type="password"></td>
            </tr>
        </table>
            <button class="btn btn-primary" type="submit">Actualizar</button>
</form>

