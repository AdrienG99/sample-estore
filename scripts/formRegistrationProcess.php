<?php
$salutation = $firstName = $middleInitial = $lastName = "";
$gender = $email = $phone = $street = "";
$city = $region = $postalCode = "";
$loginName = $password1 = $password2 = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

 $salutation = sanitized_input($_POST["salutation"]);
 $firstName = sanitized_input($_POST["firstName"]);
 
 if (!preg_match("/^[A-Z][A-Za-z '-]*$/", $firstName))
   die("Bad first name!");

 $middleInitial = sanitized_input($_POST["middleInitial"]);
 if(!preg_match("/^[A-Z](\.)?$/", $middleInitial))
   die("Bad middle initial!");
 
 $lastName = sanitized_input($_POST["lastName"]);
 if(!preg_match("/^[A-Z][A-Za-z '-] *$/", $lastName))
   die("Bad last name!");

 $gender = sanitized_input($_POST["gender"]);
 $email = sanitized_input($_POST["email"]);
 if (!preg_match("/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$/", $email))
   die("Bad e-mail!");

 $phone = sanitized_input($_POST['phone']);
 if(!empty($_POST['phone']) &&
         !preg_match("/^((\d{3}-)?\d{3}-\d{4})|\(\d{3}\)\d{3}-\d{4}$/", $phone))
   die("Bad phone number!");
 
 $street = sanitized_input($_POST["street"]);
 if(empty($_POST['street']))
     die("Missing street address!");
 
 $city = sanitized_input($_POST["city"]);
 if(empty($_POST['city']))
     die("Missing city!");
 
 $region = sanitized_input($_POST["region"]);
 if(!preg_match("/^[A-Z](2)$/", $region))
     die("Bad region!");
 
 $postalCode = sanitized_input($_POST["postalCode"]);
 if(!preg_match("/^[A-Za-z]\d[A-Z] ?\d[A-Z]\d$/", $postalCode))
     die("Bad postal code!");
 
 $loginName = sanitized_input($_POST["loginName"]);
 if(!preg_match("/^[A-Za-z][A-Za-z0-9]{5,14}$/", $loginName))
     die("Bad login name!");
 
 $password1 = sanitized_input($_POST["password1"]);
 $regex = "/^(?=.*\d)(?=.*[@^_+=[\]:])(?=.*[A-Z])(?=.*[a-z])\S{8,15}$/";
 if(!preg_match($regex, $password1))
     die("Bad first password!");
 
 $password2 = sanitized_input($_POST["password2"]);
 if(!preg_match("/^(?=.*\d)"
              . "(?=.*[@^_+=[\]:])"
              . "(?=.*[A-Z])"
              . "(?=.*[a-z])"
              . "\S{8,15}$/", $password2))
     die("Bad second password!");
}

 function sanitized_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }
 
 if(emailAlreadyExists($db, $_POST['email'])){
     echo "<h3>Sorry, but your e-mail address is already registered
           in our database. To register, you must use a different
           e-mail address.</h3>";
     
 }else if ($_POST['password1'] != $_POST['password2']){
     echo "<h3>Sorry, but the passwords you enteres do not match.
           Your attempt to register has failed. Please try again.</h3>";
     
 }else{
   $loginDateTime = date('Y-m-d h:i:s');
   $loginPassword = md5($_POST['password1']);
   $uniqueLoginName = getUniqueLoginName($db, $_POST['loginName']);
   if ($uniqueLoginName != $_POST['loginName']){
       echo "<h3>Your preferred login name already exists. So we have
            assigned \"uniqueLoginName\" as your login name.</h3>";
   }
   $firstName = str_replace("'", "\'", $firstName);
   $lastName = str_replace("'", "\'", $lastName);
   $query = "INSERT INTO as_Customer
       (
       salutation, first_name, middle_initial, last_name, gender,
       email, phone, street, city, region, postal_code,
       date_time, login_name, login_password
       )
       VALUES
       (
       '$salutation', '$firstName', '$middleInitial', '$lastName',
       '$gender', '$email', '$phone', '$street', '$city', '$region',
       '$postalCode', '$loginDateTime', '$uniqueLoginName', '$loginPassword'
        );";
   if(mysqli_query($db, $query)){
       echo "<h3>Thank you for registering with Amazing Stuff.<br>
       Your login username for our website is
       \"$uniqueLoginName\".<br>
       Remember to record the password you supplied in a safe place.<br>
       To log in and start shopping in our e-store please
       <a href='pages/formLogin.php'>click here</a>.</h3>";
   }
   else
   {
       echo "<h3>Unable to register: </h3>".mysqli_error($db).
            " Error #".mysqli_errno($db);   
   }
 }
 
 mysqli_close($db);
 
 function emailAlreadyExists($db, $email){
     $query = 
             "SELECT * FROM as_Customer
             WHERE email = '$email'";
     $customers = mysqli_query($db, $query);
     if($customers)
         $numRecords = mysqli_num_rows($customers);
     else
         $numRecords = 0;
     
     return ($numRecords > 0) ? true: false;
 }
 
 function getUniqueLoginName($db, $loginName){
     $uniqueLoginName = $loginName;
     $query = 
       "SELECT * FROM as_Customer
           WHERE login_name = '$uniqueLoginName'";
     $customers = mysqli_query($db,$query);
     if($customers)
         $numRecords = mysqli_num_rows($customers);
     else
         $numRecords = 0;
     
     if($numRecords != 0){
         $i = 0;
         do{
             $i++;
             $uniqueLoginName = $loginName.$i;
             $query =
                "SELECT * FROM as_Customer
                    WHERE login_name = '$uniqueLoginName'";
             $customers = mysqli_num_rows($customers);
             if ($customers)
                 $numRecords = mysqli_num_rows($customers);
             else
                 $numRecords = 0;
         }
         while ($numRecords != 0);
     }
     return $uniqueLoginName;
 }

 ?>