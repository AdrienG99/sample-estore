<?php
session_start();
$loggedInAtStartOfLogout = isset($_SESSION['customer_id']) ? true : false;
if($loggedInAtStartOfLogout){
    session_unset();
    session_destroy();
}
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
        
          <h4>Logout</h4>
          <?php
          if ($loggedInAtStartOfLogout)
              echo
              '<p>Thank you for visiting our estore.
             You have successfully logged out.</p>
          <p>If you wish to log back in,
            <a href="pages/formLogin.php">click here</a>.</p>
          <p>To browse our product catalog,
            <a title="Not yet active"
               href="pages/sorry.php">click here</a>.</p>';
          else echo
              '<p>Thank you for visiting The G-Store!.
             You have not yet logged in.</p>
          <p>If you do wish to log in,
            <a href="pages/formLogin.php">click here</a>.</p>
          <p>Or you can browse our product catalog without logging in by
            <a title="Not yet active"
               href="pages/sorry.php">clicking here</a>.</p>';
          ?>
        
        
      </div>
    </main>
        
    <!-- footer.php -->
<?php echo file_get_contents("../common/footer.html"); ?>
           
   </body>
</html>