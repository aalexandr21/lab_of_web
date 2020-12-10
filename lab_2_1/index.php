<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 2_1</title>
</head>
<body>
    <h3>Всі тризначні числа які діляться одночасно на 16 та 24!</h3>
    <?php 
        for($i = 100; $i <= 999; $i++){
            if(($i%16 == 0) && ($i%24 == 0)){
                echo "+ " . $i . "<br>";
            }
        }
    
    ?>
</body>
</html>