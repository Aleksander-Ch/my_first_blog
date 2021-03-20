<?php

// Объявляем переменную. Мы ее не можем менять но можем использовать в коде
const BOO = 'Vasia Pupkin';

// Примеры работы с строкой
$name = 'Alex';
$message = "Hello $name";

$new_message = str_replace($name, 'Kris', $message);

echo strlen($new_message) . PHP_EOL;

// Примеры работы с числами

$debit = 100;
$kredit = 200;
$something = $kredit/$debit;

echo $something;

if ($something == 2){
    echo "Выражение верно";
}else {echo "утверждение не верно " . PHP_EOL ;}

/// Работа с утверждениями
$is_Windows = true;

if ($is_Windows) {
    echo "Удали ее нафиг!!!" .  PHP_EOL;
} else {
    echo "Отлично! Так держать!";
}

echo PHP_EOL . BOO;

///sdfgsdfds


// ----------------------------------------------------------

// Массивы

// Классы
