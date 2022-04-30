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
        <section>
            <?php
            date_default_timezone_set('America/Toronto');
            $d = date('Y-m-d:i:s');
            ?>
        </section>
        <h1>Tableau de <?php echo date("h:i"); ?> </h1>
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
        ?> <td> " " </td> <?php [$timeBoard];?>
        <td> <?php ?> </td>
        <?php

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