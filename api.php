<?php
require_once 'AWSSDKforPHP/sdk.class.php';
header('Content-Type: text/plain; charset="UTF-8"');
//error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

loaderAllAPI();

if(isset($_GET['action'])){
if ($_GET['action'] === 'getData')
{
//     echo $_POST['data'];
    
    $json_object = json_decode($_POST['data'], true);
    
    $data = $json_object["getData_data"];
     
    if(check_data_type_Iscorrect($data, "getData"))
    {
      echo getData($data);
    }
}
}

if(isset($_POST['action'])){
if ($_POST['action'] === 'getData')
{
//     echo $_POST['data'];
    
    $json_object = json_decode($_POST['data'], true);
    
    $data = $json_object["getData_data"];
     
    if(check_data_type_Iscorrect($data, "getData"))
    {
      echo getData($data);
    }
}
}



//if ($_GET['action'] == 'getDevices')
//{   
//    echo getDevices();
//}
//
//else if ($_POST['action'] == 'getDevices')
//{   
//    echo getDevices();
//}




///////////////////////////////////////////////////////////////////////////
function loaderAllAPI()
{   
    foreach (glob("./api/*.php") as $filename)
    {
        require_once($filename);
    }
}

function check_data_type_Iscorrect($data, $data_type)
{
    if(empty($data))
    {
	$json_data = array(
			    'fail'=> '1'
			    ,'action'=>$data_type
			    ,"message"=>'data input type is incorrect'	
		);

	echo json_encode($json_data);
        
	return false;
    }
    else
    {
        return true;   
    }	
}

function filter_json_injection($json)
{
    while (list($key, $value) = each($json))
    {
        if(gettype($value) == gettype(array()))
        {
            filter_json_injection($value);
			
    	}
        else
        {
            $json[$key] = mysql_real_escape_string($value);
	}
    }        
    
    return $json;
}
?>