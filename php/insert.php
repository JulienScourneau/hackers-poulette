<?php
require('../vendor/autoload.php');

use Rakit\Validation\Validator;

include 'database.php';
include 'upload.php';

$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$description = htmlspecialchars($_POST['description']);
$file = "";

$userInput = [
    'name' => $name,
    'firstname' => $firstname,
    'mail' => $mail,
    'description' => $description
];

$validator = new Validator;
$validation = $validator->make($userInput, [

    'name' => 'required',
    'firstname' => 'required',
    'mail' => 'required|email',
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
    $upload = uploadPicture();
    if ($upload == 1) {
        $file = $_FILES['file']['name'];
    }
    $insert = "INSERT INTO `contact`(`name`, `firstname`, `mail`, `file`, `description`) VALUES(?,?,?,?,?)";
    if (!empty($db)) {
        $insert = $db->prepare($insert);
        $insert->execute(array(
            $name,
            $firstname,
            $mail,
            $file,
            $description
        ));
        $status = "ok";
    } else {
        $status = "error";
    }
    $db = null;

}
?>

<head>
    <title>Contact</title>
    <link rel="stylesheet" href="../assets/style/css/style.css">
</head>
<body>
<?php if ($status = "ok") {
    echo "
    <article class='article__status'>
            <p class='article__status__text'>Votre demande à bien été prise en compte, vous recevrez une réponse dans les plus bref délai.</p>
    </article>";
} else {
    echo "
    <article class='article__status'>
            <p class='article__status__text'>Une erreure est survenue, veuillez réessayer. </p>
    </article>";
}
?>
</body>
