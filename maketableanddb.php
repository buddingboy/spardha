<?php 
$con = mysqli_connect ("127.0.0.1" , "spardhaiitbhu" , "@2015Spardha" );
if ( !$con  ){
die ('Could not connect :' . mysqli_error());
}
mysqli_query ($con , "CREATE DATABASE spardha" );
mysqli_select_db( $con , "spardha" );
$sql = "CREATE TABLE registration ( 
name VARCHAR(50) ,
college VARCHAR(50) ,
city VARCHAR(50) ,
designation VARCHAR(50) ,
email VARCHAR(50) ,
mobile VARCHAR(50) ,
games VARCHAR(200)  
)";
mysqli_query( $con , $sql );
mysqli_close($con);
?>