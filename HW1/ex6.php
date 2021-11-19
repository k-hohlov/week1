<?php

$rows = 10;
$cols = 10;

echo "<table border='1'>";
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $cols; $j++) {
        if (($i % 2 == false) && ($j % 2 == false)) {
            echo "<td>(" . ($i * $j) . ")</td>";
        } elseif (($i % 2 == true) && ($j % 2 == true)) {
            echo "<td>[" . ($i * $j) . "]</td>";
        } else {
            echo "<td>" . ($i * $j) . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
