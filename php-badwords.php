<?php
//paragrafo non censurato
    $paragrafo = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

//con il get ottentgo la parola da censurare
    $inputUtente = strtolower($_GET["input"]);

//decido come verrà censurata la parola
    $censura = "***";

//la nuova stringa censurata
    $fraseCensurata = str_ireplace($inputUtente, $censura, $paragrafo);

//stile extra per il bene dello stile
    $stile = "style='width: 80%; margin: 50px auto; text-align: center;'";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 <?php echo $stile ?>> <?php echo $paragrafo; ?> </h3>
    <h3 <?php echo $stile ?>> <?php echo $fraseCensurata; ?> </h3>
    <h3 <?php echo $stile ?>> <?php echo strlen($fraseCensurata); ?> </h3>
</body>
</html>