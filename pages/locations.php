<!DOCTYPE html>
<html lang = "en">
<!--document_head.html-->

<?php echo file_get_contents("../common/document_head.html"); ?>  
 
<body class="body w3-auto">
<!--banner.html-->
        
<?php echo file_get_contents("../common/banner.php"); ?>        
             
<!-- menus -->
<?php echo file_get_contents("../common/menus.html"); ?>
     </div> </header>
        
    <main>
      <div class="w3-container w3-border-left w3-border-right
                 w3-border-blue w3-orange"
           style="padding-right:0">
        
          <h3 class = "w3-center" style = "font-size:30px">
            Locations
          </h3>
          
          <p>As of right now there is only one location! But we're looking 
              to expand into all major cities in Canada.<br><br>Current Location:
              <br>4567 Inglis St<br>Halifax, NS<br>B3H 3C3<br>+1 (782)-765-4321
          </p>
          
       </div>
    </main>
        
    <!-- footer.php -->
<?php echo file_get_contents("../common/footer.html"); ?>

</body>
</html>