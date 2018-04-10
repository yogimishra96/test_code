<?php
// die('ff');
 $data = '{
	"request_params": {
		"request_call_time": "2018-04-04 15:33:00",
		"request_url": "/controller/action",
		"credentials": {
			"customer_id": "91818",
			"access_token": "uQCQmtB0RlwaNOHv"
		},
		"customer_ids": [
			"91818"
		]
	}
}';





$data = '{
   "request_params": {
       "request_call_time": "2018-04-04 15:33:00",
       "request_url": "/controller/action",
       "credentials": {
           "customer_id": "91818",
           "access_token": "uQCQmtB0RlwaNOHv"
       },
       "customer_ids": [
           "91818"
       ]
   }
}';

//echo "<pre>";
//print_r(json_decode($data,TRUE));
//die();

 $curl_handle = curl_init();
 curl_setopt($curl_handle,CURLOPT_URL,'https://www.wholesalebox.biz/cron/getAgentsDataOfCustomers');
 // curl_setopt($curl_handle,CURLOPT_POST, true);
 curl_setopt($curl_handle,CURLOPT_POSTFIELDS,$data);
 // curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
 $buffer = curl_exec($curl_handle);
 //print_r($buffer);  die();
 $buffer  = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $buffer);
echo "<pre>";
 print_r(json_decode($buffer,true)) ;
 die;
 // print_r(json_decode($buffer));

 // print_r(json_decode($buffer)); die();
 // curl_close($curl_handle);
 // if (empty($buffer)){
 //     print "Nothing returned from url.<p>";
 // }
 // else{
 //     print $buffer;
 // }
?>
