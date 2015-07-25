<html>
   <head>
      <title>approaching due date</title>
   </head>
	
   <body>
      <?php
         date_default_timezone_set("Asia/Kolkata");
         $tod = date("d/m/Y");
         $due = date_create("26/7/2015");
         $diff=(int)date_diff($due,$tod);
         if($diff<2)
         {
$post_data = array(
    'From'   => '087568',
    'To'    => '9980923819',
    'Body'  => 'api yo'
);
 
$exotel_sid = "sell5"; 
$exotel_token = "cac1ec5f6d5dc578ece52a4876255072a5dadf19"; 
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
print "Response = ".print_r($http_result);
	 }
      ?>
   </body>
	
</html>
