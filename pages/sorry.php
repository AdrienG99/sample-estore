<?php
session_start();
echo file_get_contents("../common/document_head.html"); 
?>  
 
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
        
          <h1 class = "w3-center" style = "font-size:60px">
            Sorry!
          </h1>
          <p style = "font-size:30px" class = "w3-center">
              This page has not yet been activated<br>
              Or has been temporarily deactivated.
          </p>
        
        
      </div>
    </main>
        
    <!-- footer.php -->
<?php echo file_get_contents("../common/footer.html"); ?>
           
   </body>
</html>
