<?php

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style/css/style.css">
    <title>Contact</title>
    <script type="module" src="assets/js/main.js"></script>
</head>
<body>
<main class="main">
    <form class="form" id="" method="post" action="php/insert.php" enctype="multipart/form-data">
        <label class="form__name__text" id="name" for="name">
            <input placeholder=" " class="text-input input" name="name" type="text" value="" minlength="0"
                   maxlength="255"
                   required>
            <span>Nom</span>
        </label>
        <label class="form__name__firstname" id="firstname" for="firstname">
            <input placeholder=" " class="text-input input" name="firstname" type="text" value="" minlength="0"
                   maxlength="255" required>
            <span>Prénom</span>
        </label>
        <label class="form__name__email" id="email" for="email">
            <input placeholder=" " class="text-input input" name="email" type="email" value="" minlength="0"
                   maxlength="255" required>
            <span>Adresse mail</span>
        </label>
        <label class="form__name__file" id="file" for="file">
            File
            <input class="form__name__file__input" name="file" type="file" value="" accept="image/x-png, image/x-jpeg">
        </label>
        <label class="form__name__description " id="description" for="description">

            <textarea placeholder=" " class="input" name="description" type="text" value="" minlength="0"
                      maxlength="1000" required></textarea>
            <span>Description</span>
        </label>
        <button id="post">Envoyer</button>
    </form>

</main>
</body>
</html>