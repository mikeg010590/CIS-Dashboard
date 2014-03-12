<?
include('../Model/model.php');

class Comments
{
    /*
    2D ARRAY FROM MODEL EXPLAINED
    ============================= 
    Each row is an comments and its respective correlating data
    each column has 7 indexes as follows:
    0 : UniqueID
    1 : comments Title
    2 : comments start time
    3 : comments end time
    4 : comments details
    5 : comments creation date
    6 : comments correlating blazerID
    */
	
    private $comments;
    
    function __construct()
    {
        $model        = new Model();
        $this->comments = $model->getComments();
    }
    
    //Get all comments matching a blazerID
    function getcomments($blazerID)
    {
        $commentsMatches = Array();
        for ($i = 0; $i < count($this->comments); $i++) {
            if (strcmp($this->comments[$i][4], $blazerID) == 0) {
                array_push($commentsMatches, $this->comments[$i][4]);
            }
        }
        return $commentsMatches;
    }
	
	//get title of comments given unique ID
	function getTitle($uid){
		for ($i = 0; $i < count($this->comments); $i++) 
			if($this->comments[$i][0] == $uid)
				return $this->comments[$i][1];
	}
	
	//get details of comments give unique ID
	function getDetails($uid){
		for ($i = 0; $i < count($this->comments); $i++) 
			if($this->comments[$i][0] == $uid)
				return $this->comments[$i][2];
	}
	
	//get Creation Date of comments give unique ID
	function getCreationDate($uid){
		for ($i = 0; $i < count($this->comments); $i++) 
			if($this->comments[$i][0] == $uid)
				return $this->comments[$i][3];
	}
	
	//get BlazerID of comments give unique ID
	function getBlazerID($uid){
		for ($i = 0; $i < count($this->comments); $i++) 
			if($this->comments[$i][0] == $uid)
				return $this->comments[$i][4];
	}
	
	//get BlazerID of comments give unique ID
	function getEventID($uid){
		for ($i = 0; $i < count($this->comments); $i++) 
			if($this->comments[$i][0] == $uid)
				return $this->comments[$i][5];
	}
    
    //Print all data from controller
    function test()
    {
        for ($i = 0; $i < count($this->comments); $i++) {
			$uniqueID = $this->comments[$i][0];
            print '<b>comments: ' . $i . '</b><br />';
            print '&nbsp;&nbsp; UniqueID: ' . $uniqueID  . "</br>";
            print '&nbsp;&nbsp; Title: ' . $this->getTitle($uniqueID) . "</br>";
            print '&nbsp;&nbsp; Details: ' . $this->getDetails($uniqueID) . "</br>";
            print '&nbsp;&nbsp; Created: ' . $this->getCreationDate($uniqueID) . "</br>";
            print '&nbsp;&nbsp; BlazerID: ' . $this->getBlazerID($uniqueID) . "</br>";
            print '&nbsp;&nbsp; EventID: ' . $this->getEventID($uniqueID) . "</br>";
            print "</br>";
        }
    }
    
}


$comments = new Comments();
print $comments->test();





?>

