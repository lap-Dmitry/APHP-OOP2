<?php
declare(strict_types=1);

/**
 * @throws Exception
 */

function customExceptions($a): float
{
    if (is_int($a)) {
        throw new Exception('Тип переменной: число');
    }
    if (is_float($a)) {
        throw new Exception('Тип переменной: число сплавающей запятой');
    }
    if (is_string($a)) {
        throw new Exception('Тип переменной: строка');
    }
    if (is_bool($a)) {
        throw new Exception('Тип переменной: булевое значение');
    }
    if (is_array($a)) {
        throw new Exception('Тип переменной: массив');
    }
    if (is_null($a)) {
        throw new Exception('Тип переменной: null');
    }
    return $a;
}

try {
    echo customExceptions(4);
} catch (Exception $e) {
    echo 'Выброшено исключение: '. $e->getMessage(). "<br>";
} finally {
    echo 'Введите другое значение';
}