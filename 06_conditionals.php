<?php

$age =0;
$salary = 300000;

// // Sample if
// if ($age<25){
//     echo'you are more than 25 years';
    
// }
// // Without circle braces

// if ($age<25) echo'you are more than 25 years';
    

// // Sample if-else
// if($age>25){
//     echo' you are more than 25 years';
// }else{
//     echo'you are less than 25 years';
// }

// Difference between == and ===
// if($age==20){
//     echo'1'.'<br>';
// };
// if ($age===20){
//     echo "2";
// }
// if AND
// if($age==20 && $salary== 30000){
//     echo"you can now procede";

// }else{
//     echo"dont procede";
// }
// if OR
// if($age==20 || $salary== 30000){
//     echo"you can now procede";

// }else{
//     echo"dont procede";
// }

// Ternary if

// echo $age>18 ? 'old': 'oung';

// Short ternary

$newAge=$age?: 14;

echo '<pre>';
echo $newAge;
echo '</pre>';

$names="john,chege, mwaniki, james, kamau";

$arrayNames= (explode(",",trim(($names))));

echo '<pre>';

echo var_dump($arrayNames);

echo '</pre>';

echo implode(',', $arrayNames);

echo var_dump(in_array( ('   chege'), $arrayNames));

// Null coalescing operator

// switch
