
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Pawtter - Home</title>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Features</a></li>
            <li role="presentation"><a href="#">Gallery</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Pawtter</h3>
      </div>

      <div class="row">
      	<div class="col-lg-6">
      		<h1>Intoducing Pawtter</h1>
      		<h3>Use it anywhere</h3>
      		<ul class="hero-unit">
      			<li>Lorem Ipsum is simply dummy text.</li>
      			<li>Lorem Ipsum is simply dummy text.</li>
      			<li>Lorem Ipsum is simply dummy text.</li>
      		</ul>

      		<div class="row">
      			<div class="col-lg-6">
      				<a href="" class="btn btn-large btn-primary">Download</a>
      			</div>
      			<div class="col-lg-6">
      				<a href="" class="btn btn-large btn-primary">View Gallery</a>
      			</div>
      		</div>
      	</div>

      	<div class="col-lg-6">
      		<img src="<?php echo base_url("assets/images/screen.jpeg");?>" class="img-responsive" alt="Responsive image">
      	</div>

      </div>

      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->
  </body>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js");?>" crossorigin="anonymous">
	</script>

</html>
