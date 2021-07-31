<?php
// BnC game - Random number 
include('database.php');
$db=$conn;// database connection  

//legal input values
 $fullName     = legal_input($_POST['fullName']);

   
if(!empty($fullName)){
    //  Sql Query to insert user data into database table
    Insert_data($fullName);
}else{
 echo "All fields are shown";
}
 
// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

// // function to insert user data into database table
 function insert_data($fullName){
 
     global $db;

      $query="INSERT INTO usertable(fullName) VALUES('$fullName')";

     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "User data was inserted successfully";
       if ($fullName === 'Adil'){
           echo " jdska";
       }
     }
     else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }

?>