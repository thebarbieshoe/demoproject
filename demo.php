<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$fruits = array( 'apples', 'oranges', 'bananas' );
$fruits2 = array( 'kiwi', 'grapes', 'limes', 'pineapple' );

$fruits[2] = 'grapes';

$basket = $fruits + $fruits2;
printArray($basket);

var_dump($fruits != $fruits2);

$arrlen = count($fruits);
/*for ($x=0 ; $x < $arrlen; $x++)
{
    echo $fruits[$x];
    echo '<br />';
}*/

/*foreach ($fruits as $fruit)
{
    echo $fruit . '<br/>';
}*/

//Associative array
$ages = array('Larry' => 43, 'Moe' =>47, 'Curly' => 45);
$ages['Larry'] =53;
/*foreach($ages as $age => $value)
{
    echo $age . " - ".$value.'<br />';
}*/

//printArray($fruits);
printArray($ages);

$ages['Bob'] = 100;
printArray($ages);

$fruits[3] = $ages;
//printArray($fruits);

//Muli-Dimensional Array (contains 2 associative array)
$phonebook = [
    [ 'name' => 'Jane', 'number' => '310-555-5555'], //Associative array
    [ 'name' => 'John', 'number' => '443-999-1234']
];

//printArray($phonebook);
//echo '*****************************************<br />';
//echo $fruits[0] . '<br />';
//echo $phonebook[0]['name'];

function printArray(array $array)
{
    echo'<pre>' . print_r($array, true) . '</pre>';
}


?>
</body>
</html>