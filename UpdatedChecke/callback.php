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

//Menu when a value is entered
else if ( !empty($text) ) {

$csv=fopen("result.csv","r");

$found=false;

while(($student=fgetcsv($csv,100,",")) !== FALSE){

    $matric_no=$student[0];
    $name=$student[1];
    $result=$student[2];

    if(!$found){

    if($text==$matric_no){

        $response = "END ".$name." Your Result is ".$result." \n";

        $found=true;

    }
    else{
        $response  = "END ".$text." Is not a valid Matric number.\n";
    }
}


}
}


//echo response
header('Content-type: text/plain');
echo $response




?>

