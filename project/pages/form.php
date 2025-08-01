<?php
$pageTitle = 'Форма';

require_once __DIR__ . '/../modules/form.php';

ob_start();
?>

<div class="form-page">
    <h1>Форма реєстрації</h1>

    <?php if (!empty($errors)): ?>
        <ul class="form-errors">
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="?page=form" method="POST">
        <div class="labels">
            <label>
                Прізвище:
                <input type="text" name="lastname" value="<?= htmlspecialchars($values['lastname']) ?>">
            </label>

            <label>
                Ім'я:
                <input type="text" name="firstname" value="<?= htmlspecialchars($values['firstname']) ?>">
            </label>

            <label>
                По-батькові:
                <input type="text" name="patronymic" value="<?= htmlspecialchars($values['patronymic']) ?>">
            </label>
        </div>

        <div class="hobby-group">
            <legend>Уподобання:</legend>
            <?php
            $hobbyOptions = ['Навчання', 'Спорт', 'Читання', 'Музика', 'Танці'];
            foreach ($hobbyOptions as $option):
            ?>
                <label>
                    <input type="checkbox" name="hobbies[]" value="<?= $option ?>"
                        <?= in_array($option, $values['hobbies']) ? 'checked' : '' ?>>
                    <?= $option ?>
                </label>
            <?php endforeach; ?>
        </div>

        <div class="button">
            <button type="submit">Відправити</button>
        </div>
    </form>
</div>

<?php
$pageContent = ob_get_clean();