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
        
          <div class="w3-half w3-border w3-border-black">
        <ul class="w3-ul">
          <li><h4 class="w3-wide"><a href="my_business.php">Home</a></h4></li>
        </ul>
        <ul class="w3-ul w3-border-top w3-border-black">
          <li><h4 class="w3-wide">e-store</h4></li>
          <li><a href="pages/estore.php">e-store Options</a></li>
          <li><a href="pages/catalog.php">Product Catalog</a></li>
          <li><a href="pages/formRegistration.php">Register</a></li>
          <li><a href="pages/formLogin.php">Login</a></li>
          <li><a href="pages/shoppingCart.php">View Shopping Cart</a></li>
          <li><a href="pages/checkout.php">Checkout</a></li>
          <li><a href="pages/logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="w3-half w3-border w3-border-black">
        <ul class="w3-ul">
          <li><h4 class="w3-wide">Be A G!</h4></li>
          <li><a href="pages/spoken_word.php">Spoken Word</a></li>
          <li><a href="pages/rap_battles.php">Rap Battles</a></li>
          <li><a href="pages/past_winners.php">Past Winners</a></li>
        </ul>
        <ul class="w3-ul w3-border-top w3-border-black">
          <li><h4 class="w3-wide">About Us</h4></li>
          <li><a href="pages/vision.php">Vision and Mission</a></li>
          <li><a href="pages/locations.php">Locations</a></li>
          <li><a title="Not yet active"
                 href="pages/feedback.php">Feedback</a></li>
        </ul>
        <ul class="w3-ul w3-border-top w3-border-black">
          <li>
            <h4 class="w3-wide">
              <a href="pages/sitemap.php">Site Map</a>
            </h4>
          </li>
        </ul>
      </div>
       </div>
    </main>
        
    <!-- footer.php -->
<?php echo file_get_contents("../common/footer.html"); ?>
          
   </body>
</html>