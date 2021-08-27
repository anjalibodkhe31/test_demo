
<!DOCTYPE HTML>
<html>
	<head>
          <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
		<title>Hospital Management System</title>
		<link href="css/sstyle.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		  
          <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
    <div class="top-nav">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>

						<li><a href="contact.php">contact</a></li>
                                                <li><a href="index2.html" target="_blank">Rooms & Food Service</a></li>

					</ul>
				</div>
    <div class="bbbootstrap">
     <div class="container">
         <form action="oxygen_cylinder.php" method="post">
             <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" id="Form_Search" name="n" value="" placeholder="Enter Full Name Of Hospital" role="searchbox" class="InputBox " autocomplete="off"><input type="submit" id="Form_Go" class="Button" value="GO">
         </form>
     </div>
 </div>
 
 
<!--	<div class="clear"> </div>
			
					<div class="image-slider">
						
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slider-image3.jpg" alt=""></li>
                        
					      <li><img src="images/slider-image4.png" alt=""></li>
					      <li><img src="images/slider-image5.png" alt=""></li>
					    </ul>
						
					</div>
					
		    <div class="clear"> </div>
           
		   
		   	<div class="clear"> </div>
		   </div>
		   </div>
		
    -->
	</body>
</html>

