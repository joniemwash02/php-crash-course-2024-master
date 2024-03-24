<?php

// // while
$counter=0;
//  while($counter<10){
//     echo $counter."<br>";
//     if ($counter==5){
//         echo "you have reached the minimum value";
//         break;

//     }
//     $counter++;
//  }
// Loop with $counter

// do - while
// do{
//     echo $counter."<br>";
//     $counter++;
// }
// while($counter<10);

// // for
// for($i=0;$i<10; $i++){
//     echo $i;
// }

// foreach

// $fruits=['mangos','bananas','ribenas','oranges'];

// foreach ($fruits as $i => $fruit) {
//     echo ($i+1). ". ".$fruit. "<br>";
// }

// Iterate Over associative array.

$person=[
    'name'=>'john',
    'email'=>'joniemwash4@gmail.com',
    'age'=>'28',
    'hobbies'=>['football',
                'basketball',
                'running'],
];
foreach ($person as $key => $value) {
    if(is_array($value)){
        echo $key. ':'.implode(',',$value). "<br>";
    } else{
        echo $key. ':'. $value. "<br>";
    }
   

}

?>