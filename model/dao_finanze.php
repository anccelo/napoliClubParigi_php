<?php
header('Location: ../index.php?action=admin' );
SESSION_START();
require('dao_connessione.php');

$_SESSION['finanzeOk']= true;

$direzione    = $_POST['direzione'];
if($direzione == "entrata"){
    $introito     = $_POST['cifra'];
    $spesa        = null; 
}else{
    $introito     = null;
    $spesa        = $_POST['cifra'];   
}

$label = $_POST['label'];

$fattura = $_POST['fattura']; 
if($fattura == "si"){
    $reponse = $bdd->query('SELECT count(*)  FROM finanze where codice_fattura IS NOT NULL ')->fetchColumn();
    $codice_fattura = $reponse + 1;
}else{
    $codice_fattura = $null;
}

$commenti = $_POST['commenti']; 

$req = $bdd->prepare('INSERT INTO finanze ( entrata_uscita, introito_euros, spesa_euros, label ,codice_fattura,inserito_da, commenti) 
VALUES(:entrata_uscita, :introito_euros, :spesa_euros, :label , :codice_fattura, :inserito_da, :commenti)');

$req->execute(array(
'entrata_uscita'         => $direzione, 
'introito_euros'         => $introito,
'spesa_euros'            => $spesa,
'label'                  => $label,
'codice_fattura'         => $codice_fattura,
'inserito_da'            => "", 
'commenti'               => $commenti

))or $_SESSION['finanzeOk']=false; 


if($_SESSION['finanzeOk']){
    $_SESSION['insertOk']= true;
    $_SESSION['infoInsertionBDDfinanze']= "transazione di " .$introito. "" .$spesa. "€ registrata";      
}else{
    $_SESSION['infoInsertionBDDfinanze'] = "WANING!!!!!! transizione NON registrata";
    
}