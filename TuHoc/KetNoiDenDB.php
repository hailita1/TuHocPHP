<?php

$username = "root";
$password = "";
$host = "localhost";
$database = "thuchanh";

//Mysqli
//$connection = new mysqli($host, $username, $password, $database);
//if ($connection->connect_error) {
//    die("Ket noi bi loi") . "<br>";
//} else {
//    echo "Ket noi thanh cong" . "<br>";
//}
//$sql = "SELECT * FROM customers";
//$querry = $connection->query($sql);
//while ($row = $querry->fetch_assoc()) {
//    echo $row["name"];
//}
//
//$SQL = "UPDATE ";//DELETE//INSERT
//$querry = $connection->query($sql);
//if ($querry === TRUE) {
//
//}

//PDO
$sql = "SELECT * FROM customers";
$SQL = "UPDATE ";//DELETE//INSERT
try {
    $connection = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Thuc hien cau lech select
    $querry = $connection->prepare($sql);
    $querry->execute();

    $result = $querry->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $item) {
        var_dump($item);
        die();
    }
//Kiem tra them, sua xoa duoc hay chua
    $querry = $connection->prepare($SQL);
    $result = $querry->execute();
    if ($result) {

    }

} catch (Exception $exception) {
    echo $exception->getMessage();
}

?>

<html>
<body>

</body>
</html>