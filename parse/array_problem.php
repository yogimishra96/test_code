<?php

$array = 			array('2017'=> array('1' => array('1','2','3','4','50')
                                        ,'2' => array('10','22','33','45')
                                        ,'3' => array('11','22','30','4')
                                        ,'4' => array('10','22','33','45')
                                        ,'5' => array('11','22','30','4')
                                        ,'6' => array('10','22','33','45')
                                        ,'7' => array('11','22','30','4')
                                        ,'8' => array('11','22','30','4')
                                        ,'9' => array('10','22','33','45')
                                        ,'10' => array('11','22','30','4')
                                        ,'11' => array('10','22','33','45')
                                        ,'12' => array('11','22','30','4')
                                    )
                        );
foreach($array['2017'] as $single_array_key => $single_array) {
	// echo "<pre>";
	// print_r($single_array_key); print_r($single_array); 
	// die();
	foreach($single_array as $associative_key => $associative_value) {
		
		foreach ($array['2017'] as $key => $value) {
			foreach ($value as $key => $single_all) {
				echo $single_all;
			}
		}			 		
	}

	die();
}





?>        