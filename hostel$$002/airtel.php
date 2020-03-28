<!--?php <br ?--> //Testing Mobile money incoming
<?php 
include('includes/config.php');
$error = "";
if(isset($_POST['pay']))
{
    $amount=$_POST['amount'];
    $phoneNo=$_POST['phone_no'];
    $ref=rand(1,100000000000);
    

$url = 'https://www.easypay.co.ug/api/'; 
 $payload = array( 'username' => '5046664e79350817', 
 'password' => 'a19adac4dcd78f50', 
 'action' => 'mmdeposit', 
 'amount' => $amount, 
 'phone'=> $phoneNo, 
 'currency'=>'UGX', 
 'reference'=>$ref, 
 'reason'=>'Testing MM DEPOSIT' 
 ); 
  
 //open connection 
 $ch = curl_init(); 
  
 //set the url, number of POST vars, POST data 
 curl_setopt($ch,CURLOPT_URL, $url); 
 curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($payload)); 
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,15); 
 curl_setopt($ch, CURLOPT_TIMEOUT, 400); //timeout in seconds 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 //execute post 
 $result = curl_exec($ch); 
  
 //close connection 
 curl_close($ch); 
 print_r(json_decode($result)); 

} else{

    echo('Not working');
}
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
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Mobile money </h2>

						<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							
								<form action="airtel.php" class="mt" method="post">
									<label for="" class="text-uppercase text-sm">Mobile Number</label>
									<input type="text" placeholder="256787539824" name="phone_no" class="form-control mb" required>
									<label for="" class="text-uppercase text-sm">Amount</label>
									<input type="number" placeholder="50000.00 and Above" name="amount" class="form-control mb" required>
									

									<button type="submit" name="pay" class="btn btn-primary btn-block" value="Pay Now" onclick="myloader()" id="mybtn" style="width: 287px;" data-toggle="modal" data-target="#exampleModal">Pay Now
										<i id="myicon"></i>
									</button>
								</form>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mobile Money Payment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
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
		// window.open("https://localhost/hostel/hostel$$002/mtn.php","_self");
		
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

