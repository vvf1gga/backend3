<?php
$pageTitle = 'Головна';

ob_start();
?>
<div class="index-page">
    <h1>Головна</h1>
    <p>Лабораторна робота 1</p>
</div>
<?php
$pageContent = ob_get_clean();
