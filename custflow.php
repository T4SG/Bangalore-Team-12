<?php
$post_data = array(
    'From' => "087568",
    'To' => "9980923819",
    'CallerId' => "087568",
    'Url' => "http://my.exotel.in/exoml/start/<flow_id>"
    'CallType' => "trans"
    'StatusCallback' => "<http//: adrestaurants.esy.es>" 
);
 
$exotel_sid = "sell5"; // Your Exotel SID - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
$exotel_token = "cac1ec5f6d5dc578ece52a4876255072a5dadf19"; // Your exotel token - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Calls/connect";
 
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
?>
