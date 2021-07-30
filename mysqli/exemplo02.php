<?php 

$conn = new mysqli("localhost", "root",  "", "dbphp7");

if ($conn->connect_error){

    echo "error: " . $conn->connect_error;

}


$result = $conn->query("select * from tm_usuarios order by deslogin");

$data = array();



while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

    array_push($data, $row);

}

echo json_encode($data);    



?>