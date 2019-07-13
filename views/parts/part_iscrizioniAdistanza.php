
<section class="iscrizione18" style="margin-top:100px;">
    <div  class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">
                <div class="mb-12 element-animate" id="titolo">
                <h2 style="margin-top:;" style="text-align:center;"><strong>ISCRIZIONI A DISTANZA</strong></h2>
                    <div id="boxdist" class="box2" style="display:flex; flex-wrap: nowrap; background-color: ;text-align: left; ">
                        <div class='laterale'style="background-color: grey;color:black;" >
                            <div class="infoinscrizione">
                                  <p>apertura: <strong>25 agosto 2018</strong></p>
                                  <p>chiusura: <strong>30 settembre 2018</strong></p>
                            </div>
                            <div class="infoinscrizione">
                                <ul>
                                    <p>quota socio:<strong>15 €</strong></p>  
                                    <li>da vicino, in occasione delle partite</li>
                                    <li><a href="index.php?action=iscrizioniadistanza" style='color:navy'>a distanza tramite il circuito PayPall(1€ in + per la spedizione)</a></li>
                                </ul>
                            </div>
                            <div class="infoinscrizione">
                                <ul>
                                    <p>quota figlio: <strong>3 €</strong></p>
                                    <li>da vicino, in occasione delle partite</li>
                                    <li><a href="index.php?action=iscrizioniadistanza" style='color:navy'>a distanza ma solo in combinazione della tessera principale</a></li>  
                                </ul>
                            </div>
                        </div>
                        <section class="articolo" style="width:100%; border-style: solid; background-color:; ; padding:10px;padding-top:10px; ">
                        <img src="views/assets/images/tessera.jpg" alt="NCP2018"/ style="float:right; width:40%" />
                            <div>
                                <h5><strong>E' possibile iscriversi al club anche  tramite la garanzia del circuito PayPall</strong></h5>
                                <p> <strong> 0)</strong>Srivici un email a <strong> napoliclubprigi@gmail.com</strong> indicandoci l'intenzione di iscriverti
                                a distanza. Ti invieremo un codice da rientrare per accedere alle fasi da 1-4 descritte qui di seguito<p>
                                <p><strong>1)</strong>Una volta che ti avremo fornito il codice inseriscilo nello spazio apposito  e apparirà un formaulario d'iscrizione e il bottone
                                per l'accesso al circuito paypall<p>
                                <p><strong>2)</strong>Riempi il formulario qui in basso;<strong> solo i campi di nome, cognome e email sono obligatori </strong>,
                                gli altri campi ci sono utili per conoscsere meglio la composizione del club.
                                <br/><strong>3)</strong>Una volta inviato il formulario clicca sul bottone del pagamento di Paypall e segui le istruzioni.<br/>
                                E' possibile effettuare il pagamento<strong> anche senza essere registrati e avere un conto paypall</strong>.
                                <br/><strong>4)</strong>Una volta l'iscrizione finalizata ti contatteremo tramite email per conoscere le coordinate dove farti inviarti la tessera.
                                <br/>per qualsiasi domanda non esitare a contattarci a <strong> napoliclubparigi@gmail.com</strong><p>
                            </div>
                            <div class='formEpayp' style='display: flex;flex-direction: column;'>
                                <div class='form'>
                                    <?php 
                                    //non ha chiesto li'scrizione
                                    if(!isset($_SESSION['faseZero']) or  $_SESSION['faseZero'] != true ){
                                        include('part_formInsertcode.php');
                                    }else{
                                        if (!isset($_SESSION['primaFaseFatta']) or $_SESSION['primaFaseFatta'] != true) {
                                            include('part_formIscrizioneAdistanza.php');
                                        }else{
                                            ?>
                                            <p>##############</p>
                                            <p class="lead" style="font-size: 2em;font-weight: bold"><?= $infoBDD ?></p>
                                            <?php 
                                        }
                                      ?>
                                    
                                </div>
                                <div class='payp' style ="margin: 20px auto 0px;">
                                    <div class="paypall" style="margin-left:10px">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="EDLB6356N7AGJ">
                                        <table>
                                            <tr><td><input type="hidden" name="on0" value="iscrizioni">iscrizioni</td></tr><tr><td><select name="os0">
                                                <option value="socio">socio €16,00 EUR</option>
                                                <option value="socio + figlio">socio + figlio €19,00 EUR</option>
                                                <option value="socio + 2 figli">socio + 2 figli €22,00 EUR</option>
                                            </select> </td></tr>
                                        </table>
                                        <input type="hidden" name="currency_code" value="EUR">
                                        <input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                                    </form>

                                    </div>
                                <div>
                                <?php
                                }
                                ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


