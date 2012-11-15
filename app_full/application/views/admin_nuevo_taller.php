<h4>Añadir taller</h4>
<?php echo form_open_multipart(); ?>

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" value="<?php echo set_value('titulo'); ?>">

    <label for="descripcion">Descripción:</label>
    <textarea type="text" maxlength="200" name="descripcion"><?php echo set_value('descripcion'); ?></textarea>

    <label for="numero_plazas">Número de plazas:</label>
    <input type="text" name="numero_plazas" value="<?php echo set_value('numero_plazas'); ?>">

    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen">

    <div class="form-actions">
        <button type="submit" class="btn">Enviar</button>
    </div>
</form>