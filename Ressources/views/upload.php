<?php
$target_dir ="../uploads/";
$target_file = $target_dir.basename($_FILES["file"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


