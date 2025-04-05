<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title><?= esc($title ?? 'Sistema de pedidos') ?></title>
</head>

<body class="columns m-3 is-mobile">
    <header class="column is-2">
        <aside class="menu">

            <figure class="image is-64x64">
                <img src="https://bulma.io/assets/images/placeholders/128x128.png" />
            </figure>

            <p class="menu-label">General</p>
            <ul class="menu-list">
                <li>
                    <a <?= $section === 'Inicio' ? 'class = "is-active"' : '' ?> href="/">Inicio</a>
                </li>
            </ul>
            <p class="menu-label">Administraci&oacute;n</p>
            <ul class="menu-list">
                <li>
                    <a <?= $section === 'Clientes' ? 'class = "is-active"' : '' ?> href="/customers">Clientes</a>
                </li>
            </ul>
            <p class="menu-label">Transactions</p>
            <ul class="menu-list">
                <li><a>Payments</a></li>
                <li><a>Transfers</a></li>
                <li><a>Balance</a></li>
            </ul>
        </aside>
    </header>

    <main class="column is-10">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <hr>
        <?= $this->renderSection('content') ?>
        <footer class="text-center text-lg-start bg-light text-muted">
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="#">Sistema de pedidos</a>
        </div>
    </footer>
    </main>
</body>

</html>