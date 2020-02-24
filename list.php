<!DOCTYPE html>
<html>
<?php require("head.php");
require("base.php");
$list = file_get_contents($path);
?>
<body>
<?php require("nav.php"); ?>
<div class="container-fluid">
    <h1>Bob's Auto Parts</h1>
    <h2>Parts Ordered </h2>
    <?php echo nl2br($list); ?>




</div>
</body>