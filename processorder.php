<!DOCTYPE html>
<?php
require("base.php");
extract($_GET);

if (!empty($name)) {

    $name = trim($name);
    $tire_qty = trim($tire_qty);
    $oil_qty = trim($oil_qty);
    $spark_plug_qty = trim($spark_plug_qty);

    if(empty($tire_qty)) {
        $tire_qty = 0;
    }

    if(empty($oil_qty)) {
        $oil_qty = 0;
    }

    if(empty($spark_plug_qty)) {
        $spark_plug_qty = 0;
    }
    $order_string = "$name,$tire_qty,$oil_qty,$spark_plug_qty\n";

    if (!writeToFile($path, $order_string)) {
        $message = sprintf("$alert", 'danger', 'Failed to write to file.');

    } else {
        $message = sprintf("$alert", 'success', 'Success!');
    }
} else {
    $message = sprintf("$alert", 'danger', 'Customer Name is required');
}
?>
<html>
<?php require("head.php"); ?>
<body>
<?php require("nav.php"); ?>
<div class="container-fluid">
    <div class="row">
        <?php echo $message; ?>
    </div>

</div>
</body>
</html>