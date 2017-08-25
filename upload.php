  <!DOCTYPE html>
  <!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
  
    <header>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <div class="container" >
<br>

<h4 class="center">Upload Content</h4>
<br>
			<form class="col s12">
			
			  <div class="row">
				<div class="input-field col s6">
				  <input id="title" type="text" class="validate">
				  <label for="title">Title</label>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="input-field col s12">
				  <textarea id="para1" class="materialize-textarea" data-length="1000"></textarea>
				  <label for="para1">Content</label>
				</div>
			  </div>
			  
			  <div class="row">
				 <input type="text" placeholder="Select Date" class="datepicker">
   			  </div>
			  
			  <div class="row">
				<div class="file-field input-field">
				  <div class="btn brown">
					<span>Upload Image</span>
					<input type="file">
				  </div>
				  <div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				  </div>
				</div>
			  </div>
			  
				<center>
					<a class="waves-effect waves-light btn brown">Submit</a>
				</center>
				<br>
			  </form>
		</div>
		</div>


<script type="text/javascript">
 $('#para1').val('Enter Text');
  $('#para1').trigger('autoresize');
         $('#title').val('Enter Text');
  $('#title').trigger('autoresize');
        
</script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
          
    </main>
	
			 <footer class="page-footer brown">

			<center>Copyright inc. 2017 | Designed by Shujath</center>
<br>
			</footer>


  </html>