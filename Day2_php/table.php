<?php

$data = ["php", "os", "DotNet", "open source"]; 

foreach($data as $key => $value) {
    echo "$value<br>";
}
echo "--------------------";

$remove =  "DotNet";
$data = array_diff($data,[$remove]);

echo "<br>";
foreach($data as $key => $value) {
    echo "$value<br>";
}
echo "--------------------";

$students = [["name"=>"Mohamed", "age"=>22],["name"=>"Mostafa", "age"=>22],["name"=>"Abdullaha", "age"=>24],["name"=>"Yousef", "age"=>25]];

// print_r(array_keys($students[0])[0]);

function table($arr){
    $keys = array_keys($arr[0]);
    echo "<table border='1'>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>$keys[0]</th>";
                echo "<th>$keys[1]</th>";
            echo "</tr>";
        echo "<tbody>";
        foreach($arr as $key => $value) {
            echo "<tr>";
                foreach($value as $key1 => $value1) {
                    echo "<td>$value1</td>";
                }
            echo "</tr>";
        }
        echo "</tbody>";
    echo "</table>";
}
table($students);