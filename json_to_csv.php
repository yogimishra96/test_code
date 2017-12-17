<?php

	
	$json = '{"data":[{"duration":"43","number":"+12345678","time_stamp":1497531965447},{"duration":"187","number":"56565 65656","time_stamp":1497531624998}]}';

	$result = json_decode($json,true);

	$file_name =  'contacts.csv';
	        $fp = fopen($file_name, 'w');
	                     

	        $data = array('Duration', 
	                      'Number', 
	                      'Time' 
	                     );
	        fputcsv($fp, $data);    
	        echo "<pre>";	        
	        
	        print_r($data);
	        date_default_timezone_set('Asia/Kolkata');

	        if( !empty($result) ) {
	            foreach ($result['data'] as $key => $value) {
	                print_r($value);
	                $data = array($value['duration'], 
	                            preg_replace( '/[+ ]/','',$value['number']),
	        					date('d-m-Y',($value['time_stamp'] / 1000 )), 
	                             );
	                                                         
	                fputcsv($fp, $data);
	            }
	        }    
	        
	        print_r($data); 

	        fclose($fp);
?>

