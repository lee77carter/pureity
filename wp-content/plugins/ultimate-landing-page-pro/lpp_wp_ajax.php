<?php

add_action( 'wp_ajax_nopriv_lpp_landingpage_db', 'lpp_landingpage_db_wp_ajax'  );
add_action( 'wp_ajax_lpp_landingpage_db', 'lpp_landingpage_db_wp_ajax' );

add_action( 'wp_ajax_nopriv_lpp_landingpage_mailchimp', 'lpp_landingpage_mailchimp_wp_ajax'  );
add_action( 'wp_ajax_lpp_landingpage_mailchimp', 'lpp_landingpage_mailchimp_wp_ajax' );

add_action( 'wp_ajax_nopriv_lpp_landingpage_getresponse', 'lpp_landingpage_getresponse_wp_ajax'  );
add_action( 'wp_ajax_lpp_landingpage_getresponse', 'lpp_landingpage_getresponse_wp_ajax' );


function lpp_landingpage_db_wp_ajax(){
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
	      exit();
	    }
		
		$lpp_Name = wp_strip_all_tags($s_name);
		$lpp_Email = wp_strip_all_tags($s_email);

		
		$table_name = $wpdb->prefix . 'lpp_data';

		$check_existing = $wpdb->get_results(
			"SELECT * FROM `$table_name` WHERE `email` = '$lpp_Email'"
			);

		if (empty($check_existing)) {
			$resultss = $wpdb->insert( 
			$table_name, 
			array( 
				'name' => $lpp_Name, 
				'email' => $lpp_Email, 
			) 
		);
		return $resultss;
		}else{
			echo get_option('lpp_subscriber_exists_msg','Subscriber Already Exists');
			exit();
		}

	return $resultss;
	}



	$data = check_input($_REQUEST['lpp_name']);
	$data .= check_input($_REQUEST['lpp_email']);
	$data_lower = strtolower($data);
	$data_spaces = str_replace(' ','',$data_lower);

	$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
	if (!preg_match($pattern,$data_spaces))
	{
	    echo ("Invalid Input");
	    exit();
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
			exit();
		}
		elseif ($checkss > 0){
			$lpp_enable_newsletter = get_option('lpp_enable_email_newsletter');
			if ($lpp_enable_newsletter === 'true') {
				lpp_send_email();   		
			}
			echo get_option('lpp_success_msg','Thank You for subscribing');
			exit();
		}
		else{
			echo $checkss;
			exit();
		}

		// remove_filter( 'wp_mail_content_type', 'lpp_set_html_content_type' );
	}

}

function lpp_landingpage_mailchimp_wp_ajax(){

	require_once('inc/MCAPI.class.php');

		function check_input($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}


		$p_id = check_input($_REQUEST['lpp-id']);
		$sm_api_key =  get_post_meta($p_id,'lpp_mailchimp_apikey',true);
		$api = new MCAPI($sm_api_key);



	function lpp_send_email(){


	    add_filter( 'wp_mail_content_type', 'set_html_content_type' );
	    function set_html_content_type() {
	        return 'text/html';
	    }


		 //$attachments =  array( WP_CONTENT_DIR . '/uploads/2015/07/04_The-Make-Up.mp3' );
			$headers = 'From: '.get_option('lpp_email_newsletter_from_name').' <'.get_option('lpp_email_newsletter_from_email').'>' . "\r\n";
		    $to = check_input($_REQUEST['lpp_email']);
		    $subject = get_option('lpp_email_newsletter_subject');
		    $message = get_option('lpp_email_newsletter');
		    wp_mail( $to, $subject, $message, $headers );

	        remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

	}

	$smf_fName = check_input($_REQUEST['lpp_name']);
	$smf_email = check_input($_REQUEST['lpp_email']);

		$merge_vars = Array( 
	        'EMAIL' => $smf_email,
	        'FNAME' => $smf_fName
	    );
		
	$data = check_input($_REQUEST['lpp_name']);
	$data .= check_input($_REQUEST['lpp_email']);
	$data_lower = strtolower($data);
	$data_spaces = str_replace(' ','',$data_lower);

	$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
	if (!preg_match($pattern,$data_spaces))
	{
	    echo ("Invalid Input");
	    exit();
	}
	else{
	 
		$list_id = get_post_meta($p_id,'lpp_mailchimp_listid',true);
		$sub_url = check_input($_REQUEST['lpp_sub_url']);
		if (!empty($sub_url)) {
			if($api->listSubscribe($list_id, $smf_email,$merge_vars, '', false) === true) {
			$lpp_enable_newsletter = get_option('lpp_enable_email_newsletter');
			if ($lpp_enable_newsletter === 'true') {
				lpp_send_email();   		
			}
			echo 'run_url';
			exit();
			 
		}
		} else if ($api->listSubscribe($list_id, $smf_email,$merge_vars, '', false) === true) {
			$lpp_enable_newsletter = get_option('lpp_enable_email_newsletter');
			if ($lpp_enable_newsletter === 'true') {
				lpp_send_email();   		
			}
			echo get_option('lpp_success_msg','Thank You for subscribing');
			exit();
		} else{
			// An error ocurred, return error message	
			if($api->errorCode) {
		if ($api->errorCode === 214) {
		   echo get_option('lpp_subscriber_exists_msg','Subscriber Already Exists');
		   exit;
		} elseif ($api->errorCode === 104) {
			echo "Invalid API Key Or List Name";
			exit;
		} else {
			echo "Unknown Error Occurred";
			var_dump($api->errorCode);
			exit;
		}
	}

	}

	}
	
}



function lpp_landingpage_getresponse_wp_ajax(){

	function check_input($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}

	function send_data_to_gr_api(){
	require_once 'inc/jsonRPCClient.php';

	$p_id = check_input($_REQUEST['lpp-id']);
	$api_key = get_post_meta($p_id,'lpp_getresponse_api_key',true);

	$api_url = 'http://api2.getresponse.com';

	$client = new jsonRPCClient($api_url);

	$campaign_name_wp = get_post_meta($p_id,'lpp_getresponse_campaign_id',true);
	$user_given_campaign_name = array ( 'EQUALS' => $campaign_name_wp);


	try {
		$campaigns = $client->get_campaigns(
	    $api_key,
	    array (
	        'name' => $user_given_campaign_name
	    )
	);

	$campaign_keys = array_keys($campaigns);
	$CAMPAIGN_ID = array_pop($campaign_keys);

		$result = $client->add_contact(
	    $api_key,
	    array (
	        'campaign'  => $CAMPAIGN_ID,
	        'name'      => $_REQUEST['lpp_name']." ",
	        'email'     => $_REQUEST['lpp_email'],

	    )

	);

		echo get_option('lpp_success_msg','Thank You for subscribing');
		exit();
		
	} catch (Exception $e) {
		$gr_contact_exists = "Contact already added to target campaign";
		$gr_contact_queue = "Contact already queued for target campaign";
		$gr_invalid_params = "Request have return error: Invalid params";
		$gr__invalid_param_result = strstr($e, $gr_invalid_params, $before_needle = true);
		$gr__c_exists_result = strstr($e, $gr_contact_exists, $before_needle = true);
		$gr_contact_queue_results = strstr($e, $gr_contact_queue, $before_needle = true);
		if($gr__invalid_param_result !== false){
			echo "Invalid API Key Or List Name";
			exit;
		} else if ($gr__c_exists_result !== false) {
			echo get_option('lpp_subscriber_exists_msg','Subscriber Already Exists');
			exit;
		} else if ($gr_contact_queue_results !== false) {
			echo get_option('lpp_subscriber_exists_msg','Subscriber Already Exists');
			exit;
		} else{
			echo "Unknown error occurred!";
			exit;
		}

		
	}



	}

	function lpp_send_email(){


	    add_filter( 'wp_mail_content_type', 'set_html_content_type' );
	    function set_html_content_type() {
	        return 'text/html';
	    }


			$headers = 'From: '.get_option('lpp_email_newsletter_from_name').' <'.get_option('lpp_email_newsletter_from_email').'>' . "\r\n";
		    $to = check_input($_REQUEST['lpp_email']);
		    $subject = get_option('lpp_email_newsletter_subject');
		    $message = get_option('lpp_email_newsletter');
		    wp_mail( $to, $subject, $message, $headers );

	        remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

	}


		
	$data = check_input($_REQUEST['lpp_name']);
	$data .= check_input($_REQUEST['lpp_email']);
	$data_lower = strtolower($data);
	$data_spaces = str_replace(' ','',$data_lower);

	$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
	if (!preg_match($pattern,$data_spaces))
	{
	    echo ("Invalid Input");
	    exit();
	}
	else{
		$sub_url = check_input($_REQUEST['lpp_sub_url']);
		$result_send_data = send_data_to_gr_api();
		if($result_send_data === true && !empty($sub_url)) {
			$lpp_enable_newsletter = get_option('lpp_enable_email_newsletter');
			if ($lpp_enable_newsletter === 'true') {
				lpp_send_email();   		
			}
			echo 'run_url';
			exit();

		} else if ($result_send_data === true) {
			$lpp_enable_newsletter = get_option('lpp_enable_email_newsletter');
			if ($lpp_enable_newsletter === 'true') {
				lpp_send_email();   		
			}
			echo get_option('lpp_success_msg','Thank You for subscribing');
			exit();
		} else{
			// An error ocurred, return error message	
			return get_option('lpp_failure_msg','Unknown error occurred.');
			
			exit();
		}

	}

}
?>