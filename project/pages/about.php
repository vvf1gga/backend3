<?php
$pageTitle = 'О нас';

ob_start();
?>
<div class="about-page">
    <h1>Отримані параметри</h1>

    <h2>GET:</h2>
    <ul class="about-list">
        <?php foreach ($_GET as $key => $value): ?>
            <li><strong><?= htmlspecialchars($key) ?>:</strong> <?= is_array($value) ? implode(', ', array_map('htmlspecialchars', $value)) : htmlspecialchars($value) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>POST:</h2>
    <ul class="about-list">
        <?php foreach ($_POST as $key => $value): ?>
            <li><strong><?= htmlspecialchars($key) ?>:</strong> <?= is_array($value) ? implode(', ', array_map('htmlspecialchars', $value)) : htmlspecialchars($value) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>SERVER:</h2>
    <ul class="about-list">
        <?php foreach ($_SERVER as $key => $value): ?>
            <li><strong><?= htmlspecialchars($key) ?>:</strong> <?= htmlspecialchars((string)$value) ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php
$pageContent = ob_get_clean();
