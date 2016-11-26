<?php

$path = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path.'wp-load.php');

require_once('MCAPI.class.php');

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

$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
if (!preg_match($pattern,$data_lower))
{
    echo ("Invalid Input"); 
} else {
 
	$list_id = get_post_meta($p_id,'lpp_mailchimp_listid',true);
	$sub_url = check_input($_REQUEST['lpp_sub_url']);
	if($api->listSubscribe($list_id, $smf_email,$merge_vars, '', false) === true && !empty($sub_url)) {
		$lpp_enable_newsletter = get_option('lpp_enable_email_newsletter');
		if ($lpp_enable_newsletter === 'true') {
			lpp_send_email();   		
		}
		echo 'run_url';
		 
	} else if ($api->listSubscribe($list_id, $smf_email,$merge_vars, '', false) === true) {
		$lpp_enable_newsletter = get_option('lpp_enable_email_newsletter');
		if ($lpp_enable_newsletter === 'true') {
			lpp_send_email();   		
		}
		echo "success";
	} else{
		// An error ocurred, return error message	
		if($api->errorCode) {
		if ($api->errorCode === 214) {
		   echo "Subscriber Already Exists";
		}

		else {
			echo "Unknown Error Occurred";
		}
	}

}

}


 ?>
