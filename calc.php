<?php

if (isset($_POST['x'])) {
    $x = $_POST['x'];
} else {
    $x = 0;
}
if (isset($_POST['y'])) {
    $y = $_POST['y'];
} else {
    $y = 0;
}
if (isset($_POST['calc'])) {
    $number = $_POST['calc'];
    switch ($number) {
        case '+':
            $result = $x + $y;
            break;
        case '-':
            $result = $x - $y;
            break;
        case '*':
            $result = $x * $y;
            break;
        case '/':
            $result = $x / $y;
            break;
    }
} else {
    $result = 0;
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Калькулятор</title>
</head>
<style>
    .row {
        margin-top: 350px;
        margin-left: 785px;
    }
</style>
<body>
<a href="/main.html"><button type="button" class="btn btn-default btn-lg btn-block">Back to main</button></a>
    <div class="row">
        <div class="col-md-3">
            <form method="post">
                <input class="form-control" type="number" name="x" placeholder="--"><br>
                <select class="form-control" name="calc">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select><br>
                <input class="form-control" type="number" name="y" placeholder="--"><br>
                <button type="submit" class="btn btn-success btn-md">=</button><br>
                <strong><?php echo $result; ?></strong>
            </form>
        </div>
    </div>
</body>
</html>
