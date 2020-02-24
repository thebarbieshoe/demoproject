<!DOCTYPE html>
<?php
    $tire_qty= trim('tire_qty');
    $oil_qty= trim('oil_qty');
    $spark_plug_qty= trim('spark_plug_qty');
?>
<html>
<?php   require("head.php");
        require("base.php");
        ?>
<body>

<div class="container-fluid">
    <h1>Bob's Auto Parts</h1>
    <h2>Order </h2>
    <?php

    //STEP ONE: open file
    $fp = fopen($path, 'ab'); //create a fp, file pointer variable

    extract($_GET); //get all named variables

    //STEP TWO: write to file
    fwrite($fp, "$tire_qty,$oil_qty,$spark_plug_qty");

    //STEP THREE: close the file
    fclose($fp);

    echo 'complete';



   ?>

</div>
</body>
