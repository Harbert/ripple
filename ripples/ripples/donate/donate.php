<?php

if(isset($_POST['fname'])){

$name = $_POST['fname'];
$email = $_POST['email'];
$amount = $_POST['amount'];
//$donate = $_POST['options'];


echo $email;

$curl = curl_init();

$customer_email = $email;
$amount = $amount;
$name = $name;
$currency = "UGX";
 // ensure you generate unique references per transaction.
$value = rand(1000000000,1000000000000);

$txref = 'RFFLW--'.$value ;

$PBFPubKey = "FLWPUBK-8cc6a06ce5789706d24e47dbc0f2d385-X"; // get your public key from the dashboard.
$redirect_url = "Ripples/Ripples/success.php";
//$payment_plan = "pass the plan id"; // this is only required for recurring payments.


curl_setopt_array($curl, array(
 CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'customer_email'=>$customer_email,
    'currency'=>$currency,
    'txref'=>$txref,
    'name'=>$name,
    'PBFPubKey'=>$PBFPubKey,
    'redirect_url'=>$redirect_url,
  //  'payment_plan'=>$payment_plan
  ]),
  CURLOPT_HTTPHEADER => [
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the rave API
  die('Curl returned error: ' . $err);
}

$transaction = json_decode($response);

if(!$transaction->data && !$transaction->data->link){
  // there was an error from the API
  print_r('API returned error: ' . $transaction->message);
}

// uncomment out this line if you want to redirect the user to the payment page
//print_r($transaction->data->message);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $transaction->data->link);
}
 ?>
