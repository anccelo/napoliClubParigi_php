<?php
SESSION_START();
?>

<!doctype html>
<html lang="en">

  <?php include('parts/part_head.php'); ?>

  <body>
      <header role="" style="position:fixed;background-color: rgb(58, 174, 247);">
        
          <?php 
          if(!isset($admin)){
            include('parts/part_nav.php');
          }else{
            include('parts/part_navAdmin.php');
          }
           ?> 
      </header>

      <div class="main-content" style="padding-top:10px;">
          <?php include($content); ?> 
      </div>
      

    <!-- END section -->



    <section class="school-features d-flex" style="background-color: grey;" >

      <div class="inner">
        <div class="media d-block feature" >
          <a href="index.php?action=nextmatch">
           <div class="media-body">
              <h2 class="mt-0" >NEXT MATCH</h2>
             <!--cancellarePerripristino 
             <h3>SABATO <?= date("08-12-2018") ?> 15:00</h3>
              <div class="infopartita" style="margin:auto;display:flex;justify-content: space-around; width:100% text;text-align: center;">
                      <div class="incasa"   >
                    <!--
                          <img style="width:100px;height:100px;" src="views/assets/images/stemmi/stemmaAtalanta.svg.png"/>
                          <p>Atalanta</p>
                         -cancellarePerRipristino->
                         <img style="width:100px;height:100px;" src="views/assets/images/stemmi/stemmaNapoli.svg.png"/>
                          <p>NAPOLI</p>
                        
                      </div>
                      <div class="competizione" >
                      <img style="width:50px;" src="views/assets/images/stemmi/stemmaSerieA.svg.png"/> 
                        <!--   <img style="width:50px;" src="views/assets/images/stemmi/stemmaChampions.svg.png"/>  -cancellarePerRipristino->
                       
                      </div>
                     
                      <div class="intrasferta"  >
                         
                      <img style="width:100px;height:100px;" src="views/assets/images/stemmi/stemmaFrosinone.svg.png"/>
                          <p>Frosinone</p>
                       <!--
                          <img style="width:100px;height:100px;" src="views/assets/images/stemmi/stemmaNapoli.svg.png"/>
                          <p>NAPOLI</p>
                       -cancellarePerRipristino->
                      </div>
                  
              </div>
               cancellarePerRipristino   -->  
            </div>
          </a>
        </div>
        
        <div class="media d-block feature" style="background-color: navy;padding-left:5px;">
          <a href="index.php?action=lasciarpa">
            <div class="media-body">
              <h2 class="mt-0">IN PRIMO PIANO</h2>
              <h3>LA SCIARPA DEL CLUB</h3>
              <img id="primopiano" style="width:100%" src="views/assets/images/lasciarpa.jpg" alt="la sciarpa del napoli club parigi"/>
            </div>
          </a>
        </div>

        <div class="media d-block feature"  style="padding-left:5px;text-align: -webkit-center;">
          <a href="index.php?action=guarda">
            <div class="media-body">
              <h2>GUARDA LE PARTITE CON NOI</h2>
            </div>
          </a>
        </div>

        <div class="media d-block feature" style="background-image: url(views/assets/images/rueDeNaples.jpg);background-position: 50% 35%;min-height: 250px; ">
          <div class="icon"><span class=""></span></div>
          <div class="media-body">
            <h3 class="mt-0"></h3>
            <p></p>
          </div>
        </div>

      </div>
    </section>
    <!-- END section -->

    <!-- footer-->
    <?php
      include('parts/part_footer.php');
    ?>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="views/assets/js/jquery-3.2.1.min.js"></script>
    <script src="views/assets/js/jquery-migrate-3.0.0.js"></script> 
    <script src="views/assets/js/popper.min.js"></script>
    <script src="views/assets/js/bootstrap.min.js"></script>
    <script src="views/assets/js/owl.carousel.min.js"></script>
    <script src="views/assets/js/jquery.waypoints.min.js"></script>
    <script src="views/assets/js/jquery.stellar.min.js"></script>

  
    <script src="views/assets/js/main.js"></script>

  </body>
</html>