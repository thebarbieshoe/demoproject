<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
//Muli-Dimensional Array (contains 2 associative array)
$phonebook = [
    [ 'name' => 'Jane', 'number' => '310-555-5555'], //Associative array
    [ 'name' => 'John', 'number' => '443-999-1234']
];

function printPhoneBook($value)
{
    echo $value['name'] . ': ' . $value['number'] . '<br />';
}

array_walk($phonebook,'printPhoneBook');


$array = [];
//THESE FUNCTIONS ARE GREAT FOR ERROR CHECKING
var_dump(isset($array));
var_dump(empty($array));
var_dump(is_null($array));






?>
</body>
</html>
