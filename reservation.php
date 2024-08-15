<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>	
<?php if( file_exists(  __DIR__.'/app/sections/header/header.php' ) ){
	require_once __DIR__ . '/app/sections/header/header.php';
}
?>
<?php if( file_exists (__DIR__ . '/app/data/data.php' ) ):
		require_once __DIR__ . '/app/data/data.php'; ?>
<?php endif; ?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<?php 
			$currentPage = basename(__FILE__, '.php');
			$currentPageFormatted = ucwords(str_replace('-', ' ', $currentPage));
		?>
		<div class="crumbs">
			<ul>
				<li><a href="<?php echo $breadcrumb['menu_url']; ?>">
					<?php echo $breadcrumb['menu_text'] ?></a>
				</li>
				<li><a href="<?php echo $currentPage.'.php' ?>"><?php echo $currentPageFormatted; ?></a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<!--Warning-->
					<center><?php echo $text;?></center>
					<!---->
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Complete the Submission Form</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p><br/>
							<h3>Or Just Make a Call</h3>
							<p>+6221 888 888 90 <br>
								+6221 888 88891</p>
							<p>info@yourdomain.com</p>
						</div>
					</div>
					<div class="col-2-3">
						<div class="wrap-col">
							<div class="contact">
								<div id="contact_form">
									<form name="contact" id="contact" method="post" action="reservation.php">
										<label class="row">
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
												</div>
											</div>
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
												</div>
											</div>
										</label>
										<label class="row">
											<div class="col-2-4">
												<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="date"  name="date" id="date" placeholder="Date"/>
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="time"  name="time" id="time" placeholder="Time"/>
												</div>
											</div>											
										</label>
										<label class="row">
											<div class="wrap-col">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</label>
										<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>

<!-- Footer Section -->
<?php if( file_exists(  __DIR__.'/app/sections/footer/footer-section.php' ) ){
	require_once __DIR__ . '/app/sections/footer/footer-section.php';
}
?>