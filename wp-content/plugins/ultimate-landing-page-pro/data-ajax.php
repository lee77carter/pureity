<?php
$path = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path.'wp-load.php');

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function lpp_send_email(){


    add_filter( 'wp_mail_content_type', 'lpp_set_html_content_type' );
    function lpp_set_html_content_type() {
        return 'text/html';
    }


	 //$attachments =  array( WP_CONTENT_DIR . '/uploads/2015/07/04_The-Make-Up.mp3' );
		$headers = 'From: '.get_option('lpp_email_newsletter_from_name').' <'.get_option('lpp_email_newsletter_from_email').'>' . "\r\n";
	    $to = filter_var($_REQUEST['lpp_email'],FILTER_SANITIZE_EMAIL);
	    $subject = get_option('lpp_email_newsletter_subject');
	    $message = get_option('lpp_email_newsletter');
	    wp_mail( $to, $subject, $message, $headers );

        remove_filter( 'wp_mail_content_type', 'lpp_set_html_content_type' );

}

function lpp_send_to_db() {
	global $wpdb;

	$s_name = filter_var($_REQUEST['lpp_name'],FILTER_SANITIZE_STRING);
	$s_email = filter_var($_REQUEST['lpp_email'],FILTER_SANITIZE_EMAIL);

	

	 if (!filter_var($s_email, FILTER_VALIDATE_EMAIL)) {
      echo  "Invalid email format"; 
      exit;
    }
	
	$lpp_Name = wp_strip_all_tags($s_name);
	$lpp_Email = wp_strip_all_tags($s_email);

	
	$table_name = $wpdb->prefix . 'lpp_data';
	
$resultss = $wpdb->insert( 
		$table_name, 
		array( 
			'name' => $lpp_Name, 
			'email' => $lpp_Email, 
		) 
	);
return $resultss;
}



$data = check_input($_REQUEST['lpp_name']);
$data .= check_input($_REQUEST['lpp_email']);
$data_lower = strtolower($data);

$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
if (!preg_match($pattern,$data_lower))
{
    echo ("Invalid Input"); 
}
else{

	$checkss = lpp_send_to_db();
	
	$lpp_url = check_input($_REQUEST['lpp_sub_url']);
	if($checkss && !empty($lpp_url)){
		$lpp_enable_newsletter = get_option('lpp_enable_email_newsletter');
		if ($lpp_enable_newsletter === 'true') {
			lpp_send_email();   		
		}
		echo "run_url";
	}
	elseif ($checkss > 0){
		$lpp_enable_newsletter = get_option('lpp_enable_email_newsletter');
		if ($lpp_enable_newsletter === 'true') {
			lpp_send_email();   		
		}
		echo 'success';
	}
	else{
		echo $checkss;
	}

	// remove_filter( 'wp_mail_content_type', 'lpp_set_html_content_type' );

	 

}


 ?>
