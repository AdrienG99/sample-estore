<?php
session_start();
if(!preg_match('/shoppingCart.php', $_SERVER['HTTP_REFERER']))
        header("Location: shoppingCart.php?productID=view");
$customerID = $_SESSION['customer_id'];
include("../common/document_head.html");
?>

<body class="body w3-auto">    

    <?php
    include("../common/banner.php");
    include("../common/menus.html");
    include("../scripts/connectToDatabase.php");
    ?>
</div> </header>

<main>
    <div class="w3-container w3-border-left w3-border-right
         w3-border-blue w3-orange">
        <?php include("../scripts/checkoutProcess.php"); ?>
    </div>   
</main>
<?php include("../common/footer.html"); ?>
</body>
</html>
