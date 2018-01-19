<?php
/*
 * Файл загрузки заданий
 */

$Data = file_get_contents("15.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание №15</title>
    <link rel="stylesheet" href="/style/style.css">

</head>
<body>
<header>
    <h2>Задание №15</h2>
    <a href="/">&lt;&lt; На главную</a>
    <section class="code_calc">
        <?php
            echo highlight_string($Data, true);
        ?>
    </section>
</header>

<main>
    <p><b>Калькулятор на одну операцию</b></p>
    <section class="code">
        <form method="POST">
            <label for="a">Число а =</label>
            <input type="text" name="a" id="a" required placeholder="Введите число">
            <br>
            <label for="b">Число b =</label>
            <input type="text" name="b" id="b" required placeholder="Введите число">
            <br>
            <fieldset class="operator">
                <legend>
                    Выберите оператор
                </legend>
                <input type="radio" name="operator" value="+" checked>+
                <br>
                <input type="radio" name="operator" value="-">-
                <br>
                <input type="radio" name="operator" value="*">*
                <br>
                <input type="radio" name="operator" value="/">/
                <br>
                <input type="radio" name="operator" value="%">%
            </fieldset>
            <br>
            <button type="submit">Вычислить</button>
        </form>
    </section>

    <p><b>Результат</b></p>
    <section class="code">
        <?php include "15.php" ?>
    </section>
</main>
</body>
</html>


