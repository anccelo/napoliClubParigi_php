<?php
SESSION_START();
require('model/dao_connessione.php');

$reponse = $bdd->query('SELECT * FROM persona ORDER BY numero_tessera ');

?>

<section style="min-height:400px" >
      <div  class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-12 element-animate" id="titolo">
            
              <h1 style="margin-top:100px;">Soci Iscritti</h1>
              <table style="width:100%">
                <tr>
                    <!-- <th>ID</th> -->
                    <th>NOME</th> 
                    <th>COGNOME</th>
                    <th>N°TESSERA</th>
                    <th>EMAIL</th>
                    <!-- <th>ISCRITTO</th> -->
                    <th>TYPE</th>
                    <!-- <th>PRIMA ISCRIZIONE </th>
                    <th>ULTIMA ISCRIZIONE</th> -->
                    <th>DOMICILIO</th>
                    <th>ANNO NASCITA</th>
                    <th>GENERE</th>
                    <!-- <th>TEL FRANCE</th>
                    <th>TEL ESTERO</th>
                    <th>COMMENTI</th> -->
                </tr>
<?php

  while ($donnees = $reponse->fetch())
{
    $iscritto = "false";
    if($donnees['is_iscritto'] == 1){
        $iscritto ="true" ;
    }

?>
                <tr>
                    <!-- <td><?= $donnees['ID'] ?></td> -->
                    <td><?= $donnees['nome'] ?></td>
                    <td><?= $donnees['cognome'] ?></td>
                    <td><?= $donnees['numero_tessera'] ?></td>
                    <td><?= $donnees['email'] ?></td>
                    <!-- <td><?= $iscritto ?></td> -->
                    <td><?= $donnees['tipo_socio'] ?></td>
                    <!-- <td><?= $donnees['data_prima_iscrizione'] ?></td>
                    <td><?= $donnees['data_ultima_iscrizione'] ?></td> -->
                    <td><?= $donnees['citta_domicilio'] ?></td>
                    <td><?= $donnees['anno_nascita'] ?></td>
                    <td><?= $donnees['genere'] ?></td>
                    <!-- <td><?= $donnees['telefono_francese'] ?></td>
                    <td><?= $donnees['telefono_estero'] ?></td>
                    <td><?= $donnees['commenti'] ?></td> -->
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