<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server\SQLEXPRESS;ConnectionPooling=0", "", "");

$stmt = $conn->prepare("select * from tm_usuarios order by deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {

    foreach($row as $key =>$value) {
        
        echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
    }

    echo "============================================================================</br>";
}





var_dump($results);















?>