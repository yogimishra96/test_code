<?php


$data = json_decode(file_get_contents("foodyo_output.json"), TRUE);


echo "<pre>";

foreach ($data['body']['Recommendations'] as $key => $value) {

   echo "Restaurant :- " .$value['RestaurantName']; 
   echo "\r\n";

   if($value['menu'][0]['type'] == 'sectionheader' ){
   		if($value['menu'][0]['children'][0]['type'] == 'item' && $value['menu'][0]['children'][0]['selected'] == 1 ){
   			echo "Item :- ".$value['menu'][0]['children'][0]['name'];  
   			echo "\r\n";
   			foreach ($value['menu'][0]['children'][0]['children'] as $key => $value) {
   				if($value['selected'] == 1){
   					echo "Child :- ".$key.'--'.$value['name'];
   					echo "\r\n";
   					foreach ($value['children'] as $key => $value) {
   						if($value['selected'] == 1){
   							echo "Child :- ".$key.'--'.$value['name'];
   							echo "\r\n";
		   				}
		   			}
   					
   				}
   			}

   		}

   }

}







?>