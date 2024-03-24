<?php

// Function which prints "Hello I am Zura"

// function hello(){
//     echo "hello I am zura";

// };

// hello()

// Function with argument

// function hello($name){
//     echo "hello, my name is $name";
// }

// hello('john');
// Create sum of two functions

// function sum($num1, $num2){
//     return $num1+$num2;
// }
// echo sum(3,9);

// Create function to sum all numbers using ...$nums
// function sums(...$nums){
//     $sums=0;

//     foreach ($nums as $value) {

//         $sums= $sums+ $value;
//         # code...
//     }
//     return $sums;

// }

// echo sums(1,2, 4, 3,50, 56)

// Arrow functions

function sums(...$nums){
   return array_reduce($nums, fn($carry, $n)=> $carry+$n);


}

echo sums(1,2, 4, 3,50, 56)
?>