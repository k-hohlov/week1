<?php

function task1(array $strings, bool $return = true)
{
    $result = '';
    foreach ($strings as $str) {
        $result .= "<p>$str</p>";

    }

    if ($return) {
        return $result;
    }

    echo $result;
}

function task2(string $action, ...$args)
{
    foreach ($args as $n => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $n . ' is not integer or float');
            return 'ERROR: wrong argment';
        }
    }
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $n => $arg) {
                if ($arg == 0) {
                    trigger_error('Деление на ноль');
                    return 'Деление на ноль';
                }
                $result = $result / $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }

            return $result;

        default:
            trigger_error("Неизвестное действие");
            return 'Неизвестное действие';
    }
}

function task3($rows, $cols)
{
    if (!is_int($rows)) {
        trigger_error('Значение 1 не является числом');
        return false;
    }
    if (!is_int($cols)) {
        trigger_error('Значение 2 не является числом');
        return false;
    }

    echo "<table border='1'>";
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cols; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
            }
        }
        echo "</tr>";
    echo "</table>";

}


function my_file_get_contents(string $filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp) {
        return false;
    }

    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }

    echo $str;
}