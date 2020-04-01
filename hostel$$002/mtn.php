
<?php 
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

$error = "";
if(isset($_POST['pay']))
{
    $amount=$_POST['amount'];
    $phoneNo=$_POST['phone_no'];
    $ref=rand(100000000000,999999999999);
    

// $url = 'https://www.easypay.co.ug/api/'; 
//  $payload = array( 'username' => '5046664e79350817', 
//  'password' => 'a19adac4dcd78f50', 
//  'action' => 'mmdeposit', 
//  'amount' => $amount, 
//  'phone'=> $phoneNo, 
//  'currency'=>'UGX', 
//  'reference'=>$ref, 
//  'reason'=>'Hostel Payment' 
//  ); 
  
//  //open connection 
//  $ch = curl_init(); 
  
//  //set the url, number of POST vars, POST data 
//  curl_setopt($ch,CURLOPT_URL, $url); 
//  curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($payload)); 
//  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
//  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
//  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,15); 
//  curl_setopt($ch, CURLOPT_TIMEOUT, 400); //timeout in seconds 
//  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
//  //execute post 
//  $result = curl_exec($ch); 
  
//  //close connection 
//  curl_close($ch); 
//  print_r(json_decode($result)); 
$aid=$_SESSION['id'];
 $tal = 1;
if($tal == 1){
      $ret="select * from transaction where user_id=?";
      $stmt= $mysqli->prepare($ret) ;
      $stmt->bind_param('i',$aid);
      $stmt->execute() ;
      $res=$stmt->get_result();
      $cnt=1;
      while($row=$res->fetch_object())
          {
            
            $total_amount=$row->total_amount;
            $balance=$row->amount_paid;
          

            
          }
          $new_bal = $balance - $amount;
          $bank = "Airtel Money";
          $branch = "";
          $reason = "Hostel Fee Payment";
      $query="insert into  transaction(user_id,invoiceno,bank,branch,total_amount,amount_paid,balance,detail) values(?,?,?,?,?,?,?,?)";
      $stmt = $mysqli->prepare($query);
      $rc=$stmt->bind_param('iissiiis',$aid,$ref,$bank,$branch,$total_amount,$amount,$new_bal,$reason);
      $stmt->execute();
      echo"<script>alert('Fees Succssfully Done');</script>";
}else{

}

?>
<htm>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php
} else{

    echo('Not working');
}
 ?> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
 </html>