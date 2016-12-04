<?php
class User{
	private $username = "";
	private $password = "";

	function __construct($Uarg,$Parg){
		$this->username = $Uarg;
		$this->password = $Parg;

	}

	function getUsername(){
		return $this->username;
	}

	function setUsername($Nuser){
		$this->username = $Nuser;
	}

}


$tom = new User('tom', 'somepw123');
echo $tom->getUsername();

$tom->setUsername('nieuwe_tom');
echo $tom->getUsername();


$dennis = new User('dennis', '543');
echo $dennis->getUsername();
?>