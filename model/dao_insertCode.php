<?php
SESSION_START();
     $_SESSION['code'] = $_POST['code'];

    if($_SESSION['code'] == "9?x9!=7juvMerd1"){
        $_SESSION['faseZero'] = true;
    }else{
        $_SESSION['infoCodeSicurezza'] = "Codice errato, assicurati che tu l'abbia scritto correttamente, 
        altrimenti ricontattaci a napoliclubparigi@gmail.com";
    }
    header('Location: ../index.php?action=iscrizioniadistanza' );