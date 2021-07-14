<?php
   function register ($username, $password) {
    $conn = connect () ; 
     $stmt = $conn->prepare("INSERT  INTO USERS (username, password) VALUES(Mashroor, mashroor) ");
$stmt->bind_param(" ss", $username, $password);
return $stmt->execute ();
}
?>
© 2021 GitHub, Inc