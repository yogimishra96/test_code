<?php 

$api_key = "17q72DciDwIFOayvPFr";
$password = "x";
$yourdomain = "wsb";

$contact_id = 30000612771; 

$url = "https://$yourdomain.freshdesk.com/api/v2/contacts/$contact_id";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
$info = curl_getinfo($ch);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$headers = substr($server_output, 0, $header_size);
$response = substr($server_output, $header_size);
$data = json_decode($response,true);
echo "<pre>";
print_r($data);
die();

if($info['http_code'] == 200) {
  echo "Contact fetched successfully, the response is given below \n";
  echo "Response Headers are \n";
  echo $headers."\n";
  echo "Response Body \n";
  echo "$response \n";
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