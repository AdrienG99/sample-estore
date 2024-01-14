<header class="w3-border w3-border-blue w3-orange">
    
    <div> 
      <div class="w3-threequarter">      
          <img src="images/storelogo.png" alt="Store Logo" style="width: 85%">
      </div>  
        
        <div class = "w3-quarter w3-right-align">
            <div class= "w3-panel">
             <?php 
             
             $loggedIn = isset($_SESSION['customer_id']) ? true : false;
             if(isset($_SESSION['customer_id']))
                 $customerID = $_SESSION['customer_id'];
             if(isset($_SESSION['salutation']))
                 $salutation = $_SESSION['salutation'];
             if(isset($_SESSION['first_name']))
                 $firstName = $_SESSION['first_name'];
             if(isset($_SESSION['middle_initial']))
                 $middleInitial = $_SESSION['middle_initial'];
             if(isset($_SESSION['last_name']))
                 $lastName = $_SESSION['last_name'];
             if(!$loggedIn)
                 echo "<h3>Welcome!</h3>";
             else 
                 echo "<h5>$salutation $firstName $middleInitial $lastName
                     ... Welcome, $firstName!</h5>";
            ?>
    <h6 id = "datetime"> </h6>
    
    <?php 
    if ($loggedIn){
    echo "<a class='w3-button w3-blue' href='pages/logout.php'>
        Click here to log out</a>";
    }else{
    echo "<a class='w3-button w3-blue' href='pages/formLogin.php'>
        Click here to log in</a>";
    }
    ?>
    
<p class="quote w3-left-align">
  <?php include("../scripts/getquotemongo.php")?>
</p>
  </div>
   </div>

<script>
    var request = null;
    function getCurrentTime()
    {
      request = new XMLHttpRequest();
      var url = "scripts/time.php";
      request.open("GET", url, true);
      request.onreadystatechange = updatePage;
      request.send(null);
    }

    function updatePage()
    {
        if (request.readyState == 4)
        {
            var dateDisplay = document.getElementById("datetime");
            dateDisplay.innerHTML = request.responseText;
        }
    }
    getCurrentTime();
    setInterval('getCurrentTime()', 60000)
    </script>
 