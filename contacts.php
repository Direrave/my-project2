<?php
$comments = file(__DIR__ . '/comment/comment.txt', FILE_IGNORE_NEW_LINES);
if (!empty($_POST)) {
    if (!empty($_POST['comment'])) {
        $comments[] = $_POST['comment'];
        $message = implode("\n", $comments);
        file_put_contents(__DIR__ . '/comment/comment.txt', $message);
    }
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="https://thetomatos.com/wp-content/uploads/2016/12/head-logo-husky-clipart-768x576.jpg">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<title>Husky World</title>
	</head>
	<style>
		.position{
			margin-top: 650px;
			margin-left: 25px;
			font-size: 150%;
			}
		body {
			background: url('https://img3.goodfon.ru/original/1920x1080/b/b1/lorri-kajenna-art-detskaya-1411.jpg');
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;			
			background-size: cover;
			}
        .row {
            margin-top: 650px;
            margin-left: 25px;
        }
	</style>
	<body>
		<ul class="nav nav-pills">
			  <li role="presentation" class="active"><a href="/main.html">Home</a></li>
			  <li role="presentation"><a href="/photos.php">Photo Gallery</a></li>
			  <li role="presentation"><a href="/contacts.php">Comments</a></li>
			  <li role="presentation"><a href="/register.html">Register</a></li>
		</ul>
		<div class="comments">
			<h3 class="title-comments">Comments(4)</h3>
		</div>
        <?php
        foreach ($comments as $comment) {
        ?>
                <div class="col-md-8">
                    <div class="media-left">
                        <img class="media-object img-rounded" src="/ava/ava.png" width="100"
                             alt="">
                    </div>
                    <div class="media-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="author">John</div>
                                <span class="data"> one day a go</span>
                            </div>
                            <div class="panel-body"><?php echo $comment; ?></div>
                        </div>
                    </div>
                </div>
            <?php
        }
            ?>
        <div class="row">
            <section class="col-md-3">
                <form class="guestbook" action="/contacts.php" method="post">
                    <fieldset>
                        <legend>Your comment</legend>
                        <div class="form-group">
                            <label for="textComment">Object*</label>
                            <textarea class="form-control" name="comment" id="textComment" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-md">Send</button>
                    </fieldset>
                </form>
            </section>
        </div>
		
	</body>
</html>