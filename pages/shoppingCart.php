<?php
session_start();
$customerID = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "";

$productID = $_GET['productID'];

if ($customerID = "") {
    $_SESSION['purchasePending'] = $productID;
    header("Location: formLogin.php");
}

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
         w3-border-blue w3-orange"
         style="padding-right:0">
        <h4>
            <strong>Your Shopping Cart</strong>
        </h4>
        <?php include("../scripts/shoppingCartProcess.php"); ?>
    </div>   
</main>
<?php include("../common/footer.html"); ?>
</body>
</html>
