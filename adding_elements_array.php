<?php
$addElements = array(1, 4, 5, 6);
$addElements[]= 7;

print_r($addElements); // to show the index and elements inside the array together with added element
echo "<br/>";
echo "This is updated element inside an array: ".$addElements[4]; // This is updated element inside an array is 7


echo "<br/>";
//Adding an element in an Associative array
$addDemoAssoc = array('Peter' =>20, 'Jane'=> 15);
$addDemoAssoc['James'] = 18;
echo "<br/>";
print_r($addDemoAssoc);
echo "<br/>"."This is updated element inside an associative array: ".$addDemoAssoc['James']; //This is updated element inside an associated array: 18
