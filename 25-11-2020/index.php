<?php
    $arr = [];
    $neparni = "непарні_числа.txt";
    $parni = "парні_числа.txt";
    for($i = 0; $i < 10; $i++){
        $arr[$i] = $i;
    }
    function writeTextInFile($fileName, $arr, $i, $k){
        file_put_contents($fileName, "");
        $fp = fopen($fileName, 'w');
        for($q = 0; $q < $i; $q++){
            if($q % 2 == $k){
                fwrite($fp, $arr[$q] . "\n");
            }
            else
                continue;
        }
        fclose($fp);
    }
    writeTextInFile($neparni, $arr, 10, 1);
    writeTextInFile($parni, $arr, 10, 0);
?>
<table>
<?php 
    $neparni_arr = file($neparni);$parni_arr = file($parni);
    for($i = 0; $i < 10; $i++){
        if($i % 2 == 0){
            $colors = 'gray';
            $text = $parni_arr[$i/2];
        }
        else{
            $colors = 'yellow';
            $text = $neparni_arr[floor($i/2)];}
    echo "<tr style='background-color:$colors;'>
            <td> 
                $text
            </td>  
          </tr>";
}
?>
</table>