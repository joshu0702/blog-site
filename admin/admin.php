<?php
 require_once('controller.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>LPU Post | Control Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" type="image/x-icon" href="../gallery/img/ic.png">
	<link rel="stylesheet" href="../gallery/css/main.css" />
	<link rel="stylesheet" href="../gallery/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../gallery/css/font-awesome-4.5.0/css/font-awesome.min.css" />
	<style>
nav .display-4 {
	color: #00BCD4;
	font-size: 40px;
	letter-spacing: 3px;
}
.tab-pane {
  padding-top: 32px;
}
#navP .list-group-item {
  border-radius: 0;
  background-color: aliceblue;
  color: #fff;
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
	background-color: #3e4750;
	font-size: 20px;
}
#navP .list-group-item i {
  padding: 4px 8px;
}
.list-group-item.active {
  background-color: #007bff !important;
}
.fa-tachometer {
	    color: #01aa8c;
}
.fa-pencil-square {
	    color: #8BC34A;
}
.uploaded {
  border: 2px solid #2196F3;
  border-radius: 3px;
  cursor: move;
  background-color: rgba(0, 0, 0, 0) !important;
}
#inputStory {
    min-height: 20em;
    border: 0;
    box-shadow: 0 0 15px 5px #00000014;
}
#inputStory h3 {
    border-bottom: 1px solid #ccc;
    padding: 12px;
}
.editStory button {
  margin-left: 12px;
  padding: 6px 16px;
}
.imgPrev {
  width: 10rem;
  display: inline-block;
  margin-right: 5px;
}
.imgPrev .card-img-overlay {
  background-color: #ffffffb0;
  color: #3d5771;
  text-align: center;
  font-weight: bold;
}
#mn {
  display: none;
}
	</style>
</head>
<body>
	<nav id="myNav" class="navbar navbar-dark bg-dark justify-content-center">
		<div class="display-4"><i class="fa fa-cogs" aria-hidden="true"></i> Control Panel</div>
	</nav>
	<div class="container-fluid justify-content-center pt-3 row">
    <div class="form-group jumbotron justify-content-center row w-50" id="smn">
      <div class="col-11">
        <label>Username : <input class="form-group" type="email" id="le"></label>
      </div>
      <div class="col-11">
        <label>PassWord : <input class="form-group" type="password" id="le"></label>
      </div>
      <div class="col-11">
        <label><input class="btn btn-primary" type="button" id="ls" value="Sign In"></label>
      </div>
    </div>
		<div class="row" id="mn">
			<div class="col-md-3 lt" style="background-color: aliceblue;">
				<div class="list-group" id="navP" role="tablist">
				  <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab-a" role="tab">
						<i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
					</a>
				  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#tab-b" role="tab">
						<i class="fa fa-pencil-square" aria-hidden="true"></i> New Article
					</a>
				</div>
			</div>
			<div class="col-md-9 rt">
				<div class="tab-content">
				  <div class="tab-pane" id="tab-a" role="tabpanel">AAAaaa</div>
				  <div class="tab-pane active" id="tab-b" role="tabpanel">

						<form action="#" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="inputName" class="col-sm-2 col-form-label">Title</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control w-75" name="a-Title" id="inputTitle" placeholder="Article Title">
						    </div>
						  </div>
              <div class="form-group row">
								<label for="inputName" class="col-sm-2 col-form-label">Sub-Title</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control w-75" id="inputSubTitle" name="a-SubTitle" placeholder="Sub Title (Optional)">
						    </div>
						  </div>
              <div class="form-group row">
								<label for="inputName" class="col-sm-2 col-form-label">Select Banner Image</label>
						    <div class="col-sm-10">
						      <input type="file" class="form-control w-75" id="inputBanner" name="a-Banner">
						    </div>
						  </div>
							<div class="form-group row">
								<label for="inputName" class="col-sm-2 col-form-label">Select Category</label>
						    <div class="col-sm-10">
						      <?=$_L->catDropDown() ?>
						    </div>
						  </div>

							<div class="form-group row editStory">
                <label for="inputMsg" class="col-11 col-form-label"><h4>Your Story</h4></label>
                <div class="col-11 justify-content-center pb-2 pl-4 imgBoxCont">
                </div>
                <div class="col-11 justify-content-center pb-2 pl-4">
                  <button type="button" class="btn btn-primary eH"><b>Heading</b></button>
                  <button type="button" class="btn btn-primary eB"><b> B </b></button>
                  <button type="button" class="btn btn-primary eI"><i> I </i></button>
                  <button type="button" class="btn btn-primary eU"><u> U </u></button>
                  <button type="button" class="btn btn-primary eIm"><i class="fa fa-photo" aria-hidden="true"></i></button>
                </div>
								<div class="col-11">
                  <textarea name="a-Story" id="a-Story"class="d-none"></textarea>
                  <input type="file" name="raw_image" id="rawImageInput" class="d-none" >
									<div contenteditable="true" class="form-control" id="inputStory" placeholder="Your Story Here"></div>
								</div>
							</div>

						  <div class="form-group row justify-content-center">
						    <div class="col-sm-10 sndCont">
						      <button id="a-Submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Save</button>
						    </div>
						  </div>
						</form>

					</div>
				  <div class="tab-pane" id="tab-c" role="tabpanel"></div>
				  <div class="tab-pane" id="tab-d" role="tabpanel"></div>
				</div>
			</div>
		</div>
	</div>
  <script src="../gallery/js/jquery-3.1.0.min.js"></script>
  <script src="../gallery/js/popper.min.js"></script>
	<script src="../gallery/js/bootstrap.min.js"></script>
  <script src="../gallery/js/ad.min.js"></script>
</body>
</html>
