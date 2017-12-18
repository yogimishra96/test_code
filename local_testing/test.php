<?php

    	    $inputJSON = file_get_contents('php://input');
           if (!empty($inputJSON)) {
               $request = json_decode($inputJSON, TRUE);
           } else {
               $request = $_POST;
           }


print_r($request);

print_r($_FILES);






?>