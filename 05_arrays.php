<?php

// // Create array

// $fruits= ["bananas", "orange", "mangos", "tomatos", "pears", "ribenas"];

// // Print the whole array
// var_dump($fruits);
// echo '<pre>';
// echo var_dump($fruits). '<br>' ;
// echo '</pre>';
// // Get element by index

// echo $fruits[1]. '<br>';
// // Set element by index
// $fruits[0]='pinnapos';

// echo var_dump($fruits). '<br>' ;
// // Check if array has element at index 2

// echo isset ($fruits[2]);

// // Append element

// $fruits[]= 'tomatos';

// echo '<pre>';
// echo var_dump($fruits). '<br>' ;
// echo '</pre>';

// // Print the length of the array

// echo count($fruits). '<br>';

// // Add element at the end of the array

// array_push($fruits, 'onions');

// echo '<pre>';
// echo var_dump($fruits). '<br>' ;
// echo '</pre>';

// // Remove element from the end of the array
// echo array_pop($fruits);
// echo '<pre>';
// echo var_dump($fruits). '<br>' ;
// echo '</pre>';

// // Add element at the beginning of the array

// array_unshift($fruits, "bar");
// echo '<pre>';
// echo var_dump($fruits). '<br>' ;
// echo '</pre>';

// // Remove element from the beginning of the array

// array_shift($fruits);
// echo '<pre>';
// echo var_dump($fruits). '<br>' ;
// echo '</pre>';

// // Split the string into an array

// $names="john, chege, mwaniki, james, kamau";

// $arrayNames= (explode(",",$names));

// echo '<pre>';
// echo var_dump($arrayNames). '<br>' ;
// echo '</pre>';

// // Combine array elements into string
// echo implode('/', $arrayNames). '<br>' ;

// // Check if element exist in the array

// $checkifsomethingexist= in_array('jkohn', $arrayNames);
// echo var_dump($checkifsomethingexist). '<br>' ;

// // Search element index in the array

// echo var_dump(array_search('john', $arrayNames));

// // Merge two arrays

// $marged_array= array_merge($arrayNames, $fruits);

// echo "<pre>";

// var_dump($marged_array);

// echo "</pre>";
// // Sorting of array (Reverse order also)

// sort($fruits);

// echo "<pre>";

// echo var_dump($fruits);

// echo "</pre>";
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// $person=[
//     'name'=> 'john',
//     'sirname'=> 'mwaniki',
//     'age'=> 30,
//     'hobbies'=>['football','swimming'],
// ];
// echo "<pre>";
// echo var_dump($person);
// echo print_r($person);
// echo "</pre>";

// // Get element by key
// echo $person['name'];

// // Set element by key

// $person['address']='176 kangari';
// echo "<pre>";
// echo var_dump($person);
// echo "</pre>";

// // Null coalescing assignment operator. Since PHP 7.4

// // if (!isset($person['height'])){
// //     $person['height']='34';
// // }
// // echo "<pre>";
// // echo var_dump($person);
// // echo "</pre>";

// $person ['height'] ??= '34';
// $person ['names']??='samuel';

// echo "<pre>";
// echo var_dump($person);
// echo "</pre>";

// // Check if array has specific key

// echo var_dump( isset($person['nams'])). '<br>';

// // Print the keys of the array

// $keys =array_keys($person);

// echo "<pre>";
// echo var_dump($keys);
// echo "</pre>";

// // Print the values of the array

// $valuesinarray= array_values($person);

// echo "<pre>";
// echo var_dump($valuesinarray);
// echo "</pre>";

// // Sorting associative arrays by values, by keys
// asort($person);
// echo "<pre>";
// echo var_dump($person);
// echo "</pre>";

// Two dimensional arrays

$todo=[
    ['title'=>'todo title 1', 'completed'=> true],
    ['title'=>'todo title 2', 'completed'=>false]

];
echo "<pre>";
echo var_dump($todo);
echo "</pre>";


