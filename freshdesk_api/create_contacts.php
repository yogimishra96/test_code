<?php 
$api_key = "17q72DciDwIFOayvPFr";
$password = 'x';
$yourdomain = "https://wsb.freshdesk.com";

$contact_data = json_encode(array(
  "name" => "tewsddsdsffdfsdsdfstq mishra",
  "email" => "tessdsdsdsdfdfddft.mishra@wholesalebox.co",
  "mobile" => "8824179288",
  "address" => "murlipura jaipur"
));

$url = "https://wsb.freshdesk.com/api/v2/contacts";
$ch = curl_init($url);
$header[] = "Content-type: application/json";
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
curl_setopt($ch, CURLOPT_POSTFIELDS, $contact_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
$info = curl_getinfo($ch);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$headers = substr($server_output, 0, $header_size);
$response = substr($server_output, $header_size);
if($info['http_code'] == 201) {
//   echo "Contact created successfully, the response is given below \n";
//   echo "Response Headers are \n";
//   echo $headers."\n";
//   echo "Response Body \n";
//   echo "$response \n";
// // } else {
//   if($info['http_code'] == 404) {
//     echo "Error, Please check the end point \n";
//   } else {
//   //   echo "Error, HTTP Status Code : " . $info['http_code'] . "\n";
//   //   echo "Headers are ".$headers."\n";
//   //   echo "Response is ".$response;
//   // }
}

print_r($response);

die();

curl_close($ch);

// $data = json_decode($response,true);

// print_r($data); 


?>