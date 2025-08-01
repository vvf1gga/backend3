<?php
$errors = [];
$values = [
    'lastname' => '',
    'firstname' => '',
    'patronymic' => '',
    'hobbies' => []
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values['lastname'] = trim($_POST['lastname'] ?? '');
    $values['firstname'] = trim($_POST['firstname'] ?? '');
    $values['patronymic'] = trim($_POST['patronymic'] ?? '');
    $values['hobbies'] = $_POST['hobbies'] ?? [];

    if ($values['lastname'] === '') {
        $errors[] = 'Прізвище обов’язкове.';
    }
    if ($values['firstname'] === '') {
        $errors[] = 'Ім’я обов’язкове.';
    }
    if ($values['patronymic'] === '') {
        $errors[] = 'По-батькові обов’язкове.';
    }
    if (count($values['hobbies']) > 3) {
        $errors[] = 'Не можна вибирати більше трьох уподобань.';
    }

    if (empty($errors)) {
        $_SESSION['form_data'] = $values;
        header('Location: ?page=about');
        exit;
    }
}
