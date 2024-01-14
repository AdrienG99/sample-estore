<?php 
session_start();
echo file_get_contents("../common/document_head.html"); ?>  
 
<body class="body w3-auto">
<!--banner.html-->
        
<?php echo file_get_contents("../common/banner.php"); ?>        
<?php echo file_get_contents("../common/menus.html"); ?>
<?php echo file_get_contents("../scripts/connectToDatabase.php"); ?>
</div> </header>
        
    <main>
      <div class="w3-container w3-border-left w3-border-right
                 w3-border-blue w3-orange"
           style="padding-right:0">
          <?php 
          $_SESSION['POST_SAVE'] = $_POST;
          
          echo file_get_contents("../scripts/formRegistrationProcess.php"); 
          ?>
      </div>
    </main>
        
    <!-- footer.php -->
<?php echo file_get_contents("../common/footer.html"); ?>
</body>
</html>
       




