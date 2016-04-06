<?
class AscioConfigV2 {
	public $account="username";
	public $password="password";
	public $testMode=true;

	public function getWsdl () {
		return $this->testMode ? 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl' : 'https://aws.ascio.com/2012/01/01/AscioService.wsdl';
	}
	public function getSession () {
		return array(
			'Account'=> $this->account,
			'Password' => $this->password
		);
	}
}
$configV2 = new AscioConfigV2();
?>
