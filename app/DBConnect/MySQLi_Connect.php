<?php 
class MySQLi_Connect {

	private $connection;

	public function __construct()
	{

	}

	public function getConnection()
	{
		return $this->$connection;
	}


}