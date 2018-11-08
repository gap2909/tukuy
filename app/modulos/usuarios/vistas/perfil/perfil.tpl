<h1>{$titulo}</h1>

<p>Hola {$usuario}</p>

<p>{$_mensaje}</p>
<table class="table table-bordered table-striped">
    <tr>
        <th>Usuario:</th>
        <td>{$datos.usuario}</td>
    </tr>
    <tr>
        <th>Nombres:</th>
        <td>{$datos.nombres}</td>
    </tr>
    <tr>
        <th>Apellidos:</th>
        <td>{$datos.apellidos}</td>
    </tr>
    <tr>
        <th>Fecha Nacimiento:</th>
        <td>{$datos.f_nacimiento}</td>
    </tr>
    <tr>
        <th>G&eacute;nero:</th>
        <td>
            {if $datos.genero == 1}
                Masculino
            {else}
                Femenino
            {/if}
        </td>
    </tr>
    <tr>
        <th>Correo:</th>
        <td>{$datos.email}</td>
    </tr>
    <tr>
        <th>Fecha de Registro:</th>
        <td>{$datos.creado}</td>
    </tr>
</table>
    <a class="btn btn-primary" href="{$_pPlant.url}usuarios/perfil/editar/{$datos.id}">Editar</a>
