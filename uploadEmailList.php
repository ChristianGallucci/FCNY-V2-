<!doctype html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<?php include 'includes/header.php'; ?>
<body>
  
<!--Navbar-->
<?php include 'includes/navbar.php'; ?>
<!--Navbar end-->

<div class="header">
		<h2>Admin - Add a contact</h2>
	</div>
<form id="frmEmail" action="mailList.php" method="post">
	   <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
	<label for="emailList">Email List:</label>
	 <select name="list" required="required" id="formaction">
	   <option value="mailList.php">Main</option>
	   <option value="fire.php">Fire</option>
	   <option value="knights.php">Knights</option>
	   <option value="legends.php">Legends</option>
	   <option value="longshots.php">Longshots</option>
	   <option value="england.php">England</option>
	   <option value="inferno.php">Inferno</option>
	   <option value="hornets.php">Hornets</option>
	   <option value="earthquake.php">Earthquake</option>
	   <option value="trainersMain.php">Trainers Main Staff</option>
	   <option value="trainersJun.php">Trainers Junior Staff</option>
	   <option value="trainersGoal.php">Goalie Staff</option>
	   <option value="trainersNW.php">Trainers Not Working</option>
	   </select>
    <input type="submit" value="Submit">
</form>
		</div>
    </div>
</div>
	<!--Footer-->
<?php include 'includes/footer.php'; ?>
<!--end of footer-->
<script>
$("#formaction").on("change", function() {
  var getVal = $(this).val();
        $("#frmEmail").attr("action", getVal); //replace #YourFormId with your form id
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>