<?php
    if (isset($_FILES['picture'])) {
        if(0 == $_FILES['picture']['error']) {
            move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__ . '/content/1.jpg');
        }
    }
    ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .file {
        text-align: center;
        margin-top: 90px;
    }
</style>
<body>
<a href="/photos.php"><button type="button" class="btn btn-default btn-lg btn-block">Back to Photo Gallery</button></a>
    <h1 class="file"><?php

        echo 'The file is successfully loaded';
        ?>
    </h1>
</body>
</html>
