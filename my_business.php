<!DOCTYPE html>
<html lang = "en">
<!--document_head.html-->

<?php 
session_start();
echo file_get_contents("common/document_head.html"); ?>  
 
<body class="body w3-auto" onload= "carousel()">
<!--banner.html-->
        
<?php echo file_get_contents("common/banner.php"); ?>        
             
<!-- menus -->
<?php echo file_get_contents("common/menus.html"); ?>
</div> </header>
        
<main>
<div class="w3-container w3-border-left w3-border-right
             w3-border-blue w3-orange"
           style="padding-right:0">
        <article class="w3-half">
          <h3>
            Welcome to the G-Store!
          </h3>
          <p>
            2020 came and shocked us all..<br> 
            We were left with an abundance of time to ourselves,
            more than we've had in a while. Remember those days you were bored
            and had nothing to do? <br> Here's a site that sells things to help
            fill that time!
          </p>
          <p>Whether you're looking for games, DIY projects, new
              knick-knacks for a different vibe, or even a new experience you can find it all here!<br>
              Shop with us and go back to being a G!
            </p>
        </article>

        <div class="w3-half w3-padding w3-center ">
         <div class="w3-card-4 w3-section">
          <?php include("resources/imagesandlabels.html"); ?>
         </div>
        </div>
</div>
</main>
        
<!-- footer.php -->
 <?php echo file_get_contents("common/footer.html"); ?> 
 </body>
</html>