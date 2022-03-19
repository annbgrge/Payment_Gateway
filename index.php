<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sparks Foundation Payment Gateway</title>
		<link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
		<style>
			label{
				font-weight: bold;
			}
		</style>
	</head>
	<body class="bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-5 display-4 text-capitalize text-center">
					<h3 class="text-white"><b>The Sparks Foundation Payment Gateway</b></h3>
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-md-5">
					<div class="card border-0">
						<div class="card-header bg-white">
							<h4 class="card-title">
								<b>Payment Checkout</b>
							</h4>
						</div>
						<div class="card-body">
							<form action="pay.php" method="post">
								<label for="">Name:</label>
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="Enter the name..." required>
								</div>
								<label for="">Email:</label>
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="Enter the email..." required>
								</div>
								<label for="">Phone No:</label>
								<div class="form-group">
									<input type="text" name="phone" id="phone" class="form-control" placeholder="Enter the phone..." required>
								</div>
								<label for="">Amount:(Rs.99)</label>
								<div class="form-group">
									<input type="text" name="amt" id="amt" class="form-control" placeholder="Enter the Amount..." required>
								</div>
								<div class="form-group">
									<button type="submit" name="payment" class="btn btn-dark btn-block font-weight-bold" onclick="validate()">Proccess</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
<!-- ABOUT US -->

<style>
footer {
  background: black;
  overflow-x: hidden;
  padding: 5vmin 18vmin;
  font-family: "Rubik", sans-serif;
}

footer p > span {
  color: linen;
}

footer input {
  border: none !important;
}

footer input::placeholder {
  color: white !important;
}

footer .input-group .input-group-text {
  background: var(--bggradient);
  border: none;
}

footer .column i {
  color: #ffffff;
  font-size: 35px;
}

.fa-instagram{ 
  font-size: 100px;
}

.fa-linkedin{
  font-size: 100px;
}

.fa-github{
  font-size: 100px;
}
</style>

<footer id="foot">
  <div class="container-fluid p-0">
    <div class="row text-left">
      <div class="col-md-5 col-sm-5">
        <p class="pt-4 text-muted">Copyright ©2022 All rights reserved | This website is made by Anna George
          <span>| THE SPARKS FOUNDATION</span>
        </p>
      </div>
      <div class="col-md-7 col-sm-12" style="text-align: right;">
        <h5 class="text-light">Follow Us</h5>
        <p class="text-muted">Let's Connect!</p>
        <div class="column text">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		  
		  <a href="https://www.facebook.com/thesparksfoundation.info"><i class="fa fa-facebook" style="margin-left:15px;"></i></a>
		  <a href="https://twitter.com/tsfsingapore?lang=en"><i class="fa fa-twitter" style="margin-left:15px;"></i></a>
		  <a href="https://www.instagram.com/thesparksfoundation.info/"><i class="fa fa-instagram" style="margin-left:15px;"></i></a>
		  <a href="https://sg.linkedin.com/company/the-sparks-foundation"><i class="fa fa-linkedin-square" style="margin-left:15px;"></i></a>

		</div>
      </div>
    </div>
  </div>
 </footer>
	</body>
</html>
