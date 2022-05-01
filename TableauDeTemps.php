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

        table,
        th,
        td {
            border: 3px solid grey;
            border-collapse: collapse;
        }

        th {
            background-color: darkseagreen;
            color: red;
        }

        th,
        td {
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
            $hour = date("g");
            $minutes = date("i");

            $minutesLigne = 60;
            $heurColones = 12;

            for ($i = 0; $i < $minutesLigne; $i++) {
                for ($j = 0; $j < $heurColones; $j++) {
                    $timeBoard[$i][$j] = "";
                }
            }
            $timeBoard[$minutesLigne][$heurColones] = "X"
            ?>
        </section>
        <table>
            <tr>
                <th>Heures/Minutes</th>
                <?php for($i=0; $i <$heurColones; $i++) {
                   ?> <th> <?php $i ?> </th> 
               <?php } ?>
            </tr>

        </table>
    </main>
</body>

</html>