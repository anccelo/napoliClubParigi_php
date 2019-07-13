<?php



function getHome(){

    $title ='home'; 

    $content = 'parts/part_central_section.php';



    require('views/indexView.php');



}



function getAdmin(){

        $infoBDD = $_SESSION['infoInsertionBDD'];

        $infoBDD2 = $_SESSION['infoInsertionBDDfinanze'];

        $infoBDDnumeroscelto = $_SESSION['infoInsertionBDDnumeroscelto'];

        $admin = true;

        $title ='Admin home';

        $content = 'parts/part_loginAdmin.php';



        require('views/indexView.php');

        $_SESSION['infoInsertionBDD']="";

        $_SESSION['infoInsertionBDDfinanze']= "";

        $_SESSION['infoInsertionBDDnumeroscelto'] = "";

}



function getAdminInscription(){

    $admin=true;

    $title ='Admin inscrizione soci';

    $content = 'parts/part_form_inscription.php';

    

    require('views/indexView.php');

}



function getAdminConsultation(){

    $admin = true;

    $title ='Admin Consultazione';

    $content = 'parts/part_adminConsultazione.php';



    require('views/indexView.php');



}



function getIlClub(){

    $title ='Il Club';

    $content = 'parts/part_ilclub.php';



    require('views/indexView.php');

}



function getFinanze(){

    $admin = true;

    $title ='admin finanze';

    $content = 'parts/part_formEntrateUscite.php';



    require('views/indexView.php');



}





function getIscrizioni(){

    $title ='Iscrizioni 2018-2019'; 

    $content = 'parts/part_iscrizioni.php';



    require('views/indexView.php');

}



function getIscrizioniAdistanza(){

    $infoBDD = $_SESSION['infoInsertionBDD'];

    $infoCodeSicurezza = $_SESSION['infoCodeSicurezza'];

    $title ='Iscrizioni a distanza'; 

    $content = 'parts/part_iscrizioniAdistanza.php';



    require('views/indexView.php');

    $_SESSION['infoInsertionBDD']='';

    $_SESSION['infoCodeSicurezza']='';

    $_SESSION['primaFaseFatta'] ='';

}



function getVantaggi(){

    $title ='Vantaggi 2018-2019'; 

    $content = 'parts/part_vantaggi.php';



    require('views/indexView.php');



}



function getGuardaPartite(){

    $title ='Guarda le partite con noi'; 

    $content = 'parts/part_guardaPartite.php';
    
    require('views/indexView.php');

}



function getNextMatch(){
    require("model/dao_nextMatch.php");

    $title ='next Match'; 
    $content = 'parts/part_nextMatch.php';

    require('views/indexView.php');

}



function getLaSquadra(){

    $title ='La squadra di calcetto'; 

    $content = 'parts/part_laSquadra.php';

    require('views/indexView.php');

}

function getLaSciarpa(){

    $title ='La Sciarpa del Club'; 

    $content = 'parts/part_laSciarpa.php';

    require('views/indexView.php');

}

function getAdminConsultFinanze(){

    $admin = true;

    $title ='Consultazione finanze';

    $content = 'parts/part_adminConsultFinanze.php';



    require('views/indexView.php');
}

