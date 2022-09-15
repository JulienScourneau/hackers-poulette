<?php

include 'database.php';
header("location: ../index.php");
$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$file = $_POST['file'];
$description = htmlspecialchars($_POST['description']);


$mail = filter_var($mail, FILTER_VALIDATE_EMAIL);

$query = "INSERT INTO `contact`(`name`, `firstname`, `mail`, `file`, `description`) VALUES(?,?,?,?,?)";
if (!empty($db)) {
    $insert = $db->prepare($query);
    $insert->execute(array(
        $name,
        $firstname,
        $mail,
        $file,
        $description
    ));
    echo json_encode(
        "['error' => 'error']"
    );
    exit();
}