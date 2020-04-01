
<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Student Hostel Payment</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/loading.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/loading-btn.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<?php
	if (isset($_POST['reference'])) {

	?>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						
						<h1 class="page-title"><a href="invoice.php" style="font-size: 1.2rem; "> Pay all amount</a></h1>
						<h2 class="page-title">Pay part of the amount </h2>

						<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							
								<form action="mtn.php" class="mt" method="post">
									
									<label for="" class="text-uppercase text-sm">Amount</label>
									<input type="number" placeholder="50000.00 and Above" name="amount" class="form-control mb" required>
									

									<button type="submit" name="pay" class="btn btn-primary btn-block" value="Pay Now" onclick="myloader()" id="mybtn" style="width: 287px;">Pay Now
										<i id="myicon"></i>
									</button>
								</form>
							</div>
						</div>
						
						
					</div>
				</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<!-- <h1 class="page-title"><a href="invoice.php"> Pay all amount</a></h1> -->
	<!-- <h1><a href=""> Pay part of the amount</a></h1> -->
	<form method="post" action="">
		<input type="number" name="amount_paid">
		<input type="submit" name="pay_part" value="PayNow">
	</form>
	<?php
	$regId=mt_rand(100000000,999999999);

?>
<!-- <h3>Your reference number is <a href="##"> <?php echo $regId; ?></a> It expires in 24 hours</h3> -->
<?php	
}else{ 


				?>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Mobile Money Payment </h2>

						<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							
								<form action="mtn.php" class="mt" method="post">
									<label for="" class="text-uppercase text-sm">Mobile Number</label>
									<input type="number" placeholder="2567XXXXXXXX" name="phone_no" class="form-control mb" required>
									<label for="" class="text-uppercase text-sm">Amount</label>
									<input type="number" placeholder="50000.00 and Above" name="amount" class="form-control mb" required>
									

									<button type="submit" name="pay" class="btn btn-primary btn-block" value="Pay Now" onclick="myloader()" id="mybtn" style="width: 287px;">Pay Now
										<i id="myicon"></i>
									</button>
								</form>
							</div>
						</div>
						
						
					</div>
				</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<script type="text/javascript">
	function myloader() {
		var element = document.getElementById('mybtn');

		element.classList.add("btn");
		var element = document.getElementById('mybtn');

		element.classList.add("btn-default");
		var element = document.getElementById('mybtn');

		element.classList.add("ld-ext-right");
		var element = document.getElementById('mybtn');

		element.classList.add("running");
		var element = document.getElementById('myicon');

		element.classList.add("ld");

		var element = document.getElementById('myicon');

		element.classList.add("ld-ring");

		var element = document.getElementById('myicon');

		element.classList.add("ld-spin-fast");
		window.open("https://localhost/hostel/hostel$$002/mtn.php","_self");
		
	}
</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
<?php } ?>
