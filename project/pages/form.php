<?php
$pageTitle = 'Форма';

ob_start();
?>

<div class="form-page">
    <h1>Форма реєстрації</h1>

    <form action="?page=about" method="POST">
        <div class="labels">
            <label>
                Прізвище:
                <input type="text" name="lastname" required>
            </label>

            <label>
                Ім'я:
                <input type="text" name="firstname" required>
            </label>

            <label>
                По-батькові:
                <input type="text" name="patronymic">
            </label>
        </div>

        <div class="hobby-group">
            <legend>Уподобання:</legend>
            <label><input type="checkbox" name="hobbies[]" value="Навчання"> Навчання</label>
            <label><input type="checkbox" name="hobbies[]" value="Спорт"> Спорт</label>
            <label><input type="checkbox" name="hobbies[]" value="Читання"> Читання</label>
            <label><input type="checkbox" name="hobbies[]" value="Музика"> Музика</label>
            <label><input type="checkbox" name="hobbies[]" value="Танці"> Танці</label>
        </div>

        <div class="button">
            <button type="submit">Відправити</button>
        </div>
    </form>
</div>

<?php
$pageContent = ob_get_clean();
