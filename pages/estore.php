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
        
          <h3 class = "w3-left-align" style = "font-size:30px">
            Welcome to the e-store!
          </h3>
          <p style = "" class = "w3-left-align">
              We have lots of cool items available for you to purchase!<br>
              Feel free to use any of the following links to search the e-store.
          </p>
          
          <li>Want to browse our products? 
              <a title="Not yet active"
               href="pages/sorry.php">Click here!</a>.
          </li>
          
          <li>Ready to purchase and have an account already? To log in and shop
              <a title="Not yet active"
               href="pages/sorry.php">click here!</a>.
          </li>
          
          <li>Need to create an account so you can purchase products?
              <a title="Not yet active"
               href="pages/sorry.php">Register here!</a>.
          </li>
          
          <li>Trying to log in as a different user?
              <a title="Not yet active"
               href="pages/sorry.php">Log out here!</a>.
          </li>
          <br>
       </div>
    </main>
        
    <!-- footer.php -->
<?php echo file_get_contents("../common/footer.html"); ?>
       
   </body>
</html>