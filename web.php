<?php 
include("config.php");
                                if(isset($_POST['submit']))
                                {
								
                                $a = $_POST['name'];
                                $b = $_POST['phone'];
                                $c = $_POST['email'];
                                $d = $_POST['message'];
                                $i = $_POST['service_for'];
								
         $query = mysqli_query($con,"INSERT INTO `book_us`( `name`, `phone`, `email`, `message`, `service_for`) VALUES
								
					 ('".$a."','".$b."','".$c."','".$d."','".$i."')");
                                if($query)
                                {echo "success";}
                              else
                              {echo "failed";}
                              }
							  ?>
<html>
<head>
	<title>Movie App</title>
	<link herf="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script src="css/jquery.tiltedpage-scroll.js"></script>
          <link rel="stylesheet" href="css/tiltedpage-scroll.css">
</head>
<body>
		<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="1.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">My list</a>
		</li>
      <li class="nav-item">
        <a class="nav-link " href="login.php">Log out</a>
      </li>
    <!--   <li class="nav-item">
        <a class="nav-link " href="#">contact</a>
      </li> -->
    </ul>
  </div>
</nav>
</section>
	<div class="main">
	<section class="header" >
	<div class="content-box">
	 <div class="menu">
		<button type="button"><a href="login.php"><i class="fa fa-sign-in"></i></a>login</button>
	 </div>
	 <div class="banner-text">
	 	<h2> WE HELP YOUU </h2>
	 	<p> COVID-19 PROTECTION <br>Book us for preventing you from this pandemic cries.<br>We senetize your house with best covid disinfection.<br>while taking care of best services and our tested worker who is not effetcted of this covid.
	 	</p>
        <a href="#contact us">Contact Us</a>
	 </div>
	</div>	
	</section>
	<!-- ----------service ------------->
	<section class="service" id="services">
		<div class="content-box">
			<div class="container">
				<h1>Our Service</h1>
				<div class="row services">
					<div class="col-md-3 text-center">
						<div class="i">
							<i class="fa fa-renren" ></i>
						</div>
						<h3>HOME<span>SENETIZING</span></h3>
						<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
					</div>
					<div class="col-md-3 text-center">
						<div class="i">
							<i class="fa fa-user" ></i>
						</div>
						<h3>Dr.<span>Appointment</span></h3>
						<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
					</div>
					<div class="col-md-3 text-center">
						<div class="i">
							<i class="fa fa-meetup" ></i>
						</div>
						<h3>HOUSE<span>Nurse</span></h3>
						<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
					</div>
					<div class="col-md-3 text-center">
						<div class="i">
							<i class="fa fa-video-camera" ></i>
						</div>
						<h3>Order<span>Medicine</span></h3>
						<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- -------------feature--------- -->
<section class="feature" id="about us">
	<div class="content-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">	
					<h2>Feature Are</h2>
					<ul>
					<li>We will senetize your house at low cost.</li>
					<li>With taking care of full safety kit.</li>
					      <br>
					<li>You can book us for your providing.</li>
					<li>personal nurse to taking care of ill one.</li>
					       <br>
					<li>You can also book us for making your </li>
					<li>dr.appointment</li>
					        <br>
					<li>You can book us dilevring your</li>
					<li>perscribed medicine..</li>
					</ul>
				</div>
				<div class="col-md-2">	
					<img src="images (6).jpeg" class="img-fluid">
				</div>
				<div class="col-md-2">	
					<img src="medi (3).jpg" class="img-fluid">
				</div>
				<div class="col-md-2">	
					<img src="medi (2).jpg" class="img-fluid">
				</div>
				<div class="col-md-2">	
					<img src="medi (1).jpg" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ------BookUs------ -->
<section class="footer" id="Book us">
	<div class="content-box">
		<div class="container">
			<h1>Book Us</h1>
			<div class="row">
				<div class="col-md-6">
					<form method="post" class="contact form">
						<div class="form-group">
							<input type="text" class=" form-control" placeholder=" your name" name="name">
						</div>
						<div class="form-group">
							<input type="number" class=" form-control" placeholder=" phone number" name="phone">
						</div>
						<div class="form-group">
							<select  name="service_for" class=" form-control">
								<option value="Choose our service">Choose our service</option>
								<option value="SENETIZING">SENETIZING</option>
								<option value="Dr.Appointment">Dr.Appointment</option>
								<option value="Medicine">Medicine</option>
								<option value="Nurse">Nurse</option>
							</select>
						</div>
						<div class="form-group">
							<input type="Email" class=" form-control" placeholder=" Email Id" name="email">
						</div>
						<div class="form-group">
							<textarea name="message" class="form-control" rows="4" placeholder="your message"></textarea>
						</div>
						<button type="submit" name="submit"class="btn btn-primary">send message</button>
					</form>
				</div>
			<div class="col-md-6">	
					<img src="feature.jpeg" class="img-fluid">
				</div>
			</div>
			
		</div>
		
	</div>
	
</section>
<!-----footer-----  -->
<?php include 'footer.php'; ?>
</div>
<script>
	 $(".main").tiltedpage_scroll({
    sectionContainer: "> section",  
    angle: 50,    
    opacity: true,     
    scale: true,    
    outAnimation: true 
  });

</script>
	</body>
</html>