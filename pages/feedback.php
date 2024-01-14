<!--document_head.html-->

<?php 
session_start();
$_SESSION['SECURE'] = "!@#$^%FDSSDFWQR@";
$_SESSION['ORIGIN'] = $_SERVER['PHP_SELF']; 
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
        <article>
          <h3 class = "w3-center" style = "font-size:30px">
            Tell us what you think! Or ask us a question.
          </h3>
          
          <p class=" w3-center">Each * is a required field.</p>
          <form id="contactForm"
              action="scripts/feedbackprocess.php"
              method="post">
         <div class="w3-row">
           <div class="w3-third w3-container w3-wide">
             <h4>Salutation:<span class="w3-text-red">*</span></h4>
           </div>
           <div class="w3-twothird w3-container">
             <p>
               <select name="salutation" required>
                 <option value="" selected disabled hidden>
                   Choose one
                 </option>
                 <option value="Mrs.">Mrs.</option>
                 <option value="Ms.">Ms.</option>
                 <option value="Mr.">Mr.</option>
                 <option value="Dr.">Dr.</option>
                </select>
             </p>
           </div>
         </div>               
        <div class="w3-row">
          <div class="w3-third w3-container w3-wide">
            <h4>First Name:<span class="w3-text-red">*</span></h4>
          </div>
          <div class="w3-twothird w3-container">
            <p>
                            <input type="text" name="firstName" required
                     title="Initial capital, spaces, hyphens&#013;and
                     apostrophes allowed."
                     style="width: 100%;"
                     pattern="^[A-Z][A-Za-z '-]*$">
            </p>
          </div>
        </div>               
        <div class="w3-row">
          <div class="w3-third w3-container w3-wide">
            <h4>Last Name:<span class="w3-text-red">*</span></h4>
          </div>
          <div class="w3-twothird w3-container">
            <p>
                            <input type="text" name="lastName" required
                     title="Initial capital, spaces, hyphens&#013;and 
                     apostrophes allowed."
                     style="width: 100%;"
                     pattern="^[A-Z][A-Za-z '-]*$">
            </p>
          </div>
        </div>               
        <div class="w3-row">
          <div class="w3-third w3-container w3-wide">
            <h4>E-mail Address:<span class="w3-text-red">*</span></h4>
          </div>
          <div class="w3-twothird w3-container">
            <p>
              <input type="text" name="email" required
                     title="x@y.z x and y alphnumeric, . or -, z 2 or 3 letters"
                     style="width: 100%;"
                     pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$">
            </p>
          </div>
        </div>               
        <div class="w3-row">
          <div class="w3-third w3-container w3-wide">
            <h4>Phone Number:</h4>
          </div>
          <div class="w3-twothird w3-container w3-wide">
            <p>
              <input type="text" name="phone"
                     title="xxx-yyy-zzzz, area code xxx- optional"
                     style="width: 100%;"
                     pattern="^(\d{3}-)?\d{3}-\d{4}$">
            </p>
          </div>
        </div>               
        <div class="w3-row">
          <div class="w3-third w3-container w3-wide">
            <h4>Subject:<span class="w3-text-red">*</span></h4>
          </div>
          <div class="w3-twothird w3-container">
            <p>
              <input type="text" name="subject" required
                     style="width: 100%;">
            </p>
          </div>
        </div>               
        <div class="w3-row">
          <div class="w3-third w3-container w3-wide">
            <h4>Comments:<span class="w3-text-red">*</span></h4>
          </div>
          <div class="w3-twothird w3-container">
            <p>
              <textarea name="message" rows="6" required
                        style="width: 100%;"></textarea>
            </p>
          </div>
        </div>               
        <div class="w3-row">
          <div class="w3-third w3-container">
            <p>&nbsp;</p>
          </div>
          <div class="w3-twothird w3-container">
            <h6>
              Please check if you would like us to get
              back to you: <input type="checkbox" name="reply">
            </h6>
          </div>
        </div>               
        <div class="w3-row">
          <div class="w3-third w3-container">
            <p>&nbsp;</p>
          </div>
          <div class="w3-twothird w3-container">
            <p>
              <input type="submit"
                     value="Send Feedback">
              <input type="reset"
                     value="Reset Form">
            </p>
          </div>
        </div>               
        </form>
      </article>
        
          
       </div>
    </main>
        
    <!-- footer.php -->
<?php echo file_get_contents("../common/footer.html"); ?>

</body>
</html>