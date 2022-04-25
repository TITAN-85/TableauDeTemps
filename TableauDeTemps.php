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

        //$col = " "; //12 Colons
        //$ran = " "; //60 range
        //date_default_timezone_set("Canada");
        //$timezone = -5; //(GMT -5:00) est (U.S. & Canada);
        //time() + 3600*($timezone+date("i"));
//$date = new DateTime('2000-01-01', new DateTimeZone('Pacific/Nauru'));
//$date->setTimezone(new DateTimeZone('Pacific/Chatham'));
//echo $date->format('Y-m-d H:i:sP') . "\n";
//$timezone  = -5;
//echo gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I")));
echo date_default_timezone_set(-5);
        echo "<br>";


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

//print_r($timeBoard);

echo gmdate("h:i");

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