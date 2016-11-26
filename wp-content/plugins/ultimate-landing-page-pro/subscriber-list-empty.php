	<?php

$path1 = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path1.'wp-load.php');

if (current_user_can('activate_plugins' )) {

	global $wpdb;

	$lpp_db = $wpdb->prefix.'lpp_data';

$result = $wpdb->query( 
		"
         DELETE FROM $lpp_db;
		"
        );
	if ($result === 0) {
		echo "No records found!";
	}else if($result === false){
		echo "Some error occurred";
	}
	else{
		echo 'Success!';
	}
}else{
	echo "...";
}


?>