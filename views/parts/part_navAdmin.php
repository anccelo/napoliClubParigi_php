<?php

function adminTrue($path){
  if (isset($_SESSION['admin']) && $_SESSION['admin'] == true){
      echo $path;
  }else{
      echo "#";
  }
  
}
?>

<nav class="navbar navbar-expand-md navbar-dark bg-light" >
        <div class="container">
          <img src="views/assets/images/ncp-logo.svg" alt="NCP2018" style="width:8%"/>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05" style="font-weight: bold">
            <ul class="navbar-nav mx-auto" >
              <li class="nav-item">
                <a class="nav-link active" href="index.php?action=admin">Home Admin</a>
              </li>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=inscription">Iscrizioni</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">rinnovo iscrizioni</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?action=consultation" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">consultazioni</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="index.php?action=consultation">soci inscritti</a>
                  <a class="dropdown-item" href="index.php?action=consultfinanze">entrate&uscite</a>
                  <a class="dropdown-item" href="#">ecc ecc</a>
                  <a class="dropdown-item" href="#">ecc ecc</a>
                  <a class="dropdown-item" href="#">ecc ecc</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">matchs</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">modifica</a>
                  <a class="dropdown-item" href="#">consulta</a>
                  <a class="dropdown-item" href="#">ecc ecc</a>
                  <a class="dropdown-item" href="#">ecc ecc</a>
                  <a class="dropdown-item" href="#">ecc ecc</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=finanze">Entrate/Uscite</a>
              </li>
            </ul>
            
            <ul class="navbar-nav absolute-right">
              <li class="nav-item">
                <a href="/" class="nav-link"><em>HOME</em></a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link"><em>exit</em></a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

   