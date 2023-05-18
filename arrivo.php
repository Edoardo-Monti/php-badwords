<?php

$name= $_GET['nomePerson'];
$cognome= $_GET['cognomePerson'];
$text= $_GET['text'];

// echo str_replace(" ", '-', $text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Arrivo Form</title>
</head>
<body>
    <!-- stampa del nome ecognome -->
    <h1><?php echo $name . ' ' . $cognome ?></h1>

    <!-- stampa del testo e la sua lunghezza -->
    <h2>il tuo testo:  <?php echo $text?></h2>
    <p>il paragrafo contiene <?php echo strlen($text)?> caratteri, compresi gli spazzi</p>

    <!-- stampa del testo con gli spazzi  -->
    <h3>il tuo testo:  <?php echo str_replace(" ", ' - ', $text)?></h3>


</body>
</html>