<!doctype html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<?php include 'includes/header.php'; ?>
<body>
  
<!--Navbar-->
<?php include 'includes/navbar.php'; ?>
<!--Navbar end-->

<div class="container" id="backg">
  <div style="text-align:center">
    <h2 class="buffer">Contact Us</h2>
    <p>For more information about the club or interested in registering, leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/field.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="mail.php" method="post">
        <label for="fname">Firstname</label>
        <input type="text" name="fname" placeholder="Your first name..">
		<label for="lname">Lastname</label>
        <input type="text" name="lname" placeholder="Your last name..">
	    <label for="email">Email</label>
        <input type="text" name="email" placeholder="Your email..">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>
	    <button type="submit" name="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
  </div>
</div>
	  
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