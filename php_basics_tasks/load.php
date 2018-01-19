<?php
/*
 * Файл загрузки заданий
 */
$taskNumber = $_GET['task'];
$fileName = $taskNumber.".php";
$Data = file_get_contents("$fileName");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №<?=$taskNumber?></title>
</head>
<body>
    <h2>Задание №<?=$taskNumber?></h2>
    <div style="background-color: lightgray;">
    <?php
        echo highlight_string($Data, true);
    ?>
    </div>
    <br>
    <br>
    <p><b>Результат выполнения</b></p>
    <div style="background-color: lightblue;">
    <?php include "$fileName"; ?>
    </div>
</body>
</html>

