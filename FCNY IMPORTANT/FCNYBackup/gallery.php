<!doctype html>
<html lang="en">

<?php include 'includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="resources/UberGallery.css" />
<link rel="stylesheet" type="text/css" href="resources/colorbox/1/colorbox.css" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="resources/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
});
</script>
<body>

<!--Navbar-->
<?php include 'includes/navbar.php'; ?>
<!--Navbar end-->  

<div class="container" id="gallery">
<div class="row mt-5"></div>
<center><h3 class="gallery">Image Gallery</h3></center> 
	<div class="row"> 
<?php include_once('resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('gallery-images'); ?>
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
