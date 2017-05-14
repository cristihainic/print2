<?php
include 'credentials.php';

$nume = $_POST['nume'];
$cnp = $_POST['cnp'];
$email = $_POST['email'];
$platit = isset($_POST['platit']);

try {
    
    $connection = new PDO("mysql:host=$dbhost;charset=utf8;dbname=$dbname", "$dbuser", "$dbpassword");
    
    $query = $connection->prepare("INSERT INTO `cursanti` (`ID`, `Nume`, `CNP`, `Email`, `Platit`) VALUES (NULL, '$nume', '$cnp', '$email', '$platit');");
    
    $query->execute();
    
}
catch(PDOException $e) {
    die("Impossible to connect: ".$e->getMessage());
}

header("Location: inscriere.php"); // redirectionare

?>