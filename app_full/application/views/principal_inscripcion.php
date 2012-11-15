<h4>Nueva inscripción</h4>
<?php echo form_open_multipart(); ?>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>">

    <label for="email">E-Mail:</label>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>">

    <label>Taller elegido:</label>
    <span class="uneditable-input"><?php echo $taller->titulo; ?></span>
    <input type="hidden" name="id_taller" value="<?php echo set_value('id_taller', $taller->id); ?>">

    <div class="form-actions">
        <button type="submit" class="btn">Enviar</button>
    </div>
</form>