<?php
namespace controller;

//import class
use PDO;

class Config extends PDO{
	private $host = 'localhost';
	private $dbname = 'ben2';
	private $username = 'dumet';
	private $password = 'school';

	public function __construct()
	{
		parent::__construct(
			'mysql:host='.$this->host.';dbname='.$this->dbname, 
			$this->username, 
			$this->password
		);
		\Cloudinary::config(array( 
		  "cloud_name" => "robani", 
		  "api_key" => "477414613349667", 
		  "api_secret" => "tOi05Zitaw9vmwEn91PskSDyJfU" 
		));
	}
}

?>