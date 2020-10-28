<?php   

$conn = new mysqli('localhost', 'root', 'ceprevi2020','conferencias');

if ($conn->connect_error) {
    echo $error -> $conn->connect_error;
}
$conn->set_charset("utf8");

?>