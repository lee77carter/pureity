<?php
function lpp_mail_chimp($post){


     $lpp_mailchimp_listid = get_post_meta($post->ID,'lpp_mailchimp_listid',true);
     $lpp_mailchimp_apikey = get_post_meta($post->ID,'lpp_mailchimp_apikey',true);
	 $lpp_getresponse_campaign_id = get_post_meta($post->ID,'lpp_getresponse_campaign_id',true);
     $lpp_getresponse_api_key = get_post_meta($post->ID,'lpp_getresponse_api_key',true);

	 wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

	?>
	<style type="text/css">
	#integration-input-field{
		width:400px;
		height: 50px;
	}
	 </style>
	 <h1>MailChimp</h1>
	 <p> Enter Mailchimp API key :
	<input type='text' name='lpp_mailchimp_apikey' id='integration-input-field' placeholder='Your Mailchimp API key' value='<?php echo $lpp_mailchimp_apikey; ?>'> </p>
	<p> Enter Mailchimp List ID :
	<input type='text' name='lpp_mailchimp_listid' id='integration-input-field' placeholder='Your Mailchimp List ID' value='<?php echo $lpp_mailchimp_listid; ?>'> </p>
	<a href="http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id" target="_blank">How to find MailChimp List ID</a>
		<br>
		<a href="http://kb.mailchimp.com/accounts/management/about-api-keys" target="_blank">How to find MailChimp API Key</a>
	<h1>GetResponse</h1>
	<p> Enter GetResponse API key :
	<input type='text' name='lpp_getresponse_api_key' id='integration-input-field' placeholder='Your GetResponse API key' value='<?php echo $lpp_getresponse_api_key; ?>'> </p>
	<p> Enter GetResponse Campaign Name :
	<input type='text' name='lpp_getresponse_campaign_id' id='integration-input-field' placeholder='Your GetResponse Campaign ID' value='<?php echo $lpp_getresponse_campaign_id; ?>'> </p>
	<a href="https://support.getresponse.com/faq/where-i-find-api-key" target="_blank">How to find GetResponse Api Key</a>
		<br>
		<a href="https://support.getresponse.com/faq/how-do-i-create-a-new-campaign" target="_blank">How to find MailChimp Campaign Name</a>
		
<div style='width:95%;margin-left:2.5%; text-align:center; background:#e3e3e3;height:60px;border-left:5px solid #a7d142;margin-top:50px;'>
 <?php submit_button('Update');?>
</div>
	<?php

}


 ?>