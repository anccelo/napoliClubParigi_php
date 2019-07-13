<?php
SESSION_START();
require('dao_connessione.php');
$_SESSION['insertOk']=true;
$_SESSION['finanzeOk'] = true;


$nome                   = $_POST['nome'];
$cognome                = $_POST['cognome'];
$email                  = $_POST['email'];
$tipo_socio             = $_POST['tipo_socio'];
$citta_domicilio        = $_POST['citta_domicilio'];
$anno_nascita           = $_POST['anno_nascita'];
$genere                 = $_POST['genere'];
$telefono_francese      = $_POST['telefono_francese'];
$telefono_estero        = $_POST['telefono_estero'];
$commenti               = $_POST['commenti'];
$nazione_domicilio      = $_POST['nazione_domicilio'];
$tessera                = $_POST['numero_tessera'];

//echo "numero di tessera  ="; var_dump($tessera);

if($genere == '') $genere = null;
if($tipo_socio == '') $tipo_socio = null;
if($nazione_domicilio == '') $nazione_domicilio = null;
if($citta_domicilio == '') $citta_domicilio = null;
if($anno_nascita == '') $anno_nascita = null;
if($telefono_francese == '') $telefono_francese = null;
if($telefono_estero == '') $telefono_estero = null;
if($commenti == '') $commenti = null;

if($tessera == null){
    //quante tessere fin ora:
    $reponse = $bdd->query('SELECT count(*) nome   FROM persona where data_prima_iscrizione IS NOT NULL')->fetchColumn();
    $tessera = $reponse;

    //test per vedere se il numero di tessera esite già
    do{
        $tessera++;
        $testunicita = $bdd->query('SELECT count(*) nome   FROM persona where numero_tessera ="' .$tessera. '"')->fetchColumn(); 
        //var_dump($testunicita );
        
    }while($testunicita == 1);
    //var_dump($tessera ); 
}else{
    $testunicita = $bdd->query('SELECT count(*) nome   FROM persona where numero_tessera ="' .$tessera. '"')->fetchColumn();
    if($testunicita == 1) $_SESSION['infoInsertionBDDnumeroscelto']= "la tessera numero" .$tessera. " é già assegnata";
    
}

 //var_dump($tessera , $_SESSION['infoInsertionBDD']); 



//verifica per soci che hanno prenotato il numero
// $reponse2 = $bdd->query('SELECT count(*) nome   FROM persona where numero_tessera ="' .$tessera. '"')->fetchColumn();
//  if ($reponse2 == 1){
//      $tessera++;
//  }


// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO persona ( nome, cognome, email, is_iscritto ,numero_tessera,tipo_socio, data_prima_iscrizione,
data_ultima_iscrizione, nazione_domicilio, citta_domicilio, anno_nascita,genere, telefono_francese, telefono_estero , commenti ) 
VALUES(:nome, :cognome, :email, :is_iscritto, :numero_tessera , :tipo_socio, :data_prima_iscrizione,
 :data_ultima_iscrizione, :nazione_domicilio, :citta_domicilio, :anno_nascita, :genere, :telefono_francese, :telefono_estero, :commenti )');
$req->execute(array(
    'nome'                   => $nome, 
    'cognome'                => $cognome,
    'email'                  => $email,
    'is_iscritto'            => 1,
    'numero_tessera'         => $tessera,
    'tipo_socio'             => $tipo_socio,
    'data_prima_iscrizione'  =>date("Y-m-d"),
    'data_ultima_iscrizione' =>date("Y-m-d"),
    'nazione_domicilio'      => $nazione_domicilio,
    'citta_domicilio'        => $citta_domicilio,
    'anno_nascita'           => $anno_nascita,
    'genere'                 => $genere,
    'telefono_francese'      => $telefono_francese,
    'telefono_estero'        => $telefono_estero,
    'commenti'               => $commenti
    
    )) or $_SESSION['insertOk']=false;

if($_SESSION['insertOk']){
    
    $_SESSION['insertOk']= true;
    $_SESSION['infoInsertionBDD']= "Iscrizione effetuata.
        <br/>"  .$nome. " " .$cognome. " é il socio  numero " .$tessera;
    header('Location: ../index.php?action=admin' );
    
}else{
    $_SESSION['infoInsertionBDD'] = "é  giunto  un problema, nuova iscrizione non effettuata";
    $_SESSION['infoInsertionBDDnumeroscelto'];
    header('Location: ../index.php?action=admin' );

}
//inserzione dell'introito generato dall'iscrizione
$introito=  0;
if($tipo_socio == 'classico'){
    $introito = 15.00;
}
if($tipo_socio == 'figlio'){
    $introito = 3.00;
}

$label = "iscrizione tesserato numero " .$tessera;


$reponse = $bdd->query('SELECT count(*)  FROM finanze where codice_fattura IS NOT NULL ')->fetchColumn();
$codice_fattura = $reponse + 1;

if($introito != 0 and $_SESSION['insertOk']){

    $req = $bdd->prepare('INSERT INTO finanze ( entrata_uscita, introito_euros, spesa_euros, label ,codice_fattura,inserito_da, commenti) 
                            VALUES(:entrata_uscita, :introito_euros, :spesa_euros, :label , :codice_fattura, :inserito_da, :commenti)');
var_dump($introito);
    $req->execute(array(
    'entrata_uscita'         => "entrata", 
    'introito_euros'         => $introito,
    'spesa_euros'            => null,
    'label'                  => $label,
    'codice_fattura'         => null,
    'inserito_da'            => null, 
    'commenti'               => $label

    ))or $_SESSION['finanzeOk']=false; 

    if($_SESSION['finanzeOk']){
    
        $_SESSION['insertOk']= true;
        $_SESSION['infoInsertionBDDfinanze']= "transazione registrata";
            
        header('Location: ../index.php?action=admin' );
        
    }else{
        $_SESSION['infoInsertionBDDfinanze'] = "WANING!!!!!! transizione NON registrata";
       // header('Location: ../index.php?action=admin' );
    }
}

//header('Location: ../index.php?action=admin' );


// Redirection du visiteur vers la page du minichat

$_SESSION['insertionNewMember']= true;
//echo $_SESSION['insertionNewMember'];
//header('Location: minichat.php');
?>







