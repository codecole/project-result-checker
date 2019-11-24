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



//Menu for a user who selects '2' 
else if ( !empty($text) ) {

    $csv=fopen("result.csv");

while(($student=fgetcsv($csv,100,",")) !== FALSE){

    $matric_no=$student[0];
    $name=$student[1];
    $result=$student[2];

    if($text==$matric_no){

        $response = "END ".$name." Your Result is ".$result." \n";

    }
    else{
        $response  = "CON Please enter a valid Matric number below\n";

    }

}
}

while(($student=fgetcsv($csv,100,",")) !== FALSE){

    $matric_no=$student[0];
    $name=$student[1];
    $result=$student[2];

    if($text==$matric_no){

        $response = "END ".$name." Your Result is ".$result." \n";

    }
    else{
        $response  = "CON Please enter a valid Matric number below\n";

    }

}


//echo response
header('Content-type: text/plain');
echo $response




?>

