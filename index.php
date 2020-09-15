<!doctype html>
<?php 
	include('includes/functions.php');
?>
<html lang="en">
<?php include 'includes/header.php'; ?>
<body>

<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="nav-item active"';
}

?>
<!-- Navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary"> <a class="navbar-brand" href="index.php"><b>FC</b>NY</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  	<div class="collapse navbar-collapse" id="navbarSupportedContent1">
    	<ul class="navbar-nav ml-auto">
      		<li <?=echoActiveClassIfRequestMatches("index")?>> <a class="nav-link" href="index.php">Home</a> </li>
	  		<li <?=echoActiveClassIfRequestMatches("schedule")?>> <a class="nav-link" href="schedule.php">Schedule</a></li>
			<li <?=echoActiveClassIfRequestMatches("teams")?>> <a class="nav-link" href="teams.php">Teams</a></li>
			<li <?=echoActiveClassIfRequestMatches("gallery")?>> <a class="nav-link" href="gallery.php">Gallery</a></li>
			<!--<li <?=echoActiveClassIfRequestMatches("contact")?>> <a class="nav-link" href="contact.php">Contact</a></li>-->
			<!--<li <?=echoActiveClassIfRequestMatches("store")?>> <a class="nav-link" href="http://fcnysoccer.club/presta/">Store</a></li>-->
			<li class="nav-item dropdown">
        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	More
        	</a>
       		 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="download.php">Forms</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login.php">Admin</a>
        </div>
      </li>
	  <li>
		    	<div class="log">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="color:white;"><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	  </li>
  	</div>
	</nav>
<!--End Navbar-->

	  
<!--Main page jumbo picture-->  
<div class="jumbotron jumbotron-fluid" >
  <div class="container">
    <center><h1 class="display-3">FCNY</h1></center>
	  <center><p class="lead">The Football Club of New York</p></center>
  </div>
</div>
<!--end of jumbotron-->
  



<hr width="50%">
<!--Player of the week-->
<div class="container">
  <h3 id="player">Welcome to FCNY</h1>
	<br>
 
  <center><p class="lead">The Football Club of New York was established in 2003. Located in Huntington, NY, it is a great opportunity to learn the best techniques and philosophies that can improve a players’ individual skills and become an excellent team player.</p></center>
</div>  
<!--End of POTW-->

	
<!--spacing-->  
<hr width="50%">

<br><br>

<div class="jumbotron jumbotron-fluid" id="teams">
  <div class="container">
	   <hr width="25%" class="jum">
    <center><h1 class="display-4">Learn About Our Teams</h1></center>
	  <hr width="25%" class="jum">
  </div>
</div>
	
	<hr width="50%">
	
<div class="container">
  <center><p class="lead">We have teams from ages U-8 to U-19</p></center>
	<center><a href="teams.php"><button type="button" class="btn btn-primary">More Info</button></a></center>
</div>
	
	<hr width="50%">
	
<!--<div class="container" id="potw">
  <div class="row">
	  <div class="col-md-6">
      <img src="images/potw1.jpg" class="img-fluid" alt="Placeholder image"></div>
	  <div class="col-md-6">
	  	<h3>Player of the Week</h3>
		<p class="lead">Coming soon</p>
    </div>
  </div>
</div>
	
<hr width="50%">-->
	
	
<!--Schedule-->
<div class="container" id="schedule">
	<center><h3 class="sched"><a href="schedule.php">Schedule</a></h1></center>
	<br>
     <div class="responsive-iframe-container big-container">
 		<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FNew_York&amp;src=NG5sZDkzZzB0aThhYnUzb2dqcnVrcDV0MGNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=YmhjbzVtajJkYmkzdG9vZ3QzcWgzbjhuMDhxdTQwNXVAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%233F51B5&amp;color=%23009688"style="border-width:0" width="100%" height="650" frameborder="0" scrolling="no"></iframe>
    </div>
     <div class="responsive-iframe-container small-container">
 		<iframe src="https://calendar.google.com/calendar/embed?height=800&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FNew_York&amp;src=NG5sZDkzZzB0aThhYnUzb2dqcnVrcDV0MGNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=YmhjbzVtajJkYmkzdG9vZ3QzcWgzbjhuMDhxdTQwNXVAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%233F51B5&amp;color=%23009688&amp;mode=AGENDA" style="border-width:0" width="100%" height="400%" frameborder="0" scrolling="no"></iframe>
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



