<?php

//variables for locating order.txt
$document_root = $_SERVER['DOCUMENT_ROOT'];
$path = "$document_root/orders/order.txt";
$alert = '<div class="alert alert-%s" role="alert">%s</div>'; //%s hold place of strings

//will print array
//used for testing purposes
    function printArray (array $array)
        {
            echo'<pre>'. print_r($array, true) . '</pre>';
        }

function writeToFile(string $file, string $content): bool
{
    $fp = @fopen($file, 'ab'); //open file
    //error checking
    if (!$fp) {
        return false; //if fopen doesn't work, fopen-> false
    }

    if (!fwrite($fp, $content) ) {
        return false;
    }
    if (!fclose($fp) ) {
        return false;
    }
    return true;
}
    ?>