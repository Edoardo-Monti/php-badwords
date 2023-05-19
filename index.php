<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php start</title>
</head>
<body>
    <form action="arrivo.php" method="get">
        <div>
            <label for="">Nome</label>
            <input type="text" placeholder="Inserisci il tuo nome" name="nomePerson">

            <label for="">Cognome</label>
            <input type="text" placeholder="Inserisci il tuo cognome" name="cognomePerson">

            <label for="">Paragrafo</label>
            <input type="text" placeholder="scrivi qualcosa" name="text">

            <label for="">Parola da Censurare</label>
            <input type="text" placeholder="Inserisci la parola" name="censura">

            <button type="submit">Send Form</button>
        </div>
    </form>
</body>
</html>