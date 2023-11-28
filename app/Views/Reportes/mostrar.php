
<form method="post" action="<?php echo base_url('reporte/mostrar'); ?>">
    <label for="tipo">Tipo de Propiedad:</label>
    <select name="tipo">
        <option value="casa">Casa</option>
        <option value="departamento">Departamento</option>
        <option value="terreno">Terreno</option>
    </select>

    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="date" name="fecha_inicio" required>

    <label for="fecha_fin">Fecha de Fin:</label>
    <input type="date" name="fecha_fin" required>

    <button type="submit">Generar Informe</button>
</form>

<?php if ($propiedades): ?>
    <ul>
        <?php foreach ($propiedades as $propiedad): ?>
            <li><?php echo $propiedad->nombre; ?> - <?php echo $propiedad->fecha_registro; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No se encontraron propiedades que coincidan con los criterios seleccionados.</p>
<?php endif; ?>