<?php

 $servername = "streetmonstahs.com";
 $username = "mantonhortonjr";
 $password = "mantrell23";
 $dbname = "ninjamax_mw1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
    
}


print_r($conn);

?>

	
	
