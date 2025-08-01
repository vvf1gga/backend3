<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title><?= htmlspecialchars($pageTitle ?? 'Без назви') ?></title>
</head>

<body style="background-color: <?= htmlspecialchars($_SESSION['bg_color'] ?? '#f9f9f9') ?>">
    <header class="header">
        <nav>
            <ul>
                <li>
                    <a href="./">Головна</a>
                </li>
                <li>
                    <a href="./?page=form">Форма</a>
                </li>
                <li>
                    <a href="./?page=about">Про нас</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?= $pageContent ?? '<p>Контент не завантажено</p>' ?>
    </main>
</body>

</html>