<?php
//array_change_key_case default case lower, CASE_LOWER,CASE_UPPER
//array_change_key_case($arr,[default = CASE_LOWER])
$input_array = array("FirSt" => 1, "SecOnd" => 4);
//print_r(array_change_key_case($input_array, CASE_UPPER)); // ["FIRST" => 1, "SECOND" => 4]

//array chunk
//option parameter preserve_keys
$input_array = array('a', 'b', 'c', 'd', 'e');
echo "<pre>";
// print_r(array_chunk($input_array, 2)); 
/*
  [
    [0] => [
      [0] => a,
      [1] => b
    ],
    [1] => [
      [0] => c,
      [2] => d
    ],
    [2] => [
      [0] => e
    ]
  ]
*/
// print_r(array_chunk($input_array, 2, true));
/*
  [
    [0] => [
      [0] => a,
      [1] => b
    ],
    [1] => [
      [2] => c,
      [3] => d
    ],
    [2] => [
      [4] => e
    ]
  ]
*/



$records = array(
  array(
      'id' => 2135,
      'user' => [
        'first_name' => 'John'
      ],
      'last_name' => 'Doe',
  ),
  array(
      'id' => 3245,
      'user' => [
        'first_name' => 'Smith'
      ],
      'last_name' => 'Smith',
  ),
  array(
      'id' => 5342,
      'user' => [
        'first_name' => 'Silly'
      ],
      'last_name' => 'Jones',
  ),
  array(
      'id' => 5623,
      'user' => [
        'first_name' => 'Peter'
      ],
      'last_name' => 'Doe',
  )
);

//get 
$first_names = array_column(array_column($records, 'user', 'id'),'first_name');
print_r($first_names);

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(sizeof($a));

echo "</pre>";