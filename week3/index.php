<?php

$name = "David";
$color = ["red", "blue", "green"];
$persom = [
    "name" => "David",
    "title" => "Student"
];

if (isset($name)) {
    echo "Hello, {$name}";
}
else {
    echo "Hello, friend";
}

echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo "{$i}, ";
    echo "<br>";
    for ($j = 0; $j < 10; $j++) {
        echo "-";
    }
}
    

foreach ($colors as $color) {
    echo "{$color},";
}

echo "<br>";

foreach ($person as $key => $value) {
    echo "{$key}: {$value} <br>"
}