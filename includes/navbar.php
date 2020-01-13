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
    	</ul>
  	</div>
	</nav>
<!--End Navbar-->
