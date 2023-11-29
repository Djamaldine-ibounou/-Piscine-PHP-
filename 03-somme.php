<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

use PgSql\Result;

function addition ($nb1, $nb2)
{
$result = $nb1 + $nb2;
return $result;
}

echo addition(12, 15) . "\n";
$resultAddition = addition(12, 15);

?>
</body>
</html>