<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Temps</title>
    <style>
        body {
            width: 60%;
            margin: auto;
        }

        table, th, td {
            border: 3px solid grey;
            border-collapse: collapse;
        }

        th {
            background-color: darkseagreen;
            color: red;
        }

        th, td {
            width: 55px;
            line-height: 40px;
            text-align: center;
        }

        td {
            color: green;
        }
    </style>
</head>

<body>
    <nav>
        <a href="Travail-Pratique-3.html"></a>
    </nav>
    <main>
        <section>
            <?php
            date_default_timezone_set('America/Toronto');
            $d = date('Y-m-d:i:s');
            ?>
        </section>
        <section>
            <h1>Tableau de Temp<?php echo date("h:i"); ?> </h1>
            <?php
            $timeBoard = [];
            $Hour = date("h");
            $minutes = date("i");

            for ($i = 0; $i < 60; $i++) {
                $timeBoard[] = [];
                for ($j = 0; $j < 12; $j++) {
                    $timeBoard[$i][] = $i . " " . $j;
                }
            }

            ?>
        </section>
        <table>
            <tr>
                <th>Ligne/Colones</th>
                <?php for ($i = 0; $i < 12; $i++) : ?>
                    <th><?= $i ?></th>
                <?php endfor ?>
            </tr>
            <?php for( $i =0; $i < 60; $i++) : ?>
            <tr>
            <th><?= $i ?></th>
            <?php for( $j =0; $j < 12; $j++) : ?>
                <td><?= 

            $timeBoard[$Hour][$minutes] = "X";
            $timeBoard[$i][$j];
                ?></td>

        <?php endfor ?>
            </tr>
            <?php endfor ?>      
        </table>
    </main>
</body>

</html>