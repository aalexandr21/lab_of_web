<?php
    $point_a_x = $_GET["point_a_x"];
    $point_a_y = $_GET["point_a_y"];
    $point_b_x = $_GET["point_b_x"];
    $point_b_y = $_GET["point_b_y"];
    $point_c_x = $_GET["point_c_x"];
    $point_c_y = $_GET["point_c_y"];

    function getDistanceBetweenPoints($a_x, $a_y, $b_x, $b_y){
        $a = 0;
        $a = sqrt(pow(($b_x - $a_x),2) + pow($b_y - $a_y,2));
        return $a;
    }

    function semiPerimeter($a, $b, $c){
        $p = 0;
        $p = ($a + $b + $c) * 0.5;
        return $p;
    }

    function square($p, $a, $b, $c){
        $s = 0;
        $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        return $s;
    }
    $a = getDistanceBetweenPoints($point_a_x, $point_a_y, $point_b_x, $point_b_y);
    $b = getDistanceBetweenPoints($point_b_x, $point_b_y, $point_c_x, $point_c_y);
    $c = getDistanceBetweenPoints($point_c_x, $point_c_y, $point_a_x, $point_a_y);
    echo "Відстань між точкою А та точкою В дорівнює: " . $a . "<br>";
    echo "Відстань між точкою B та точкою C дорівнює: " . $b . "<br>";
    echo "Відстань між точкою C та точкою A дорівнює: " . $c . "<br>";
    echo "Півпериметр трикутника АВС дорівнює: " . semiPerimeter($a, $b, $c ) . "<br>";
    echo "Площа трикутника дорівнює: " . square(semiPerimeter($a, $b, $c ), $a, $b, $c) . "<br>";
?>