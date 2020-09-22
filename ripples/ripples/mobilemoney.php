<?php  //Testing Mobile money incoming
 $url = 'https://www.easypay.co.ug/api/';
 $payload = array( 'username' => '___YOUR CLIENT ID___',
 'password' => '___YOUR CLIENT SECRET___',
 'action' => 'mmdeposit',
 'amount' => 500,
 'phone'=>'256781924250',
 'currency'=>'UGX',
 'reference'=>12,
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
 ?>
