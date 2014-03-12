<?

class Model
{
    
    function getEvents()
    {
        $dbconn = pg_connect("host=cisdb user=gotfryd password=V3RY}b00st! dbname=gotfryd");
        $events = array();
        
        $results = pg_query($dbconn, "SELECT * FROM events") or die('connection failed');
        
        while ($row = pg_fetch_row($results))
            array_push($events, $row);
        
		pg_close();
        return $events;
    }
    
    function getComments()
    {
        $dbconn = pg_connect("host=cisdb user=gotfryd password=V3RY}b00st! dbname=gotfryd");
        $events = array();
        
        $results = pg_query($dbconn, "SELECT * FROM comments") or die('connection failed');
        
        while ($row = pg_fetch_row($results))
            array_push($events, $row);
        
        return $events;
    }
    
    function getUsers()
    {
        $dbconn = pg_connect("host=cisdb user=gotfryd password=V3RY}b00st! dbname=gotfryd");
        $events = array();
        
        $results = pg_query($dbconn, "SELECT * FROM users") or die('connection failed');
        
        while ($row = pg_fetch_row($results))
            array_push($events, $row);
        
        return $events;
    }
    
    function test()
    {
        
        print '<h1>CIS Dashboard Model Test - <small><i>(Events)</i></small></h1>';
        
        $model  = new Model();
		
        //Events
        print "<h2>Events</h2>";
        print "<pre>";
        print_r(array_values($model->getEvents()));
        print "</pre>";
        
        //Events
        print "<h2>Events</h2>";
        print "<pre>";
        print_r(array_values($model->getComments()));
        print "</pre>";
        
        //Users
        print "<h2>Users</h2>";
        print "<pre>";
        print_r(array_values($model->getUsers()));
        print "</pre>";
        

    }
    
}

/**
$model = new Model();
$model->test();
**/

?>



