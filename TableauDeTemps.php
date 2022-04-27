<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Temps</title>
    <style>
        td{
            background-color: grey;
        }
    </style>
</head>
<body>
    <nav>
        <a href="Travail-Pratique-3.html"></a>
    </nav>
    <main>
        <?php

date_default_timezone_set('America/Toronto');
$d = date('Y-m-d:i:s');
echo date("h:i");

        $timeBoard = [];
        $Hour = date("h");
        $Minutes = date("i");

        //echo $Hour;
        //echo $Minutes;

        for($i=0; $i<60; $i++){
            $timeBoard[] = [];
            for($j=0; $j<12; $j++){
                $timeBoard[$i][] =$i." ".$j;


                
                ?> 
                <td><?php //echo $timeBoard[$i][$j] ?></td>
                <?php
            }
        }

        ?>
        <table>
            
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>


    </main>
</body>
</html>