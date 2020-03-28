<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reference</title>
<style>

#invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 44mm;
  background: #FFF;
  
  
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}
 
#top, #mid,#bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#top{min-height: 100px;}
#mid{min-height: 80px;} 
#bot{ min-height: 50px;}

#top .logo{
  //float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
	background-size: 60px 60px;
}
.clientlogo{
  float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
	background-size: 60px 60px;
  border-radius: 50px;
}
.info{
  display: block;
  //float:left;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;} 
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  //padding: 5px 0 5px 15px;
  //border: 1px solid #EEE
}
.tabletitle{
  //padding: 5px;
  font-size: .5em;
  background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{font-size: .5em;}

#legalcopy{
  margin-top: 5mm;
}

  
  
}

-->This code forces most browsers to repeat table headers on every generated page
@media print {
   thead {display: table-header-group;}
}
</style>
</head>
<body>
<?php require'includes/db_connect.php';?>
<p style=" padding-left:900px;">Date:<?php $date= date("d/m/Y");echo'&nbsp;';
echo'<font color="#FF0000" size="+1">';echo"$date";echo'</font>';?>&nbsp;&nbsp;<a href="###" title="Go Back"><<</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" title="Print Report" onclick="window.print()">Print </a></P> 
<table   width="1000" border="1" style="border-collapse:collapse; margin-top:20px; font-family:'Agency FB';" align="center">
<thead>
<tr>
<th colspan="16" style="font-weight:600; color:#009900; font-family:'Agency FB';" align="left"><?php $result = mysqli_query( $con,"select count(id) as num_rows from hostel_fee" );
$row = mysqli_fetch_object( $result );
$total = $row->num_rows;?><font color="#000000">Student:&nbsp;</font><font color="#FF0000"><?php echo "$total"?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KAYOSOFT PAYMENT SYSTEM</th>
</tr>
<tr>
<td colspan="16" height="10"></td>
</tr>
    <tr style="color:#FFFFFF; background-color:#666666;">
           <th>FIRST_NAME</th> 
           <th>LAST_NAME</th>
           <th>HOUSE</th>
           <th>COMBINA</th>
           <th>MATH</th>
           <th>ECON</th>
           <th>ENTREP</th>
           <th>BIOS</th>
           <th>PHYS</th>
           <th>CHEM</th>
           <th>GEO</th>
           <th>FINE/ART</th>
           <th>G/PAPER</th>
           <th>SUB_ICT</th>
           <th>SUB_MTC</th>
           <th>POINTS</th>
    </tr> 
    </thead>
    <tbody>
    	<?php
// mysql_connect("localhost", "root","")or die("failed to connect to the server").mysql_error();
// mysql_select_db("advanced_green_light")or die("failed to select the database").mysql_error();
// Define your colors for the alternating rows 
$color1 = "#CCFFCC";  
$color2 = "#BFD8BC";  
$row_count = 0; 
// Perform an statndard SQL query: 
$sql_events = mysqli_query($con,"select * from hostel_fee order by id DESC"); 
// We are going to use the "$row" method for this query. This is just my preference.
while ($row = mysqli_fetch_array($sql_events)) {  
     $firstname = $row["invoice_no"]; 
	 $lastname = $row["amount"];
	 // $house = $row["House"];
	 // $combination = $row["combination"];
	 // $math = $row["MATH"];
	 // $econ = $row["ECON"];
	 // $ent = $row["ENT"];
	 // $bio = $row["BIO"];
	 // $phys = $row["PHYS"];
	 // $chem = $row["CHEM"];
	 // $geo = $row["GEO"];
	 // $art = $row["ART"];
	 // $gp = $row["GP"];
	 // $ict = $row["ICT"];
	 // $sub_math = $row["SUB_MATH"];
	 // $points = $row["POINTS"];
    /* Now we do this small line which is basically going to tell 
    PHP to alternate the colors between the two colors we defined above. */ 
    $row_color = ($row_count % 2) ? $color1 : $color2; 
    // Echo your table row and table data that you want to be looped over and over here.
    echo "<tr>";
    echo"<td  bgcolor='$row_color' nowrap>"; 
	echo"$firstname</td>";
    echo"<td bgcolor='$row_color'>";
	echo"$lastname</td>"; 
    echo"<td bgcolor='$row_color'>"; 
	echo"$house</td>"; 
    echo"<td bgcolor='$row_color'>";
	echo"$combination</td>";
    echo"<td bgcolor='$row_color'>"; 
	echo"$math</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$econ</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$ent</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$bio</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$phys</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$chem</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$geo</td>";
	echo"<td bgcolor='$row_color'>";
	echo"$art</td>";
	echo"<td bgcolor='$row_color'>";   
	echo"$gp</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$ict</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$sub_math</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$points</td>";
    echo"</tr>"; 
    // Add 1 to the row count 
    $row_count++; 
} 
// Close out your table.
echo"</tbody>"; 
echo "</table>";

?>
<div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2>SBISTechs Inc</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <h2>Contact Info</h2>
        <p> 
            Address : street city, state 0000</br>
            Email   : JohnDoe@gmail.com</br>
            Phone   : 555-555-5555</br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Item</h2></td>
								<td class="Hours"><h2>Qty</h2></td>
								<td class="Rate"><h2>Sub Total</h2></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Communication</p></td>
								<td class="tableitem"><p class="itemtext">5</p></td>
								<td class="tableitem"><p class="itemtext">$375.00</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Asset Gathering</p></td>
								<td class="tableitem"><p class="itemtext">3</p></td>
								<td class="tableitem"><p class="itemtext">$225.00</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Design Development</p></td>
								<td class="tableitem"><p class="itemtext">5</p></td>
								<td class="tableitem"><p class="itemtext">$375.00</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Animation</p></td>
								<td class="tableitem"><p class="itemtext">20</p></td>
								<td class="tableitem"><p class="itemtext">$1500.00</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Animation Revisions</p></td>
								<td class="tableitem"><p class="itemtext">10</p></td>
								<td class="tableitem"><p class="itemtext">$750.00</p></td>
							</tr>


							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>tax</h2></td>
								<td class="payment"><h2>$419.25</h2></td>
							</tr>

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>Total</h2></td>
								<td class="payment"><h2>$3,644.25</h2></td>
							</tr>

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->

</body>
</html>
