<?php

    $direction ="";
    if(isset($_POST["username"]) &&  isset($_POST["password"])){
        if($_POST["username"] == "angelo" and $_POST["password"] == "angelo!" ){
            $_SESSION['admin'] = true; 
        }
        if($_POST["username"] == "sabatino" and $_POST["password"] == "s@batino" ){
            $_SESSION['admin'] = true; 
        }
        if($_POST["username"] == "luigi" and $_POST["password"] == "lu1gi" ){
            $_SESSION['admin'] = true; 
        }
        if($_POST["username"] == "giorgio" and $_POST["password"] == "gi0rgio" ){
            $_SESSION['admin'] = true; 
        }
     }

     if (isset($_SESSION['admin']) && $_SESSION['admin'] == true){
         include("part_adminHome.php");
     }else{

    
     ?>
<div class="form-mini-container" style="margin-top: 100px;
        min-height:  400px;">

            <h1>Login admin</h1>

            <form class="form-mini" method="post" action="" >

                <div class="form-row">
                    <input type="text" name="username" placeholder="username">
                </div>

                <div class="form-row">
                    <input type="password" name="password" placeholder="password">
                </div>

                <div class="form-row form-last-row">
                    <button type="submit" href="<?= $direction ?>">Login</button>
                </div>

            </form>
        </div>

        <?php 
     }


    
        


        


