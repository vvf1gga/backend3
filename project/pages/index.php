<?php
$pageTitle = 'Головна';

require_once __DIR__ . '/../modules/background.php';

ob_start();

?>

<div class="index-page">
    <h1>Головна</h1>
    <p>Лабораторна робота 1</p>
</div>

<div class="index-page">
    <form method="POST">
        <label>
            Виберіть колір фону:
            <input type="color" name="bg_color" value="<?= htmlspecialchars($_SESSION['bg_color'] ?? '#f9f9f9') ?>">
        </label>

        <div class="button">
            <button type="submit">Застосувати</button>
        </div>
    </form>
</div>

<?php
$pageContent = ob_get_clean();
