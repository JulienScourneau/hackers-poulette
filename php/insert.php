<?php
require('../vendor/autoload.php');

use Rakit\Validation\Validator;

include 'database.php';

//header("location: ../index.php");
$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$file = "file";
//$file = $_POST['file'];
$description = htmlspecialchars($_POST['description']);

$userInput = [
    'name' => $name,
    'firstname' => $firstname,
    'mail' => $mail,
    'file' => $file,
    'description' => $description
];

$validator = new Validator;
$validation = $validator->make($userInput, [

    'name' => 'required',
    'firstname' => 'required',
    'mail' => 'required|email',
    'file' => '',//required|upload_file:png,jpeg
    'description' => 'required'
]);
$validation->validate();

if ($validation->fails()) {
    $errors = $validation->errors();
    echo "<pre>";
    print_r($errors->firstOfAll());
    echo "</pre>";
    exit;
} else {
    $db = getDbconnection();
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
//        echo json_encode(
//            "['error' => 'error']"
//        );
        echo "add successfull";
//        :
        $db = null;
        //exit();
    }
    echo "error";
}
