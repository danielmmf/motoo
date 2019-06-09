<?php

namespace App\Http\Controllers;

class VimeoController extends Controller
{
    public function api(){
    	header('Access-Control-Allow-Origin: *', false);  
        echo 'OK';
    }
    
    public function index(){
    	echo 'init';
        $curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.vimeo.com/oauth/authorize?client_id=650638a545f61d482fc89344a441c6634c4ab756&response_type=code&redirect_uri=https://devinhas-sp.herokuapp.com/vimeo/api&state=abc123",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "authorization: basic NjUwNjM4YTU0NWY2MWQ0ODJmYzg5MzQ0YTQ0MWM2NjM0YzRhYjc1NjpwMmFPdGwxenBtMkdxRnVjTWJJb2FheHBTdDZMNVlTR1RrRUlyUnVkd3BueVIwWGZ5Z015akkwNkNFSFdGb216VWtGUWFMUi9MeVhTZ29NeS9VZUh3dnVOSDk5aXJnUHRtcHR5L3NBQWlOb1JNeUo2TGRJUTR3QVNZUSs0dmJqUg==",
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		print_r($curl);
		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  print_r($response);
		}
		echo 'final';
    }
   
    
}
