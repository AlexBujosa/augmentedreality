<?php


/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

/*** mysql database ***/
$database = 'dbp1_c2_ra_202010143';

/*** mysql port ***/
$port = '3306';

$conn = new mysqli($hostname, $username,$password,$database,$port);




function getConnection(){
    global $conn;
    if(!$conn){
        return "Something wrong!";
    }
    return "Connected Sucessfully!";
}
       
   
?>