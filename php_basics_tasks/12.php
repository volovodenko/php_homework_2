<?php
/**
 * С помощью конструкции switch выведите фразу: "Неизвестный день",
 * если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).
 */
$day = 10;
switch ($day) {
    case ( $day>=1 && $day<=5 ):
        echo "Это рабочий день";
        break;
    case ( $day>=6 && $day<=7 ):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}