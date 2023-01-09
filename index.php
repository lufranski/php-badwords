<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>
<body>
    
    <?php
        
        $myPar = "Mi sono rotto il cazzo! Quando tre anni fa mi hanno offerto questo ruolo, mi dicevano questo conte è un personaggio che cambia, che è cattivo ma poi diventa buono, 'sto conte si trasforma, 'sto conte è 'na sinfonia, 'sto conte questo... e invece 'sto conte 'sto cazzo! Lo posso dire, padre? 'Sto cazzo! [...] Questo è un personaggio negativo, soltanto negativo, che ai giovani mi trasmette un messaggio negativo, perché questo... questo conte ammazza... questo conte stupra... stupra e fa stuprare! E poi c'ha questa fissazione per questo pacchetto azionario! [spacca una lampadina con la mazza da baseball] Ma che cos'è un pacchetto azionario?! È fisicamente un pacchetto o no?!";
        
    ?>
    
    <p>
        <?php echo $myPar ?>
    </p>

    <p>
        Lunghezza stringa: 
        <?php echo strlen($myPar)?>
    </p>

    <!-- CENSURA -->
    <?php

        $censoredWord = $_GET["parola"];

        $myPar2 = str_replace($censoredWord, "***", $myPar);
    ?>

    <p>
        <?php echo $myPar2 ?>
    </p>

    <p>
        Lunghezza stringa: 
        <?php echo strlen($myPar2) ?>
    </p>
</body>
</html>