<h4>Lista de talleres</h4>

<?php
if ($talleres)
{
    foreach ($talleres as $taller)
    {
        $plazasOcupadas = count($taller->inscritos);
        $plazasLibres = intval($taller->numero_plazas) - $plazasOcupadas;

        echo '<div class="taller clearfix">';
        echo '<img src="' . base_url() . 'uploads/' . $taller->imagen . '" class="img-polaroid">';
        echo '<h5>' . $taller->titulo . '</h5>';
        echo '<p>' . nl2br($taller->descripcion) . '</p>';

        if ($plazasLibres > 0)
        {
            echo '<p>Plazas libres: ' . $plazasLibres . '<br><a href="' . site_url('principal/inscripcion/' . $taller->id) . '">Haz click para apuntarte</a>';
        }
        else
        {
            echo '<p><span class="alert alert-error">NO QUEDAN PLAZAS</span></p>';
        }

        echo '</div>';
    }
}
else
{
    echo "<strong>No hay talleres</strong>";
}

?>