<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php

printArray($_SERVER);
$document_root = $_SERVER['DOCUMENT_ROOT'];
$path = "$document_root/../orders/order.txt";
fopen($path, 'ab');

function printArray(array $array)
{
    echo'<pre>' . print_r($array, true) . '</pre>';
}







?>
</body>
</html>