<?php

try {
     
    $mng = new MongoDB\Driver\Manager("mongodb://root:123@localhost:27017/wsbox_crm");
    
    $bulk = new MongoDB\Driver\BulkWrite;
    echo "<pre>";
    //print_r($bulk); die();
    $id = new MongoDB\BSON\ObjectId;
    echo "<pre>";
    print_r($id); die();
    $doc = ['_id' => new MongoDB\BSON\ObjectID, 'name' => 'Toyota', 'price' => 26700];
    $bulk->insert($doc);
    $bulk->update(['name' => 'Audi'], ['$set' => ['price' => 52000]]);
    $bulk->delete(['name' => 'Hummer']);
    echo "<pre>";
    print_r($mng->executeBulkWrite('wsbox_crm.cars', $bulk));
    // die('asdf');    
} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";    
}

?>
