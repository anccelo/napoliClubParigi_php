<?php
SESSION_START();
require('dao_connessione.php');
$_SESSION['insertOk']=true;
$_SESSION['finanzeOk'] = true;
$_SESSION['primaFaseFatta'] == null;

//htmlspecialchars($_POST['prenom']); 
$nome                   = htmlspecialchars($_POST['nome']);
$cognome                = htmlspecialchars($_POST['cognome']);
$email                  = htmlspecialchars($_POST['email']);
$tipo_socio             = "classico";
$citta_domicilio        = htmlspecialchars($_POST['citta_domicilio']);
$anno_nascita           = htmlspecialchars($_POST['anno_nascita']);
$genere                 = htmlspecialchars($_POST['genere']);
$telefono_francese      = htmlspecialchars($_POST['telefono_francese']);
$telefono_estero        = htmlspecialchars($_POST['telefono_estero']);
$commenti               = htmlspecialchars($_POST['commenti']);
$nazione_domicilio      = htmlspecialchars($_POST['nazione_domicilio']);
$tessera                = htmlspecialchars($_POST['numero_tessera']);

//echo "numero di tessera  ="; var_dump($tessera);

if($genere == '') $genere = null;
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
}

 //var_dump($tessera , $_SESSION['infoInsertionBDD']); 



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
    $_SESSION['infoInsertionBDD']= "prima fase effetutata. l'iscrizione sarà effettiva dopo aver effettuato il pagamento.
        <br/>"  .$nome. " " .$cognome. " sarai  il socio  numero " .$tessera;
        $_SESSION['primaFaseFatta']= true;
    header('Location: ../index.php?action=iscrizioniadistanza' );
    
}else{
    $_SESSION['infoInsertionBDD'] = "é  giunto  un problema, nuova iscrizione non effettuata, contattaci tramite email: napoliclubparigi@gmail.com";
    $_SESSION['infoInsertionBDDnumeroscelto'];
    header('Location: ../index.php?action=iscrizioniadistanza' );

}
//introito da modificare dopo verifica pagamento paypall
$introito=  14.24; //lz cifra dovrebbe esser 14.24€


$label = "DISTANZA: iscrizione tesserato numero " .$tessera. "verifica pagamento Paypall: false";


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
    'inserito_da'            => "pagamanto a distanza", 
    'commenti'               => $label

    ))or $_SESSION['finanzeOk']=false; 

    if($_SESSION['finanzeOk']){
    
        $_SESSION['insertOk']= true;
        $_SESSION['infoInsertionBDDfinanze']= "transazione registrata";
            
        header('Location: ../index.php?action=iscrizioniadistanza' );
        
    }else{
        $_SESSION['infoInsertionBDDfinanze'] = "WARNING!!!!!! transizione NON registrata";
       // header('Location: ../index.php?action=admin' );
    }
}

//header('Location: ../index.php?action=admin' );


// Redirection du visiteur vers la page du minichat

$_SESSION['insertionNewMember']= true;
//echo $_SESSION['insertionNewMember'];
//header('Location: minichat.php');
?>







