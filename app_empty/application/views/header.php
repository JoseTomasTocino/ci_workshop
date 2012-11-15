<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Gestión de talleres</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0 20px;
      }

      img { float: left; margin-right: 20px; width: 300px; }
      .taller { padding-bottom: 10px; margin-bottom: 10px; border-bottom: 1px solid #eee; }
      textarea { height: 140px; }
      input, textarea, span.uneditable-input { width: 98%; }
    </style>
  </head>
  <body>
    <div class="container-narrow">
      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li><a href="<?php echo site_url(''); ?>">Inicio</a></li>
          <li><a href="<?php echo site_url('admin/index'); ?>">Administrar talleres</a></li>
          <li><a href="<?php echo site_url('admin/nuevo_taller'); ?>">Añadir taller</a></li>
        </ul>
        <h3 class="muted">Gestión de talleres</h3>
      </div> <!-- .masthead -->

      <hr>

<?php

if (!isset($alert_msg))
  $alert_msg = $this->session->flashdata('alert_msg');

if (!isset($alert_type))
$alert_type = $this->session->flashdata('alert_type');

if ($alert_msg && $alert_type)
{
  echo "<div class='alert {$alert_type}'>{$alert_msg}</div>";
}

?>
