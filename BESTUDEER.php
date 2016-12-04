<?php
 

abstract class User 
//"abstract" zorgt ervoor dat je deze class niet uitsluitend op kunt roepen. Je moet met deze hoofdklasse de  die hierin zitten oproepen.
{
     
    private $username = "";
     
    public $password = "";
//geb. naam en ww variabelen worden geinitialiseerd.
     
    public function __construct($username, $password)
//Wat doet een construct?
    {
        $this->setUsername($username);
        $this->setPassword($password);
//setUsername? setPassword? Wat gebeurt er hierboven? Hoe wordt dit gebruikt/aangeroepen?
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