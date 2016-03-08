<?php
class Config {
	public $account;
	public $password;
	public $impersonateUser;
	
	public function __construct ($account,$password,$impersonateUser) {
		$this->account = $account;
		$this->password = $password; 
		$this->impersonateUser = $impersonateUser;
	}
}

$dnsConfig = new Config("user","pw","actAs"); 
