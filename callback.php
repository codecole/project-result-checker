<?php
// Reads the variables sent via POST


$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];


//This is the first menu 
if ( $text == "" ) {
    $response  = "CON Welcome, To check your result enter your matric number below\n";

}




// Menu for a user who selects '1'

if($text=="22"){
    // User has entered a matric number

    // Check if matric number is valid

    // Get student result usng matric number from database

    // 
    $response="Hi Cole, Your result is: ENG:A1,MTH:B2 \n";

}


//Menu for a user who selects '2' 





//Menu for a user who selects '1' from second menu





//Menu for a user who selects '2' from second menu





//echo response
header('Content-type: text/plain');
echo $response




?>

