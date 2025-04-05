<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>
<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-<?= esc(session()->getFlashdata('type')) ?>">
        <?= esc(session()->getFlashdata('message')) ?>
    </div>
<?php endif; ?>

<section>
    <section class="is-flex is-justify-content-space-between is-align-items-center mb-4">
        <div class="block content">
            <h2>Clientes</h2>
            <p>Lista de clientes registrados en el sistema</p>
        </div>
        <div class="block">
            <a href="/customers/create" class="button is-primary">Agregar Cliente</a>
        </div>
    </section>

    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>Direcci&oacute;n</th>
                <th>Ubicaci&oacute;n</th>
                <th>Creado por</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $customer->CUSTOMER_ID ?></td>
                    <td><?= $customer->CUSTOMER_NAMES ?></td>
                    <td><?= $customer->CUSTOMER_LAST_NAMES ?></td>
                    <td><?= $customer->CUSTOMER_ADDRESS ?></td>
                    <td><?= $customer->CUSTOMER_LOCATE ?></td>
                    <td><?= $customer->USER_NAME ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?= $this->endSection() ?>