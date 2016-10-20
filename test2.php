<?php
function dbconnect(){

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "bgonlinetraining";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {

        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

$c = dbconnect();

$result_array = array();

$sql = "SELECT id, email, firstname, lastname, city, country, zip, church, coursecatidnumber, date_transmitted FROM bgea_churchgroup_enrollment";

$result = $c->query($sql);

while ($row = $result->fetch_assoc()) {

    $r = array();

    $r['id'] = $row['id'];

    $r['email'] = $row['email']; 

    $r['firstname'] = $row['firstname'];

    $r['lastname'] = $row['lastname'];

    $r['city'] = $row['city'];

    $r['country'] = $row['country'];

    $r['zip'] = $row['zip'];

    $r['church'] = $row['church'];

    $r['coursecatidnumber'] = $row['coursecatidnumber'];

    $r['date_transmitted'] = $row['date_transmitted'];


    $result_array[$row['id']] = $r;



}

 // print_r($result_array);

exit(json_encode($result_array));


?>

	
	
