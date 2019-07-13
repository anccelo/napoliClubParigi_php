<?php
SESSION_START();

if(isset($_SESSION["loginAdmin"]) && isset($_SESSION["passwordAdmin"]) ){
    if($_SESSION["loginAdmin"] == "angelo" && ($_SESSION["passwordAdmin"]== "!angelo"){
        $_SESSION("directionadmin")="index.php?action=inscription";
    }else{
        $_SESSION("directionadmin")="";
    }
}else {
    $_SESSION("directionadmin")="";
}

