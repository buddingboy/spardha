<?php
$con = mysqli_connect ("127.0.0.1" , "spardhaiitbhu" , "@2015Spardha");
mysqli_select_db( $con , "spardha" );
if ( isset( $_POST["submit"] ) ) {
$checkbox1=$_POST["opt"];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$mail1 = "publicity.spardha@iitbhu.ac.in"; 
$mail2 = $_POST["email"];
$message2 = "You have been successfully registered for Spardha'15. Please visit our website www.spardha.co.in for latest information. ";
$subject  = "Registration Confirmed";
$message1 = "One more team registered.Keep checking the details on Godaddy Server.";
$headers = "From: Spardha '15 Team    " ;
$sql = "INSERT INTO registration (name, college , designation, email, mobile,city, games ) VALUES ('".$_POST["name"]."','".$_POST["college"]."','".$_POST["designation"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["city"]."','".$chk."')";
if (mysqli_query($con, $sql)) {
    echo "Congrats!!You have been successfully registered for Spardha'15.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
 mail($mail1 , $subject , $message1 , $headers );
 mail($mail2 , $subject , $message2 , $headers );

mysqli_close($con);
}
?>

