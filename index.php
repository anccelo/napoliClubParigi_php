<?php

SESSION_START();

require('controller.php');



if(isset($_GET['action'])) {



    if($_GET['action'] == 'admin') {  getAdmin(); }



    if($_GET['action'] == 'inscription'){

        if(!isset($_SESSION['admin'])){ getHome(); }

        else{

            if($_SESSION['admin']){  getAdminInscription(); }

            else{ getHome();} }

        }

    

    if($_GET['action'] == 'finanze' ){

        if(!isset($_SESSION['admin'])){ getHome(); }

        else{

            if($_SESSION['admin']){  getFinanze(); }

            else{ getHome();} }

    }



    if($_GET['action'] == 'consultation'){

        if(!isset($_SESSION['admin'])){ getHome(); }

        else{

            if($_SESSION['admin']){  getAdminConsultation(); }

            else{ getHome();} 

        }

    }

    if($_GET['action'] == 'consultfinanze'){

        if(!isset($_SESSION['admin'])){ getHome(); }

        else{

            if($_SESSION['admin']){  getAdminConsultFinanze(); }

            else{ getHome();} 

        }

    }

 



    if($_GET['action'] == 'iscrizioni' ){ getIscrizioni(); }



    if($_GET['action'] == 'iscrizioniadistanza' ){ getIscrizioniAdistanza(); }



    if($_GET['action'] == 'vantaggi' ){ getVantaggi(); }

    

    if($_GET['action'] == 'guarda' ){ getGuardaPartite(); }



    if($_GET['action'] == 'nextmatch' ){ getNextMatch(); }



    if($_GET['action'] == 'lasquadra' ){ getLaSquadra(); }

    if($_GET['action'] == 'lasciarpa' ){ getLaSciarpa(); }

    





}else{

    getHome();

}

