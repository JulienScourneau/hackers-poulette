<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

function uploadPicture()
{
    $target_dir = "../assets/pictures/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = null;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Check file size
    if ($_FILES["file"]["size"] > 2097152) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Sorry, only JPG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {
        $tmpName = $_FILES['file']['tmp_name'];
        $uniqueName = md5(uniqid(rand(), true));
        $fileName = $target_dir . $uniqueName . "." . $imageFileType;

        if (move_uploaded_file($tmpName, $fileName)) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }
    return $uploadOk;
}