  <!DOCTYPE html>
  <!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
  
    <header>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			  
      <script type="text/javascript" src="js/jquery.min.1.7.js"></script>
<script type="text/javascript" src="js/modernizr.2.5.3.min.js"></script>
    <style>

  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
</style>
	</header>
    <body>
	<main>
	
	 <nav>
    <div class="nav-wrapper brown">
      <a href="#" class="brand-logo">&nbsp;&nbsp;&nbsp;&nbsp;Noureen Taj</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">        
        <li><a href="badges.html">Sign-up!</a></li>
        <li><a href="logout.php">Log-in!</a></li>
      </ul>
    </div>
  </nav>
        <div class="container" >
<div class="flipbook-viewport">
	<div class="container">
<br>
	<div class="flipbook" style="padding-bottom:45px;">
		
			<div style="background-image:url(pages/1.jpg)"></div>
			<div style="background-image:url(pages/2.jpg)"></div>
			<div style="background-image:url(pages/3.jpg)"></div>
			<div style="background-image:url(pages/4.jpg)"></div>
			<div style="background-image:url(pages/5.jpg)"></div>
			<div style="background-image:url(pages/6.jpg)"></div>
			<div style="background-image:url(pages/7.jpg)"></div>
			<div style="background-image:url(pages/8.jpg)"></div>
			<div style="background-image:url(pages/9.jpg)"></div>
			<div style="background-image:url(pages/10.jpg)"></div>
			<div style="background-image:url(pages/11.jpg)"></div>
			<div style="background-image:url(pages/12.jpg)"></div>
	
	</div>
		
	</div>
	
	</div>
	
</div>


<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true

	});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['js/turn.js'],
	nope: ['js/turn.html4.min.js'],
	both: ['css/basic.css'],
	complete: loadApp
});

</script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script> 
    <br>
	</main>
	
	</body>
	
			 <footer class="page-footer brown">

			<center>Copyright inc. 2017 | Designed by Shujath</center>
		<br>
	</footer>

  </html>