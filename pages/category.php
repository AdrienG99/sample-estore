<?php

session_start();
include("../common/document_head.html");
?>

<body class="body w3-auto">
<?php 
include("../common/banner.php");
include("../common/menus.html");
?>
</div></header>

<main>
    <div class="w3-container w3-border-left w3-border-right
         w3-border-blue w3-orange"
        style="padding-right:0">

        <h4>Items available in your chosen category &nbsp;&nbsp;&nbsp;&nbsp;
        
        <a class='w3-button w3-green w3-round w3-small' 
           href='pages/catalog.php'>Return to catalog list</a>
        </h4>
        <?php include("../scripts/categoryProcess.php"); ?>
    </div>
</main>
<?php include("../common/footer.html");?>
</body>
    


