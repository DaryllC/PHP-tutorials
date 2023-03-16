<?php

//count() - it accepts an array and return the number of elements in array
$countDemo = array(1, 4, 6, 8, 7, 9);
echo count($countDemo); // This function accepts an array and returns the number of elements in the array

echo '<br>';
//array_search() - it searches for particular value in an array
$indexArrayDemo = array(11, 4, 5, 6, 8, 16);
$assocArrayDemo = array('a' => 12, 'B' =>5 , 'C'=> 20);
echo array_search(5, $indexArrayDemo).'<br>'; // searhc for 5 in indexArrayDemo. Although there are two value of 5 in the array, only in the index of the first matching value is returned.
echo array_search(20, $assocArrayDemo).'<br>'; // search for 20 in assocArrayDemo. We get 'C' as the output
var_dump(array_search('B', $assocArrayDemo)); //we get false as 'B' is a key in the array, not a value 

//in_array()- similar to the array_search() function.
// However, instead of returning the key or index, it returns true if the stated value is found in the array
echo '<br>';
var_dump(in_array(5, $indexArrayDemo));
echo '<br>';
var_dump(in_array(20, $assocArrayDemo));
echo '<br>';
var_dump(in_array('B', $assocArrayDemo));

//array_merge() - it merges two or more arrays and returns the merged array
$num1 = array(100, 111, 120);
$num2 = array(100, 3, 5);
$num3 = array(1, 10);

$newArray1 = array_merge($num1, $num2, $num3);
echo '<br>';
print_r($newArray1); // newArray1 becomes (100, 111, 120, 100, 3, 5, 1, 10)
echo '<br>';
$name1 = array(5 => "Peter", 24 => "Aaron");
$name2 = array(5 => "Zac", 4 =>"Alfred", 7=>"Avi");
$newArray2 = array_merge($name1, $name2);
print_r($newArray2);


