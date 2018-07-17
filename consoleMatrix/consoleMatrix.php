<?php
/**
 * Created by PhpStorm.
 * User: Rizzly1
 * Date: 04.06.2018
 * Time: 15:12
 */
if ($argc == 2) { //argc - количество переданных аргументов если 2, то передан 1 т.к еще 1 имя файла скрипта
    if (!is_numeric($argv[1])) {// is_numeric - проверка на число
        die("Передано не число!");//die(exit) выводит сообщение и прекращает выполнение текущего скрипта
    }
    $inp = (int)$argv[1];
    Main($inp);
} else {
    die("Неверное количество аргументов: " . $argc . " (включая имя файла скрипта).");
}
function Main($inpLen)
{
    $len = $inpLen - 1;
    for ($i = 0; $i <= $len; $i++) {
        echo "#";
        for ($j = 1; $j <= $len - 1; $j++) {
            if ((($i == 0) || ($i == $len) || ($j == $i)) || ($j + $i == $len)) {
                echo "#";
            } else {
                echo "_";
            }
        }
        echo "#";
        echo "\n";
    }
}

?>
