<!DOCTYPE html>
<?php
require("base.php");
extract($_GET);
$order_string = "$tire_qty,$oil_qty,$spark_plug_qty\n";

if (!writeToFile($path, $order_string)) {
    $message =
        <<<EOT
            <div class="alert alert-danger" role="alert">
                Failed to write to file.
            </div>
EOT;

} else {
    $message =
        <<<EOT
            <div class="alert alert-success" role="alert">Success!</div>
EOT;
}

////HOW TO WRITE TO A FILE
//$fp = fopen($path, 'ab');
//fwrite($fp, $order_string);
//fclose($fp);


?>
<html>
<?php require("head.php"); ?>
<body>
<?php require("nav.php"); ?>
<div class="container-fluid">
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
    echo $message;
    ?>

</div>
</body>
</html>