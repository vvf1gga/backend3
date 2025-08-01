<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bg_color'])) {
    $_SESSION['bg_color'] = $_POST['bg_color'];
}