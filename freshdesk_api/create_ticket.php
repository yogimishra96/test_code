<?php 
$api_key = "17q72DciDwIFOayvPFr";
  
$ticket_data = json_encode(array(

  "requester_id"  => 30000359533,  
  "priority" => 1,
  "subject" => 'sadfdsf',
  "description" => 'fdsaffsfaa',
  "status" => 5,  
  "group_id" => 30000052603
));
$url = "https://wsb.freshdesk.com/api/v2/tickets";
$ch = curl_init($url);

$header[] = "Content-type: application/json";
 
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$api_key");
curl_setopt($ch, CURLOPT_POSTFIELDS, $ticket_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$server_output = curl_exec($ch);
$info = curl_getinfo($ch);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$headers = substr($server_output, 0, $header_size);
$response = substr($server_output, $header_size);
$response_array = json_decode($response);
echo "<pre>";
print_r($response_array);
die();

if($info['http_code'] == 201) {
  // echo "Ticket  successfully, the response is given below \n";
  // echo "Response Headers are \n";
  // echo $headers."\n";
  // echo "Response Body \n";
  // echo "$response \n";
} else {
  if($info['http_code'] == 404) {
    echo "Error, Please check the end point \n";
  } else {
    echo "Error, HTTP Status Code : " . $info['http_code'] . "\n";
    echo "Headers are ".$headers;
    echo "Response are ".$response;
  }
}
curl_close($ch);
?>