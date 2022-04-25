<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Temps</title>
    <style>
        .box {
            height: 50px;
            width: 50px;
            background-color: grey;
        }
    </style>
</head>
<body>
    <nav>
        <a href="Travail-Pratique-3.html"></a>
    </nav>
    <main>
        <h2 class="box"></h2>
        <?php

        $col = " "; //12 Colons
        $ran = " "; //60 range
        $timeBoard = [];

        for($i=0; $i<60; $i++){
            for($j=0; $i<12; $i++){
                $timeBoard[] = $ran[$i].$col[$j];
            }
        }
print_r($timeBoard);
echo date("h:i");


        ?>
    </main>
</body>
</html>