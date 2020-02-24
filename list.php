<!DOCTYPE html>
<html>
<?php require("head.php");
require("base.php");
$list = file_get_contents($path);
$orders = explode("\n",trim($list));
?>
<body>
<?php require("nav.php"); ?>
<div class="container-fluid">
    <h1>Bob's Auto Parts</h1>
    <h2>Parts Ordered </h2>
    <?php
    printArray($orders);
    //echo nl2br($list);

    // 2/18 STRING MANIPULATIONS

    // echo strtolower('JULIE');
    // echo strtoupper('kate');

    // echo ucfirst('kate wagner');
    // echo ucwords('kate elise wagner');
    ?>




</div>
</body>