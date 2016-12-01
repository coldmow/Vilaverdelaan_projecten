<?php
 

abstract class User 
//"abstract" zorgt ervoor dat je deze class niet uitsluitend op kunt roepen.
{
     
    private $username = "";
     
    public $password = "";
 
     
    public function __construct($username, $password)
    {
        $this->setUsername($username);
        $this->setPassword($password);
    }
     
    public function getUsername()
    {
        return $this->username;
    }
     
    public function setUsername($username)
    {
        $this->username = $username;
    }
     
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
     
    abstract public function doStuff();
     
}
 
class NormalUser extends User
{
    public function doUserStuff()
    {
         
    }
}
 
class Supervisor extends User
{
     
    public function doUserStuff()
    {
         
    }
     
}
 
 
// main code....
 
$tomas = new User('tomas', 'legend32');
$anna = new User('Anna', 'whatevah96');
 
echo $tomas->username;
echo $anna->password;
 
//$anna->password = password_hash('legend32', PASSWORD_DEFAULT);
$anna->setPassword('legend32');
?>