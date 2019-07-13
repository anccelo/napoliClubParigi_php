<?php
SESSION_START();
require('dao_connessione.php');



//
//la prossima partita
/*
SELECT *
FROM partita
WHERE dataPartita > sysdate()
ORDER BY dataPartita
LIMIT 1
*/



    //quante tessere fin ora:
    $reponse = $bdd->query('SELECT * FROM partita WHERE dataPartita > sysdate() ORDER BY dataPartita LIMIT 1;'); 
    while ($donnees = $reponse->fetch()){
    $_SESSION['id']           = $donnees['id'];
    $_SESSION['avversaria']   = $donnees['avversaria'];
    $_SESSION['dataPartita']  = $donnees['dataPartita'];
    $_SESSION['incasa']       = $donnees['incasa'];
    $_SESSION['competizione'] = $donnees['competizione'];
    $_SESSION['location']     = $donnees['location'];
    }

    // pagina salvata che non andava + all'imporvviso
/*
<div class="infopartita" style="display:flex;justify-content: space-around; width:100% text;text-align: center;">
                                <div class="incasa"   >
                                <?php 
                                    if($_SESSION['incasa']){
                                ?>
                                        <img style="width:150px;height:150px;" src="views/assets/images/stemmi/stemmaNapoli.svg.png"/>
                                        <p>NAPOLI </p> 
                                <?php
                                    }else{
                                 ?>
                                        <img style="width:150px;height:150px;" src="views/assets/images/stemmi/stemma<?php echo $_SESSION['avversaria']; ?>.svg.png"/>
                                        <p><?php echo strtoupper($_SESSION['avversaria']); ?></p>
                                <?php
                                    }
                                ?> 
                                </div>
                                <div class="competizione" >
                                   <!-- <img style="width:80px;" src="views/assets/images/stemmi/stemmaSerieA.svg.png"/> -->
                                   <img style="width:80px;" src="views/assets/images/stemmi/stemma<?php echo $_SESSION['competizione']; ?>.svg.png"/>
                                </div>
                                <div class="intrasferta"  >
                                <?php 
                                    if(!$_SESSION['incasa']){
                                ?>
                                        <img style="width:150px;height:150px;" src="views/assets/images/stemmi/stemmaNapoli.svg.png"/>
                                        <p>NAPOLI </p> 
                                <?php
                                    }else{
                                 ?>
                                        <img style="width:150px;height:150px;" src="views/assets/images/stemmi/stemma<?php echo $_SESSION['avversaria']; ?>.svg.png"/>
                                        <p><?php echo strtoupper($_SESSION['avversaria']); ?></p>
                                <?php
                                    }
                                ?>
                                
                                </div>
                            </div>

    

    