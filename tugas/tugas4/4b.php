<?php
    $pc = ["Motherboard","Processor","Hard Disk","PC Coller","VGA Card","SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach($pc as $p) { ?>
        <li><?= $p; ?></li>
        <?php }?>
    </ol>

    <hr>

    <h3></h3>
    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php array_unshift($pc, "Card Reader","Modem"); asort($pc); ?>
        <?php foreach($pc as $p) { ?>
            <li><?= $p; ?></li>
        <?php }?>
    </ol>
</body>
</html>