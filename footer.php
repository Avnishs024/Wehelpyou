<?php 
include("config.php");
                                if(isset($_POST['submit']))
                                {
								
                                $a = $_POST['name'];
                                $b = $_POST['phone'];
                                $c = $_POST['email'];
                                $d = $_POST['message'];						
   $query = mysqli_query($con,"INSERT INTO `contact_us`( `name`, `phone`, `email`, `message`) VALUES
								
					 ('".$a."','".$b."','".$c."','".$d."')");
                                if($query)
                                {echo "success";}
                              else
                              {echo "failed";}
                              }
							  ?>


<section class="footer" id="contact us">
	<div class="content-box">
		<div class="container">
			<h1>Get In Touch Us</h1>
			<div class="row">
				<div class="col-md-6">
					<form method="post" action="" class="contact form">
						<div class="form-group">
							<input type="text" class=" form-control" placeholder=" your name" name="name">
						</div>
						<div class="form-group">
							<input type="number" class=" form-control" placeholder=" phone number" name="phone">
						</div>
						<div class="form-group">
							<input type="Email" class=" form-control" placeholder=" Email Id" name="email">
						</div>
						<div class="form-group">
							<textarea name="message" class="form-control" rows="4" placeholder="your message"></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">send message</button>
					</form>
				</div>
				<div class="col-md-6 contact-info">
					<div class="follow">
						<i class="fa fa-map-marker"></i><span>ambegoan bk, pune</span>
					</div>
					<div class="follow">
						<i class="fa fa-phone"></i><span>7376350906,9340889609</span>
					</div>
					<div class="follow">
						<i class="fa fa-envelope-o"></i><span>avnishs024@gmail.com ,rajat1950@gmail.com</span>
					</div>
					<div class="follow">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-youtube-play"></i>
						<i class="fa fa-twitter"></i>
						<i class="fa fa-instagram"></i>
					</div>
				</div>
			</div>
			<hr>
			<p class="copy">MAJOR PROJECT<i class="fa fa-heart-o"></i>by avnish,jyant,viprdev </p>
		</div>
		
	</div>
	
</section>