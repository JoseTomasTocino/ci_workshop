<h4>Detalle del taller</h4>

<div class="taller clearfix">

<?php

echo '<img src="' . base_url() . 'uploads/' . $taller->imagen . '" class="img-polaroid">';
echo '<h5>' . $taller->titulo . '</h5>';
echo '<p>' . nl2br($taller->descripcion) . '</p>';

?>

</div>

<h4>Lista de inscritos</h4>

<ul>
<?php
if (count($taller->inscritos))
{
    foreach ($taller->inscritos as $inscrito)
    {
        echo "<li>{$inscrito->nombre} - {$inscrito->email}</li>";
    }
}
else
{
    echo "<li>No hay inscritos</li>";
}
?>
</ul>