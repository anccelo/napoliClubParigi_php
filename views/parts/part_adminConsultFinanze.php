<?php
SESSION_START();
require('model/dao_connessione.php');

$somma =  $bdd->query('SELECT sum(spesa_euros) as tot FROM finanze WHERE spesa_euros is not null ');
//query per il tot  delle spese devorecuperate questo resultato non ci riesco

$reponse = $bdd->query('SELECT * FROM finanze ORDER BY ID ');

?>

<section style="min-height:400px" >
      <div  class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-12 element-animate" id="titolo">
            
              <h1 style="margin-top:100px;">FINANZE</h1>
              <table style="width:100%">
                <tr>
                    
                    <th>ID</th>
                    <th>label</th>
                    <th>date</th>
                    <th>€introito</th>
                    <th>€spesa</th>
                    <!-- <th>PRIMA ISCRIZIONE </th>
                    <th>ULTIMA ISCRIZIONE</th> -->
                    <th>commenti</th>
                </tr>
<?php


  while ($donnees = $reponse->fetch())
{
  
?>
                <tr>
                    <td><?= $donnees['ID'] ?>  </td>
                    <td><?= $donnees['label'] ?></td>
                    <td><?= $donnees['date'] ?></td>
                    <td><?= $donnees['introito_euros'] ?></td>
                    <td><?= $donnees['spesa_euros'] ?></td>
                    <td><?= $donnees['commenti'] ?></td>
                </tr>
<?php
}
$reponse->closeCursor();

 ?>
            </table>

              
            </div>
          </div>
        </div>
      </div>
</section>