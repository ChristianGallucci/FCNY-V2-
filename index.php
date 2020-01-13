<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>FCNY Soccer | Home</title>
  </head>
  <body>
  
<!--Navbar-->
<?php include 'includes/navbar.php'; ?>
<!--Navbar end-->
	  
<!--Main page jumbo picture-->  
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to FCNY</h1>
	  <p class="lead">The Football Club of New York</p>
    <a class="btn btn-primary btn-lg" href="tutorial.html" role="button">Register Here for Indoor 2020 / Registrar Aqui</a>
  </div>
</div>
<!--end of jumbotron-->
  

<!--spacing-->

<hr width="50%">

<!--Player of the week-->
<div class="container">
	 <h1 class="display-4" id="player">Player of the Week</h1>
	<br>
  <div class="col-md-4 col-lg-6 offset-lg-3" id="potw">
  <div class="card">
	<img src="images/card-img.png" alt="Player Picture" class="card-img-top">
	<div class="card-body">
    <h4 class="card-title"><!--insern name here--></h4>
    <p class="card-text">Coming Soon</p>
	  <br>
	</div>
  </div>
  </div>
</div>  
<!--End of POTW-->

<!--spacing-->  
<hr width="50%">

<!--Schedule-->
<div class="container" id="schedule">
	<h1 class="display-4"><a href="includes/schedule.html">Schedule</a></h1>
	<br>
     <div class="responsive-iframe-container big-container">
 		<iframe src="https://calendar.google.com/calendar/embed?src=dl8rccs9b8o6s91o1fkgkdnu50%40group.calendar.google.com&ctz=America%2FNew_York" style="border-width:0" width="100%" height="650" frameborder="0" scrolling="no"></iframe>
    </div>
     <div class="responsive-iframe-container small-container">
 		<iframe src="https://calendar.google.com/calendar/embed?src=dl8rccs9b8o6s91o1fkgkdnu50%40group.calendar.google.com&ctz=America%2FNew_York" style="border-width:0" width="100%" height="800" frameborder="0" scrolling="no"></iframe>
	</div>
  </div>
<!--End of Schedule-->


<!--Footer-->
<?php include 'includes/footer.php'; ?>
<!--end of footer-->
	  
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
