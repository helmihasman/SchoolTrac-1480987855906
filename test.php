<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        //Start heck if CouchDB is running
//        $ch = curl_init();
// 
//        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/');
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-type: application/json',
//                'Accept: */*'
//        ));
//
//        $response = curl_exec($ch);
//        print_r($response);
//
//        curl_close($ch);
       //end check if ChouchDB is running
//        echo "<br><br>";
        
        
        //start get a list of database
//        $ch = curl_init();
// 
//        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/_all_dbs');
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-type: application/json',
//                'Accept: */*'
//        ));
//
//        $response = curl_exec($ch);
//        print_r($response);
//
//        curl_close($ch);
// 
        //end get a list of database
//          echo "<br><br>";
        
        
        //start create a database
//        $table = 'customers';
//        $ch = curl_init();
//
//        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/'.$table);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        //curl_setopt($ch, CURLOPT_USERPWD, 'myDBusername:myDBpass');
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-type: application/json',
//                'Accept: */*'
//        ));
//
//        $response = curl_exec($ch);
//        print_r($response);
//
//        curl_close($ch);
        //end create a database
        
        
        //start get an UUID from database
        
//        $ch = curl_init();
// 
//        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/_uuids');
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-type: application/json',
//                'Accept: */*'
//        ));
//
//       // curl_setopt($ch, CURLOPT_USERPWD, 'myDBusername:myDBpass');
//
//        $response = curl_exec($ch);
//        $_response = json_decode($response, true);
//
//        $UUID = $_response['uuids'];
//        print_r($response);
//        print_r($UUID);
//
//        curl_close($ch);
        
        //end get an UUID from database
        
//         echo "<br><br>";
        //start create a document
        
        if(isset($_GET['test-data'])){
        	$test = $_GET['test-data'];
    	}
    	
    	if(isset($_GET['dataa'])){
        	$dataa = $_GET['dataa'];
    	}
    	
    	echo $test."  ".$data;

//        $ch = curl_init();
//
//        $customer = array(
//                'firstname' => 'Branko',
//                'lastname' => 'Ajzele',
//                'username' => 'ajzele',
//                'email' => 'branko.ajzele@example.com',
//                'pass' => md5('myPass123')
//        );
//
//        $payload = json_encode($customer);
//
//        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/customers/'.$customer['username']);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); /* or PUT */
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-type: application/json',
//                'Accept: */*'
//        ));
//
//       // curl_setopt($ch, CURLOPT_USERPWD, 'myDBusername:myDBpass');
//
//        //$response = curl_exec($ch);
//       // print_r($response);
//
//        curl_close($ch);
//        //end create a document
//        
//        echo "<br><br>";
        //start get a document
//        $ch = curl_init();
// 
//        $documentID = 'ajzele';
//
//        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/customers/'.$documentID);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-type: application/json',
//                'Accept: */*'
//        ));
//
//        //curl_setopt($ch, CURLOPT_USERPWD, 'myDBusername:myDBpass');
//
//        $response = curl_exec($ch);
//        print_r($response);
//
//        curl_close($ch);
        //end get a document
        
        
//        echo "<br><br>";
        //Start update existing documents
        
//        $ch = curl_init();
// 
//        $customer = array(
//                'firstname' => 'Branko_2',
//                'lastname' => 'Ajzele_2',
//                'username' => 'ajzele',
//                'email' => 'branko.ajzele@example.com',
//                'pass' => md5('myPass123')
//        );
//
//        $customer['_rev'] = '2-a00def9ba43fc9d60a7614655257dbc6';
//
//        $payload = json_encode($customer);
//
//        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/customers/'.$customer['username']);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); /* or PUT */
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-type: application/json',
//                'Accept: */*'
//        ));

        //curl_setopt($ch, CURLOPT_USERPWD, 'myDBusername:myDBpass');

//        $response = curl_exec($ch);
//        print_r($response);
//
//        curl_close($ch);
        
        //end update existing documents
        
        
//        echo "<br><br>";
        //Start create a document with attachment
        
//        $ch = curl_init();
// 
//        $database = 'customers';
//        $documentID = 'ajzele';
//        $revision = '3-d1bf433730db4be507915d519f860bd0';
//
//        $attachment = 'star.png';
//        $repository = '/Users/helmi/Desktop/';
//
//        $finfo = finfo_open(FILEINFO_MIME_TYPE);
//        $contentType = finfo_file($finfo, $repository.$attachment);
//
//        $payload = file_get_contents($repository.$attachment);
//
//        curl_setopt($ch, CURLOPT_URL, sprintf('http://127.0.0.1:5984/%s/%s/%s?rev=%s', $database, $documentID, $attachment, $revision));
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
//        //curl_setopt($ch, CURLOPT_POST, true);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-type: '.$contentType,
//                'Accept: */*'
//        ));
//
//        //curl_setopt($ch, CURLOPT_USERPWD, 'myDBusername:myDBpass');
//
//        $response = curl_exec($ch);
//        print_r($response);
//
//        curl_close($ch);
//        
//        //end create a document with attachment
//        
//        
//        echo "<br><br>";
//        //start delete a document
//        $ch = curl_init();
// 
//        $database = 'customers';
//        $documentID = 'ajzele';
//        $revision = '4-3e2e08ea0945fa65bc4fc9ee6f6e57c9';
//
//        curl_setopt($ch, CURLOPT_URL, sprintf('http://127.0.0.1:5984/%s/%s?rev=%s', $database, $documentID, $revision));
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-type: application/json',
//                'Accept: */*'
//        ));
//
//        //curl_setopt($ch, CURLOPT_USERPWD, 'myDBusername:myDBpass');
//
//        $response = curl_exec($ch);
//        print_r($response);
//
//        curl_close($ch);
        //end delete a document
        ?>
    </body>
</html>
