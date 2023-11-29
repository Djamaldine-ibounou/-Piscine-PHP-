<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


function ComparerNombre($nombre)
{
    if ($nombre > 0) {
        return "positif";
    } elseif ($nombre < 0) {
        return "négatif";
    } else {
        return "nul";
    }
}
    echo comparerNombre(10)

    ?>

</body>
</html>