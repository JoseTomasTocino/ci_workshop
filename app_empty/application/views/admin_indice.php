<h4>Gestionar talleres</h4>

<ul>
<?php
if(count($talleres)){
    foreach ($talleres as $taller) {
        echo "<li>{$taller->titulo} - ";
        echo "<a href='" . site_url('admin/detalle_taller/' . $taller->id) . "'>Gestionar</a> - ";
        echo "<a href='" . site_url('admin/borrar_taller/' . $taller->id) . "'>Borrar</a>";
        echo "</li>";
    }
}
else
{
    echo "<li>No hay talleres</li>";
}
?>
</ul>