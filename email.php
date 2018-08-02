<?php 
if ( isset( $_POST["submit"] ) ) {
    $to = "publicity.spardha@iitbhu.ac.in"; 
    $from = $_POST["email"]; 
    $name = $_POST["name"];
    $college = $_POST["college"];
     $message = $_POST["comment"];
     $subject  = "Contact Form Submission:". $email;
     $headers = "From:     " . $name;
     mail($to , $subject , $message , $headers );
     echo "Mail Sent. Thank you ". $name . ", we will contact you shortly.";
	}
?>