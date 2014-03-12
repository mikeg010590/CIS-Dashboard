<?
include('../Model/model.php');

class Users
{
    /*
    2D ARRAY FROM MODEL EXPLAINED
    ============================= 
    Each row is an users and its respective correlating data
    each column has 7 indexes as follows:
    0 : users correlating blazerID
    1 : users name
    */
	
    private $users;
    
    function __construct()
    {
        $model        = new Model();
        $this->users = $model->getusers();
    }
    
    //Get name matching a blazerID
    function getName($blazerID)
    {
        for ($i = 0; $i < count($this->users); $i++) 
            if (strcmp($this->users[$i][0], $blazerID) == 0)
                return $this->users[$i][1];
    }
	
	//Get blazer matching a name
    function getBlazerID($name)
    {
        for ($i = 0; $i < count($this->users); $i++) 
            if (strcmp($this->users[$i][1], $name) == 0)
                return $this->users[$i][0];
    }
    
    //Print all data from controller
    function test()
    {
        for ($i = 0; $i < count($this->users); $i++) {
			$blazerID = $this->users[$i][0];
			$name = $this->users[$i][1];
            print '<b>user: ' . $i . '</b><br />';
            print '&nbsp;&nbsp; Name: ' . $this->getName($blazerID)  . "</br>";
            print '&nbsp;&nbsp; BlazerID: ' . $this->getBlazerID($name)  . "</br>";
            print "</br>";
        }
    }
    
}


$users = new users();
print $users->test();





?>

