<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>
    <form action="/customers/update" method="post">
        <div>
            <label for="name">Nombres:</label>
            <input type="text" id="name" name="names" required>
        </div>
        <div>
            <label for="lastNames">Apellidos:</label>
            <input type="text" id="lastNames" name="lastNames" required>
        </div>
        <div>
            <label for="address">Direcci&oacute;n:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div>
            <label for="locate">Locati&oacute;n:</label>
            <input type="text" id="locate" name="locate"></input>
        </div>
        <div>
            <label for="createdBy">Creado por:</label>
            <input type="text" id="createdBy" name="createdBy"></input>
        </div>
        <div>
            <button type="submit">Actualizar datos</button>
        </div>
    </form>
<?= $this->endSection() ?>