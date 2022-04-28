<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Temps</title>
    <style>
        td {
            background-color: grey;
            padding: 10px;
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
        $minutes = date("i");


        for ($i = 0; $i < 60; $i++) {
            $timeBoard[] = [];
            for ($j = 0; $j < 12; $j++) {
                $timeBoard[$i][] = $i . " " . $j;
                //echo "<pre>" . print_r($timeBoard, true) . "<pre>";
            }
        }
        //echo "<pre>" . print_r($timeBoard, true) . "<pre>";
        print_r($timeBoard);
        //echo ?> <td> " " </td> <?php [$timeBoard];

        ?>
        <td><?php
            ?></td>
        <?php


//fixme:
        ?>
        <table>

            <tr>
                <?php for ($i = 0; $i < 20; $i++) {
                    $a[$i] = " x ";
                ?>
                    <td><?php echo $i; ?></td>
                <?php } ?>
            </tr> 
            <tr>
                <?php //echo 
                ?> <td></td> <?php ?>
            </tr>
        </table>
    </main>
</body>

</html>