<?php 
$api_key = "17q72DciDwIFOayvPFr";
$password = "x";
$yourdomain = "https://wsb.freshdesk.com"; 

$ticket_data = json_encode(array(

  "body" => "Test Reply from wsb.in",
  
  "user_id"  => 30000364861

));

$url = "https://wsb.freshdesk.com/api/v2/tickets/534/reply";
$ch = curl_init($url);
$header[] = "Content-type: application/json";
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
curl_setopt($ch, CURLOPT_POSTFIELDS, $ticket_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
$info = curl_getinfo($ch);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$headers = substr($server_output, 0, $header_size);
$response = substr($server_output, $header_size);

if($info['http_code'] == 201) {
  
    echo "$response \n";
} else {
  if($info['http_code'] == 404) {
    echo "Error, Please check the end point \n";
  } else {
    echo "Error, HTTP Status Code : " . $info['http_code'] . "\n";
  
    echo "Response are ".$response;
  }
}
curl_close($ch);
?>