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

function send_data_to_gr_api(){
require_once 'jsonRPCClient.php';

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

	echo "success";
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
		echo "Subscriber Already Exists";
		exit;
	} else if ($gr_contact_queue_results !== false) {
		echo "Subscriber Already Exists";
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
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
if (!preg_match($pattern,$data_lower))
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
		echo "success";
		exit();
	} else{
		// An error ocurred, return error message	
		return 'Error ';

		exit();
	}

}

 ?>
