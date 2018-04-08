<?php

    include __DIR__ . '/test.php';
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
		.thumb img {
			border-radius:5px;
			border: 1px solid #ddd;
			padding:5px;
		}
	</style>
	<body>
		<ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="/main.html">Home</a></li>
				  <li role="presentation"><a href="/photos.php">Photo Gallery</a></li>
				  <li role="presentation"><a href="/contacts.php">Comments</a></li>
				  <li role="presentation"><a href="/register.html">Register</a></li>
			</ul>
		<div class="container">
			<?php

            foreach(gallery(__DIR__ . '/image') as $image) {

                ?>

            	<div class="col-md-3 col-sm-4 col-xs-6 thumb">
                    <a href="image.php?file=/<?php echo  $image; ?>">
                        <img src="/image/<?php echo $image; ?>" alt="Responsive image" width="100%">
                    </a>
            	</div>
				<?php

				}

				?>
            <form class="col-md-6 add-img"
                  action="/upload.php"
                  method="post"
                  enctype="multipart/form-data">
                <input class="form-control" type="file" name="picture">
                <button type="submit" class="btn btn-success btn-md">
                    <i class="glyphicon glyphicon-download-alt"> </i>Upload file
                </button>
            </form>
		</div>
	</body>
</html>