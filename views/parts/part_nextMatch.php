<section class="iscrizione18" style="margin-top:100px;">
    <div  class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">
                <div class="mb-12 element-animate" id="titolo">
                    <h2 style="margin-top:;" style="text-align:center;"><strong>PROSSIMA PARTITA</strong></h2>
                    <div id="boxdist" class="box2" style="display:flex; flex-wrap: nowrap; background-color: ;text-align: left; ">
                        <div class='laterale'style="background-color: grey;color:black;" >
                            
                        </div>
                        <section class="articolo" style="width:100%; border-style: solid; background-color:; ; padding:10px;padding-top:10px; ">
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
                            <div class="infopratiche">
                                <p>Domenica 16 DICEMBRE 2018 ore   18:00 </p>
                                <p>Noi invece ECCEZIONALMENTE saremo al: <br/> <!--<strong>Bambolina caffé</strong>, 13 rue Rougemeont 75009 Paris
                                <br/>Metro' Linea 8 e 9 stazione "Grands Boulevards"</p> -->
                                <strong>Longchamp </strong>, 9 Rue du Faubourg Montmartre , 75009 Paris 
                               
                                <p>per prenotazioni inviaci un email a <strong>napoliclubparigi@gmail.com</strong>, 
                                ma leggi prima <a href="index.php?action=guarda" >la procedura di prentazione</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>