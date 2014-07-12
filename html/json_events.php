<?php
    $link=mysql_pconnect("localhost","root","M@xim4log");

	if (!$link) {
    die('Could not connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db('symfony', $link);
	if (!$db_selected) {
	   die ('Impossible de sélectionner la base de données : ' . mysql_error());
	}
    mysql_query('SET CHARACTER SET utf8');
    $result = mysql_query("SELECT id, name, startDate FROM planning");
    mysql_close();
    $events = array();
    while ($row=mysql_fetch_array($result)){
       $title = $row['name'];
       $eventsArray['id'] =  $row['id'];
       $eventsArray['title'] = $title;
       $eventsArray['start'] = $row['startDate']; 
	   $eventsArray['end'] = $row['endDate']; 
       $events[] = $eventsArray;
     }
  echo json_encode($events);
?>