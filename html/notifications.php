<?php
while(1) {
	$link=mysql_pconnect("localhost","root","M@xim4log");

	if (!$link) {
    die('Could not connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db('symfony', $link);
	if (!$db_selected) {
	   die ('Impossible de sélectionner la base de données : ' . mysql_error());
	}
	mysql_query('SET NAMES utf8');
	$result = mysql_query('SELECT message FROM notification LIMIT 5');
	if (!$result) {
		die('Could not query:' . mysql_error());
	}
	
	

	$id = $_POST['id'];
	$query  = "SELECT message FROM notification WHERE profile_id=".$id." AND viewed != 0 ";
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
            $data .= '<li class="media">';
            $data .= '<div class="media-body">';
            $data .= '<span class="label label-default pull-right"></span>';
            $data .= '<p class="margin-none">';
            
            $data .= html_entity_decode($row['message']);
            $data .= '</p>';
            $data .= '</div>';
            $data .= '</li>';
            
	}

	$query  = "SELECT count(*) message FROM notification WHERE profile_id=".$id." AND viewed = 0";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	
	// if we have new data, return it to the client
	if(!empty($data)) {
	
		
		echo json_encode(array("content" => $data, "number" => $row));
		//sleep(5);	// we sleep for 3s and check again for data
		break;
		
	}
	

	
}
?>