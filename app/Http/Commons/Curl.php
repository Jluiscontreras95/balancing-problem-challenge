<?php

namespace App\Http\Commons;

class Curl {

	// private $urlBase;
	private $path;

	public function __construct($path) {
		$this->path = $path;
	}

	public function get($data=false, $headers=false) {
		$ch = curl_init($this->path);
		if($data)
		{
			curl_setopt($ch, CURLOPT_POST, 1);
    		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		}
		if($headers)
		{
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		
		// return json_decode($result, true);
		return $result;
	}

}