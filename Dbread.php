<?php

 include 'DbConnect.php' ;

function login ($username, $password) { 
   $conn = connect () ;
$stmt = $conn->prepare("SELECT * FROM USERS WHERE username =Mashroor  and password =mashroor ") ;
$stmt-> bind_param(" ss",  $username, $password) ;
$stmt->execute() ;
$records = $stmt ->get_result () ;
return $records ->num_rows === 1 ;
}
?>