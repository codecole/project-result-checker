<?php
// Reads the variables sent via POST


$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];


//This is the first menu 
if ( $text == "" ) {
    $response  = "CON Welcome, To check your result enter your matric number below\n";
    // $response .= "1. My Account \n";
    // $response .= "2. Show My Result";

}




// Menu for a user who selects '1'

// if($text=="22"){
//     // User has entered a matric number

//     // Check if matric number is valid

//     // Get student result usng matric number from database

//     // 
//     $response="Hi Cole, Your result is: ENG:A1,MTH:B2 \n";

// }

else if ($text == "1") {
    $response  = "CON Choose account information you want to view \n";
    $response .= "1. Account Number \n";
    $response .= "2. Account Balance \n";
}



//Menu for a user who selects '2' 

else if ($text == "2324") {
    //note that we are using the $phoneNumber variable we got form the HTTP POST data.
    $response = "END Your Result is Eng:234,Bio:34 \n";
}




//Menu for a user who selects '1' from second menu


else if ($text == "1*1") {
    $response = "END Your account number is ACC1001\n";
}



//Menu for a user who selects '2' from second menu

else if ($text == "1*2") {
    $response = "END Your balance is USD 10.78\n";
}




//echo response
header('Content-type: text/plain');
echo $response




?>

