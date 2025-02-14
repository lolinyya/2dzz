<?php
function daysvmonth($month) {
    if ($month == 2) {   //февраль
        return 28;
    } elseif (in_array($month, [4, 6, 9, 11])) { //апрель июнь сентябрь ноябрь
        return 30;
    } else {                             //остальные 
        return 31;
    }
}

// вводим данные
$month = (int)readline("Введите номер месяца с 1 по 12: ");

// тут проверка и вывод результата 
if ($month >= 1 && $month <= 12) {
    echo "В месяце " . daysvmonth($month) . " дней.\n";
} else {
    echo "Такого месяца нет-_-.\n";
}
?>