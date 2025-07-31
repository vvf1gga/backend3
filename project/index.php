<?php

$page = $_GET['page'] ?? 'index';

$pageFile = __DIR__ . '/pages/' . basename($page) . '.php';

if (file_exists($pageFile)) {
    require $pageFile;
}

else {
    $pageTitle = 'Сторінку не знайдено';
    ob_start();
    echo "<h1>404</h1><p>Сторінку <strong>" . htmlspecialchars($page) . "</strong> не знайдено.</p>";
    $pageContent = ob_get_clean();
}

require __DIR__ . '/tpl/layout.php';
