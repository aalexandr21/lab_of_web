<?php
    if(!empty($_GET)){
        $a = $_GET["pole-1"];
        $n = $_GET["pole-2"];
        $y1 = 0;
        $y2 = 1;
        for($i = 1; $i <= $n; $i++){
            if($i%2==0){
                $y1 += pow($a, $i);
            }
            if($i == $n && $n%2!=0){
                $y1 += pow($a, $i);
            }
        }
        echo "y1 = " . $y1;
        for($i = 1; $i < $n; $i++){
            $summ = 0;
            for($j = 1; $j < $i+1; $j++){
                $summ +=sin($j);
            }
            $y2 *=$summ;
        }
        echo "<br>y2 = " . $y2;
    }
?>