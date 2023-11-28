<div class="container">
    <div class="row">
        <div class="col-8 mx-auto p-2">

            <form action="<?= base_url('propiedad/update') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="<?= $propiedad['id'] ?>">

                <div class="mb-3">
                    <label for="title_property" class="form-label">Título de la Propiedad</label>
                    <input type="text" class="form-control" name="title_property" id="title_property" value="<?= $propiedad['title_property'] ?>">
                </div>

                <div class="mb-3">
                    <label for="state" class="form-label">Estado</label>
                    <input type="text" class="form-control" name="state" id="state" value="<?= $propiedad['state'] ?>">
                </div>

                <div class="mb-3">
                    <label for="municipality" class="form-label">Municipio</label>
                    <input type="text" class="form-control" name="municipality" id="municipality" value="<?= $propiedad['municipality'] ?>">
                </div>

                <div class="mb-3">
                    <label for="town" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="town" id="town" value="<?= $propiedad['town'] ?>">
                </div>

                <div class="mb-3">
                    <label for="kind_property" class="form-label">Tipo de Propiedad</label>
                    <input type="text" class="form-control" name="kind_property" id="kind_property" value="<?= $propiedad['kind_property'] ?>">
                </div>

                <div class="mb-3">
                    <label for="measures" class="form-label">Medidas</label>
                    <input type="text" class="form-control" name="measures" id="measures" value="<?= $propiedad['measures'] ?>">
                </div>

                <div class="mb-3">
                    <label for="cost" class="form-label">Costo</label>
                    <input type="text" class="form-control" name="cost" id="cost" value="<?= $propiedad['cost'] ?>">
                </div>

                <div class="mb-3">
                    <label for="name_property" class="form-label">Dueño</label>
                    <input type="text" class="form-control" name="name_property" id="name_property" value="<?= $propiedad['name_property'] ?>">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="phone" id="phone" value="<?= $propiedad['phone'] ?>">
                </div>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
</div>
