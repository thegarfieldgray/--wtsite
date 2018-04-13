<?php require_once 'header.php'; ?>
<div class="gmap">
</div>

<div class="contact-card">
	
	<div class="contact-info-bg">
	</div>

		<div class="row">
			<div class="col-md-7">
				<h4>Send us a Message</h4>
				<form action="" method="POST" id="form-data">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<label for="username">Your Name</label>
								<input type="text" class="form-control" name="fullname" id="username">
							</div>
							<div class="col-sm-6 col-md-6">
								<label for="mail">Email Address</label>
								<input type="email" class="form-control" name="mail" id="mail">
							</div>
						</div>
						<div class="row">
							<div class="form-row-two">
								<div class="col-sm-6 col-md-6">
									<label for="phoneNumber">Phone</label>
									<input type="telephone" class="form-control" name="phone" id="phoneNumber">
								</div>
								<div class="col-sm-6 col-md-6">
									<label for="schoolName">Institution</label>
									<input type="text" class="form-control" name="sch" id="schoolName">
								</div>
							</div>
						</div>
						<div class="contact-comments">
							<div class="form-group">
						      <label for="comment">Comment</label>
						      <textarea class="form-control" rows="2" cols="40" id="comment"></textarea>
	    					</div>
    					</div>
					</div>
					<div align="right">
						<button type="submit" id="contact-submit">
							<img src="http://localhost/Work%20and%20Travel/IWTS/img/send.svg" class="img-responsive" height="40px" width="40px" />
						</button>
					</div>
				</form>
				

			</div>
			
			<div class="col-md-5" id="contact-info-right">
				<h4>Contact Information</h4>
				<div class="contact-info-right-body">
					<img class="img-responsive" src="img/fmap.svg">
					<div class="after-right-icons">
						237 Old Hope Road<br>
						University of Technology,<br>
						Jamaica
					</div>
					<br>

					<img class="img-responsive" src="img/fphone.svg">
					<div class="after-right-icons">
						Digicel: (876) 858-5411<br>
						Lime: (876) 970-5618
					</div>
					<br>

					<img class="img-responsive" src="img/fmap.svg">
					<div class="after-right-icons">
						<a href="#" style="color:white;">itravelservices@yahoo.com</a>
					</div>

				</div>
			
			</div>
		</div>
</div>

<div class="contact-mobile-card">
	<h4>Contact Information</h4>
		<div class="contact-info-right-body">
			<img class="img-responsive" src="img/fmap.svg">
			<div class="after-right-icons">
				237 Old Hope Road<br>
				University of Technology,<br>
				Jamaica
			</div>
			<br>

			<img class="img-responsive" src="img/fphone.svg">
			<div class="after-right-icons">
				Digicel: (876) 858-5411<br>
				Lime: (876) 970-5618
			</div>
			<br>

			<img class="img-responsive" src="img/fmap.svg">
			<div class="after-right-icons">
				<a href="#" style="color:white;">itravelservices@yahoo.com</a>
			</div>

		</div>
</div>
<?php require_once 'footer.php'; ?>