<?php
$a = [1,2];
$b = [2,3,4,5];
$c = $a + $b;
print_r($c);

/*
Intersect and difference function

*/

/*
Dufference Start
set (A) - set (B)
*/

function comp($a, $b){
  return $a <=> $b;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
/*
cheack value
*/
$result = array_diff_assoc($array1, $array2);
/*
cheack key and value
*/
$result = array_diff_uassoc($array1, $array2, 'comp');
/*
cheack key and value by user function
*/
$result = array_diff_key($array1, $array2);
/*
cheack key
*/
$result = array_diff_ukey($array1, $array2, 'comp');
/*
cheack key and value by user function
*/


/*
Dufference End
*/

/*
Intersect Start
set (A) ∩ set (B)
*/
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
/*
cheack value
*/
$result = array_intersect_assoc($array1, $array2);
/*
cheack key and value
*/
$result = array_intersect_uassoc($array1, $array2, 'comp');
/*
cheack key and value by user function
*/
$result = array_intersect_key($array1, $array2);
/*
cheack key
*/
$result = array_intersect_ukey($array1, $array2, 'comp');
print_r($result);
/*
cheack key and value by user function
*/
/*
Intersect End
*/

/*
Fill Array
*/

$keys = array('foo', 5, 10, 'bar');
$result = array_fill_keys($keys, 'banana'); // Fill an array with values, specifying keys

$values = ['Saiful', 'John', 'Mark'];

$result = array_fill(0, 4, 'first_name');
print_r($result);

/*
Fill Array
*/

/* Searching Array
$key , $array
*/




/* Searching Array*/

/* Merge array */

$ar1 = array(
  "color" => array(
    "favorite" => [
      "red" => 'black'
      ]
  ), 5);
$ar2 = array(10, 
  "color" => array(
    "favorite" => [
      "red" => "white"
    ], 
    "blue"));
$result = array_merge_recursive($ar1, $ar2);
// print_r($result);


/* Merge array */

/*
Sort Array 
*/

$name = ["Saidul", "Saiful", "Rifat", "Emo"];
$age = [25, 22, 18, 17];

array_multisort($name, SORT_ASC, SORT_FLAG_CASE  );
print_r($name);
// print_r($age);


/*
Sort Array 
*/

?>