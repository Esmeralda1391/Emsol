<div class="container">
    <div class="row">
        <div class="col-12 mx-auto p-2">

            <h2>Propiedades</h2>

            <br>

            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Ciudad</th>
                        <th>Tipo de Propiedad</th>
                        <th>Medidas</th>
                        <th>Costo</th>
                        <th>Dueño</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($propiedades as $propiedad) : ?>
                        <tr>
                            <td><?= $propiedad['id'] ?></td>
                            <td><?= $propiedad['title_property'] ?></td>
                            <td><?= $propiedad['state'] ?></td>
                            <td><?= $propiedad['municipality'] ?></td>
                            <td><?= $propiedad['town'] ?></td>
                            <td><?= $propiedad['kind_property'] ?></td>
                            <td><?= $propiedad['measures'] ?></td>
                            <td><?= $propiedad['cost'] ?></td>
                            <td><?= $propiedad['name_property'] ?></td>
                            <td><?= $propiedad['phone'] ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?= base_url('propiedad/delete/' . $propiedad['id']) ?>">Eliminar</a>
                                <a class="btn btn-danger" href="<?= base_url('propiedad/editar/' . $propiedad['id']) ?>">Editar</a>

                            </td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>