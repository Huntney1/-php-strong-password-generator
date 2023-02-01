<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- Autore -->
    <meta name="author" content="Simone Fera">
    <!-- Descrizione del sito -->
    <meta name="description" content="primo utilizzo della programmazione PHP">
    <!-- Refresh permette il client-pull (refrescia la pagina in automatico) -->
    <!--  <meta http-equiv="refresh" content="40"> -->

    <!-- Persona CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<!--  -->
<body style="background-color: #05254b;">
<form action="index.php" method="get" style="color: white;">
    <h1>Strong password generator</h1>
    <label>Inserisci la lunghezza della password:</label>
    <input type="number" name="len">
    <input type="submit" value="Genera password">
  
</form>

  <?php
    /* form che riceve la lunghezza della password tramite il metodo { $_GET }. */
    if (isset($_GET['len'])) {

        /* Il valore viene convertito in un intero utilizzando la funzione { intval() }. */
        $len = intval($_GET['len']);

        /* viene definita la stringa { $chars } che contiene tutti i caratteri possibili da utilizzare
            nella password, Includendo lettere minuscole, maiuscole, numeri e simboli speciali. */
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:\'",.<>/?';

        /* La funzione { substr() } viene quindi utilizzata per creare una stringa casuale di lunghezza { $len }, estraendo i caratteri dalla stringa { $chars } in ordine casuale, utilizzando la funzione { str_shuffle() }. */
        $password = substr(str_shuffle($chars), 0, $len);
    
        /* con l'istruzione { echo } viene stampato il risultato sulla pagina */
        echo "La tua password casuale: $password";
    }
  ?>
</body>
</html>