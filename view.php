<?php require_once("lib/layout.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>LPU Post | Write your Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" type="image/x-icon" href="gallery/img/ic.png">
	<link rel="stylesheet" href="/gallery/css/main.css" />
	<link rel="stylesheet" href="/gallery/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/gallery/css/font-awesome-4.5.0/css/font-awesome.min.css" />
	<style>
		nav {
			 position: relative !important;
		}
		.card-img-overlay {
			color: #fff;
			text-align: center;
			padding-top: 2em;
		}
		.card {
			border-width: 0;
		}
		.jumbotron {
			margin-right: 80px;
			background-color: #fcfcfc;
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
			font-size: 20px;
		}
		.jumbotron p {
			text-indent: 2em;
		}
		.jumbotron h3 {
			border-bottom: 1px solid #ccc;
	    padding: 12px;
		}
		.head-tit {
			background-color: rgba(0,0,0,.5);
	    box-shadow: 0 0 174px 40px rgba(0,0,0,.5);
			margin-top: 3em;
		}
	</style>
</head>
<body>
<?php include_once("header.php"); ?>
	<div class="container-fluid p-0">
		<?=$_L->viewArticle()?>
	</div>
	<?php include_once("footer.php"); ?>
</body>
</html>
