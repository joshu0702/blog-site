<?php include_once("lib/layout.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>LPU Post | Write your Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" type="image/x-icon" href="gallery/img/ic.png">
	<link rel="stylesheet" href="gallery/css/main.css" />
	<link rel="stylesheet" href="gallery/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="gallery/css/font-awesome-4.5.0/css/font-awesome.min.css" />
	<style>
			.m-art {
			    height: 700px;
			}
	</style>
</head>
<body>
	<?php include_once("header.php"); ?>
	<div id="carouseSlideshow" class="carousel slide mb-2" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouseSlideshow" data-slide-to="0" class="active"></li>
			<li data-target="#carouseSlideshow" data-slide-to="1"></li>
	    <li data-target="#carouseSlideshow" data-slide-to="2"></li>
			<li data-target="#carouseSlideshow" data-slide-to="3"></li>
	    <li data-target="#carouseSlideshow" data-slide-to="4"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="gallery/img/s1.png" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
			    <h3>The Pine Trees that Point to the Equator</h3>
			    <p>If you look closely, no matter where you see them, they're all leaning toward the equator. All of them.</p>
			  </div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="gallery/img/s2.png" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
			    <h3>Do Humans Have An Internal Compass?</h3>
			    <p>Birds, whales, butterflies, and many other animals can sense magnetic fields, can we?</p>
			  </div>
	    </div>
			<div class="carousel-item">
	      <img class="d-block w-100" src="gallery/img/s3.png" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
			    <h3>Can You Really Mistake Thirst For Hunger?</h3>
			    <p>If we're all that disconnected from our bodies' signals, what should we do?</p>
			  </div>
	    </div>
			<div class="carousel-item">
	      <img class="d-block w-100" src="gallery/img/s4.png" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
			    <h3>Teach Yourself, Change The World</h3>
			    <p>Education without the guidance of masters or institutions</p>
			  </div>
	    </div>
			<div class="carousel-item">
	      <img class="d-block w-100" src="gallery/img/s5.png" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
			    <h3>The 11 Factors Involved in Falling in Love, According to a Psychologist</h3>
			    <p>Love is like a box of chocolates; there are a LOT of ingredients.</p>
			  </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouseSlideshow" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouseSlideshow" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<div class="container-fluid p-2">
		<div class="row m-art">
			<div class="ly container col-md-2">
				<?=$_L->showAllCat();?>
			</div>
			<div class="ly container col-md-10 art-sec">
				<div class="row">
					<div class="col-md-8 lt-post">
						<?=$_L->showArticles();?>
					</div>

					<div class="col-md-4 rt-post">
						<?=$_L->RecomArticles();?>
					</div>
			</div>
			</div>
		</div>
	</div>
	<?php include_once("footer.php"); ?>
	</body>
	</html>
