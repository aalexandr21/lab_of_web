<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3_1</title>
</head>
<body>
    <h3>Масив дійсних чисел</h3>
    <?php
        $arr = [];
        $max = 0;
        $max_1 = 0;
        $dobutok = 1;
        for($i = 0; $i < 20; $i++){
            $arr[$i] = round(mt_rand(1,100)/mt_rand(1,10), 2);
            echo "<br> arr[$i] = " . $arr[$i];
            if(sqrt($arr[$i])%2 == 0 && $arr[$i] > 0 && pow(sqrt($arr[$i]),2) == $arr[$i]){
                echo " - є точним квадратом числа " . sqrt($arr[$i]);
                $dobutok *= $arr[$i];
            }
            if($max < $arr[$i]){
                $max = $arr[$i];
            }
            for($j = 0; $j < 20; $j++){
                if($arr[$j] > $max_1 && $arr[$j] != $max){
                    $max_1 = $arr[$j];
                }
            }
        }
        echo "<br><br>Добуток всіх точних квадратів чисел дорівнює: " . $dobutok;
        echo "<br><br>Сума останнього та максимального елементів масиву дорівнює: " . ($max+$arr[sizeof($arr)-1]);
        echo "<br><br>Два найбільших елементи масиву дорівнюють:  " . $max . " та " . $max_1;
        echo "<br><br>Масив в якому максимальний елемент масиву замінений на суму двух максимальних елементів масиву: ";
        for($i = 0; $i < 20; $i++){
            if($max == $arr[$i]){
                $arr[$i] = $max + $max_1;
            }
            echo "<br> arr[$i] = " . $arr[$i];
        }
    ?>
</body>
</html>