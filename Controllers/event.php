<?
include('../Model/model.php');

class Events
{
    /*
    2D ARRAY FROM MODEL EXPLAINED
    ============================= 
    Each row is an event and its respective correlating data
    each column has 7 indexes as follows:
    0 : UniqueID
    1 : Event Title
    2 : Event start time
    3 : Event end time
    4 : Event details
    5 : Event creation date
    6 : Event correlating blazerID
    */
	
    private $events;
    
    function __construct()
    {
        $model        = new Model();
        $this->events = $model->getEvents();
    }
    
    //Get all events matching a blazerID
    function getEvents($blazerID)
    {
        $eventMatches = Array();
        for ($i = 0; $i < count($this->events); $i++) {
            if (strcmp($this->events[$i][6], $blazerID) == 0) {
                array_push($eventMatches, $this->events[$i][6]);
            }
        }
        return $eventMatches;
    }
	
	//get title of event given unique ID
	function getTitle($uid){
		for ($i = 0; $i < count($this->events); $i++) 
			if($this->events[$i][0] == $uid)
				return $this->events[$i][1];
	}
	
	//get Start Date of event give unique ID
	function getStartDate($uid){
		for ($i = 0; $i < count($this->events); $i++) 
			if($this->events[$i][0] == $uid)
				return $this->events[$i][2];
	}
	
	//get end Date of event give unique ID
	function getEndDate($uid){
		for ($i = 0; $i < count($this->events); $i++) 
			if($this->events[$i][0] == $uid)
				return $this->events[$i][3];
	}
	
	//get details of event give unique ID
	function getDetails($uid){
		for ($i = 0; $i < count($this->events); $i++) 
			if($this->events[$i][0] == $uid)
				return $this->events[$i][4];
	}
	
	//get Creation Date of event give unique ID
	function getCreationDate($uid){
		for ($i = 0; $i < count($this->events); $i++) 
			if($this->events[$i][0] == $uid)
				return $this->events[$i][5];
	}
	
	//get BlazerID of event give unique ID
	function getBlazerID($uid){
		for ($i = 0; $i < count($this->events); $i++) 
			if($this->events[$i][0] == $uid)
				return $this->events[$i][6];
	}
    
    //Print all data from controller
    function test()
    {
        for ($i = 0; $i < count($this->events); $i++) {
		$uniqueID = $this->events[$i][0];
		
            print '<b>Event: ' . $i . '</b><br />';
            print '&nbsp;&nbsp; UniqueID: ' . $uniqueID . "</br>";
            print '&nbsp;&nbsp; Title: ' . $this->getTitle($uniqueID) . "</br>";
            print '&nbsp;&nbsp; starttime: ' . $this->getStartDate($uniqueID) . "</br>";
            print '&nbsp;&nbsp; endtime: ' . $this->getEndDate($uniqueID) . "</br>";
            print '&nbsp;&nbsp; details: ' . $this->getDetails($uniqueID) . "</br>";
            print '&nbsp;&nbsp; created: ' . $this->getCreationDate($uniqueID) . "</br>";
            print '&nbsp;&nbsp; blazerid: ' . $this->getBlazerID($uniqueID) . "</br>";
            print "</br>";
        }
    }
    
}


$events = new Events();
print $events->test();





?>

