<?php

// Print current date
echo date('d-M-Y H:i:s').'<br>';

// Print yesterday

echo date('d-M-Y H:i:s', time()-60*60*24). '<BR>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F-j Y'). '<BR>';

// Print current timestamp
echo time(). '<BR>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php

 $parsedDate= date_parse('2024-03-24 07:04:00');

 echo "<pre>";
 echo var_dump($parsedDate). '<BR>';
 echo "</pre>";

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
?>

