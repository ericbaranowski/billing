<?php

namespace Lara\Utils\Common;

use Lara\Utils\Common as Common;

/**
 * @package    WHMCS
 * @author     Amr M. Ibrahim <mailamr@gmail.com>
 * @copyright  Copyright (c) WHMCSAdminTheme 2016
 * @link       http://www.whmcsadmintheme.com
 */

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

/**
* calls a URL, using either POST or GET.
* 
* You may use this class in 2 ways, as follows :
* <code>
* $call = new doCall();
* 
* // Then, either set specific properties
* $call->setMethod('POST'); //or 'GET'
* $call->setURL('http://www.domain.com');
* $call->setQuery(array('option'=>'value'));
* $results = $call->doCall(); //holds the results array.
* 
* //Or, use a quick shortcut :
* $results = $call->doPOST('http://www.domain.com', array('option'=>'value'));
* </code>
*/
class callURL{
	
	private $callOptions;
	private $url;
	private $query;
	private $method;
	private $timeout;
	private $lastResult;
	private $jsonPost;
	
	
	/**
	 * @internal
	 */
	function __construct(){
		$this->setDefaults();
	}
	
	private function setDefaults(){
		$this->callOptions = array();
		$this->timeout = 30;
		$this->jsonPost = false;		
	}
	
	public function setMethod($method){
		if (strtoupper($method) === 'POST'){
			$this->method = 'POST';
		}elseif (strtoupper($method) === 'JSON_POST'){
			$this->method = 'POST';
			$this->jsonPost = true;
		}else {
			$this->method = 'GET';
		}
	}
	
	public function setURL($url){
			$this->url = $url;
	}

	public function setQuery($query){
			$this->query = $query;
	}
		
	public function setTimeout($timeout) {
		if (is_int($timeout)){
			$this->timeout = $timeout;
		}
	}
	
	public function getLastResult() {
		return $this->lastResult;
	}
		
    public function doCall(){
    	
    	## Preparing callOptions Array
    	$this->callOptions[CURLOPT_TIMEOUT] = $this->timeout;
    	$this->callOptions[CURLOPT_RETURNTRANSFER] = true;
        $this->callOptions[CURLOPT_SSL_VERIFYPEER] = false;
        
        if ($this->method === "POST"){
			if ($this->jsonPost === true){
				$this->callOptions[CURLOPT_HTTPHEADER] = array("Content-Type:  application/json; charset=UTF-8");
			}
        	$this->callOptions[CURLOPT_URL] = $this->url;
        	$this->callOptions[CURLOPT_POST] = true;
        	$this->callOptions[CURLOPT_POSTFIELDS] = $this->query;
        }else{
			$query = "";
			if (is_array($this->query) && !empty($this->query)) {
				$query = "?".http_build_query($this->query);
			}
        	$this->callOptions[CURLOPT_URL] = $this->url.$query;
        }
        
        ## Do Call
        $handle = curl_init();
        curl_setopt_array($handle, $this->callOptions);
        $returnedResp = curl_exec($handle); //what was returned.
        $serverRespCodes = curl_getinfo($handle); //all response codes and statistics.
        $returnedErrors = curl_error($handle); //all returned errors.
        
		
		## Check for fatal errors
		if(curl_errno($handle)){
			Common\ErrorHandler::FatalError("curl_error",curl_error($handle), curl_errno($handle),$this->callOptions);
		}
	    curl_close($handle);
		
        $this->lastResult = array(
		        'curlRequest'       => $this->callOptions,
        		'HTTP_Status_Code'  => $serverRespCodes['http_code'],
        		'Response'          => $returnedResp,
        		'Error_Description' => $returnedErrors 
        		);        
		return $this->lastResult;
    }

    public function doQuickCall($url, $query=array(), $method="GET"){
		$this->setDefaults();
    	$this->setMethod($method);
    	$this->setURL($url);
    	$this->setQuery($query);
    	return $this->doCall();
    }
    
    
    /**
    * A shortcut to do a GET/POST
    *
    * Example Usage :
    * <code>
    * doGET('http://www.domain.com', array('option'=>'value'));
	* doPOST('http://www.domain.com', array('option'=>'value'));
    * </code>
    *
    * @param string $url
    * @param array $query
    * @return array
    *
    */
    public function doGET($url, $query=array()) {
    	return $this->doQuickCall($url, $query, 'GET');
    }

    public function doPOST($url, $query=array()) {
    	return $this->doQuickCall($url, $query, 'POST');
    }
    
}
?>