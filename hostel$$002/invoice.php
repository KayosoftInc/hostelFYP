<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
$regId=mt_rand(100000000,999999999);
$date= date("d/m/Y");


$aid=$_SESSION['id'];

$ret="select * from hostel_fee where user_id=?";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
$row=$res->fetch_object();
	  

 //echo $row->amount;

$student="select * from userregistration where id=?";
$stmt1= $mysqli->prepare($student) ;
$stmt1->bind_param('i',$aid);
$stmt1->execute() ;
$resl=$stmt1->get_result();
$cnt1=1;
$row_student=$resl->fetch_object();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Hostel Fee Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='csss/style.css' />
	<link rel='stylesheet' type='text/css' href='csss/print.css' media="print" />
	<script type='text/javascript' src='jss/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='jss/example.js'></script>

</head>

<body>
	<a href="#" title="Print invoice" onclick="window.print()">Print </a>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
Kabamba Hostel
123  Street</br>
Lira University</br>

Phone: (555) 555-5555
</div>

            <div id="" style="float: right;">

              
             
              <img id="image" src="img/lira-logo.png" alt="logo" style="width: 6rem; height: 6rem; border:10px; border-bottom: 20px;" />
            </div>
		
		
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <div id="customer-title">Code Payment System</div>

            <table id="meta">
                <tr>
                    <td class="meta-head">Reference Number</td>
                    <td><a href="##" style="text-decoration: none;"><?php echo'<font color="#FF0000" size="+1">';echo"$regId";echo'</font>';?></a></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><div id="date"><?php echo'<font color="#FF0000" size="+1">';echo"$date";echo'</font>';?></div></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">Shs <?php echo $row->due; ?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>RegNo</th>
		      <th>Name</th>
		      <th style="border-right: 0px;">Hostel</th>
		      <th style="border-left: 0px;">Name</th>
		      
		      <th>Hostel Code</th>
		  </tr>
		  
		  
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><?php echo $row_student->regNo;?></div></td>

		      <td class="description"><?php echo $row_student->firstName;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_student->lastName;?></td>
		      <td>Kabamba Hostel</td>
		      
		      <td">
		      	
		      </td>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="5"></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Hostel Fee</td>
		      <td class="total-value"><div id="subtotal">Shs <?php echo $row->due . ".00"; ?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Bank Charge</td>
		      <td class="total-value"><div id="total">Shs 2300.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank">


		      	<div class="qr-field">
				
				<center>
					<div class="qrframe" style="border:2px solid black; width:170px; height:150px;">
							<?php echo '<img src="temp/kalumbajalaludin.png" style="width:150px; height:150px;"><br>'; ?>
					</div>
					
				</center>
				</div>










		       </td>
		      <td colspan="2" class="total-line">Total Amount</td>

		      <td class="total-value"><div id="paid">Shs <?php echo ($row->due + 2300) . ".00"; ?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">Shs 00.00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		 It expires in 24 hours.
		</div>
	
	</div>
	
</body>

</html>