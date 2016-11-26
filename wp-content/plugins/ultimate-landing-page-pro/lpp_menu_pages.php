<?php

add_action('wp_head','lpp_form_options_set_to_head');
function lpp_form_options_set_to_head(){
 // $option = get_option('some option');

  //SLider 
  $lpp_mailchimp_api_key = get_option('lpp_mailchimp_api_key');
  $lpp_mailchimp_list_id = get_option('lpp_mailchimp_list_id');
  $lpp_getresponse_api_key = get_option('lpp_getresponse_api_key');
  $lpp_getresponse_campaign_id = get_option('lpp_getresponse_campaign_id');
  $lpp_redirection_url = get_option('lpp_redirection_url');
  $lpp_enable_comingsoon = get_option('lpp_enable_comingsoon');
  $lpp_enable_email_newsletter = get_option('lpp_enable_email_newsletter');
  $lpp_email_newsletter = get_option('lpp_email_newsletter');
  $lpp_email_newsletter_from_name = get_option('lpp_email_newsletter_from_name');
  $lpp_email_newsletter_from_email = get_option('lpp_email_newsletter_from_email');
  $lpp_email_newsletter_subject = get_option('lpp_email_newsletter_subject');
  $lpp_success_msg = get_option('lpp_success_msg');
  $lpp_failure_msg = get_option('lpp_failure_msg');
  $lpp_subscriber_exists_msg = get_option('lpp_subscriber_exists_msg');

}


register_activation_hook(__FILE__,'lpp_subscribe_me_add_options');
function lpp_subscribe_me_add_options() {

	add_option('lpp_mailchimp_api_key','');
	add_option('lpp_mailchimp_list_id','');
	add_option('lpp_redirection_url','');
	add_option('lpp_enable_comingsoon','');
	add_option('lpp_enable_email_newsletter','');
	add_option('lpp_email_newsletter','');
	add_option('lpp_email_newsletter_from_name','');
	add_option('lpp_email_newsletter_from_email','');
	add_option('lpp_email_newsletter_subject','');
	add_option('lpp_getresponse_campaign_id');
	add_option('lpp_getresponse_api_key');
	add_option('lpp_success_msg','Thank You for subscribing');
	add_option('lpp_failure_msg','Unknown error occurred.');
	add_option('lpp_subscriber_exists_msg','Subscriber Already Exists');

}


add_action('admin_init','lpp_forms_register_options');
function lpp_forms_register_options(){
  // register_setting('mpsp_options_group','option');
	register_setting('lpp_form_options_group','lpp_mailchimp_api_key');
	register_setting('lpp_form_options_group','lpp_mailchimp_list_id');
	register_setting('lpp_form_options_group','lpp_getresponse_api_key');
	register_setting('lpp_form_options_group','lpp_getresponse_campaign_id');
	register_setting('lpp_form_options_group','lpp_redirection_url');
	register_setting('lpp_form_options_group','lpp_enable_comingsoon');
	register_setting('lpp_form_newsletter_options_group','lpp_enable_email_newsletter');
	register_setting('lpp_form_newsletter_options_group','lpp_email_newsletter');
	register_setting('lpp_form_newsletter_options_group','lpp_email_newsletter_from_name');
	register_setting('lpp_form_newsletter_options_group','lpp_email_newsletter_from_email');
	register_setting('lpp_form_newsletter_options_group','lpp_email_newsletter_subject');
	register_setting('lpp_form_options_group','lpp_success_msg');
	register_setting('lpp_form_options_group','lpp_failure_msg');
	register_setting('lpp_form_options_group','lpp_subscriber_exists_msg');

}



add_action('admin_menu','lpp_sub_menus_to_subscribe_me');

function lpp_sub_menus_to_subscribe_me(){

	add_submenu_page( 'edit.php?post_type=landingpage_f', 'MailChimp', 'Settings', 'manage_options', 'lpp_mailchimp_menu', 'add_lpp_sub_menu_mailchimp' );
	add_submenu_page( 'edit.php?post_type=landingpage_f', 'Newsletter', 'Newsletter', 'manage_options', 'lpp_newsletter', 'add_lpp_sub_menu_newsletter' );
	add_submenu_page( 'edit.php?post_type=landingpage_f', 'Subscribers List', 'DB Subscribers List', 'manage_options', 'lpp_subscribers_list_menu', 'add_lpp_subscribers_list_menu' );
}

function add_lpp_sub_menu_mailchimp(){


	$lpp_enable_comingsoon = get_option('lpp_enable_comingsoon');
	$lpp_enable_email_newsletter = get_option('lpp_enable_email_newsletter');
  $lpp_email_newsletter = get_option('lpp_email_newsletter');
	?>

	<style type="text/css">	
	.ub_p{
		font-size: 20px;
		font-family: arial;
		color: #525252;
		font-weight: bold;
	}
	.ub-heading-bar{
		background-color: #FFBA00;
		padding:25px 30% 25px 30%;
		text-align: center;
		color: #fff;
		font-size: 38px;
		line-height: 25px;
	}
	form{
		margin-left: 30px;
		background-color: #fff;
	}
	body, #wpcontent{
		background-color: #fff;
	}



	</style>
	<h3 class="ub-heading-bar">MailChimp</h3>
	<form method="post" action="options.php">
	      <?php settings_fields( 'lpp_form_options_group' );?>
	      <?php do_settings_sections( 'lpp_form_options_group' );?>
	      Enable ComingSoon Feature : <span style='font-size:10px;'>( Set a landing page as front page then enable this option) </span>
	     <p> <select name="lpp_enable_comingsoon" style='width:200px;'>
	      <option value="false">Choose..</option>
	      	<option value='true' <?php echo selected('true', $lpp_enable_comingsoon);  ?> >Enable</option>
	      	<option value="false" <?php echo selected('false', $lpp_enable_comingsoon);  ?> >Disable</option>
	      </select></p>
			<br>
			<br>
			Post Subscription Page redirect URL :
			<br>
			<br>
			<input type='text' name='lpp_redirection_url' placeholder='Enter Thankyou Page URL' value='<?php echo get_option('lpp_redirection_url'); ?>' style='width:400px; height:50px;font-size:19px;'>
			<br>
			<br>
			<h3>Messages : </h3>

			Subscriber Sucesss message :
			<br>
			<br>
			<input type='text' name='lpp_success_msg' placeholder='Enter Success Message' value='<?php echo get_option('lpp_success_msg','Thank You for subscribing'); ?>' style='width:400px; height:50px;font-size:19px;'>
			<br>
			<br>
			Subscriber Exists message :
			<br>
			<br>
			<input type='text' name='lpp_subscriber_exists_msg' placeholder='If subscriber exists message' value='<?php echo get_option('lpp_subscriber_exists_msg','Subscriber Already Exists'); ?>' style='width:400px; height:50px;font-size:19px;'>
			<br>
			<br>
			Error Message :
			<br>
			<br>
			<input type='text' name='lpp_failure_msg' placeholder='If error occurs message' value='<?php echo get_option('lpp_failure_msg','Unknown error occured!'); ?>' style='width:400px; height:50px;font-size:19px;'>
		</p>
		<?php submit_button();?>
			
	

		<?php
		?>
	</form>
	<?php
}


function add_lpp_subscribers_list_menu(){



	?>
	
<script type="text/javascript">

		(function($){
    $(document).ready(function() {
    $('.empty_button_form').on('submit',function(){
         
        // Add text 'loading...' right after clicking on the submit button. 
        $('#response').text('Processing'); 
         
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(result){
                if (result == 'success'){
                    $('#response').text(result);  
                }else {
                    $('#response').text(result);
                }
            }
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });
});
})(jQuery);

	</script>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<style type="text/css">
	#wpcontent{
		background-color: #fff;
	}

	</style>
	<div style='padding:50px; margin:0 auto; margin-top:50px; font-family:sans-serif,arial;font-size:17px; width:60%;'>
	<?php

		global $wpdb;
		$lpp_db = $wpdb->prefix.'lpp_data';
		$lpp_results = $wpdb->get_results( 
	"
	SELECT *
	FROM $lpp_db
	"
);
		?>

		<table class='w3-table w3-striped w3-bordered w3-card-4'>

			<tr class="w3-red">
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
			</tr>
			<?php foreach ( $lpp_results as $lpp_result ) {
	?>
			<tr>
				<td><?php echo $lpp_result->id; ?></td>
				<td><?php echo $lpp_result->name; ?></td>
				<td><?php echo $lpp_result->email; ?></td>
			</tr>
<?php } ?>
		</table>


</div>
  <a style='background:#F27935; color:#fff; text-decoration:none;padding:15px;' href="<?php echo plugins_url('/subscriber-list-download.php?download_file=lpp_subcribers_list.csv',__FILE__); ?>">DOWNLOAD LIST</a>
  <br>
  <br>
  <br>
  <br>
  <form method="post" class="empty_button_form" action="<?php echo plugins_url('/subscriber-list-empty.php',__FILE__); ?>">
  <input type="submit" style='background:#F27935; color:#fff; text-decoration:none;padding:15px;' value="Empty List">
 <p id="response">Note : Deleted email addresses can't be recovered. Backup subscribers data before deleting.</p>
  </form>
  <br>

	<?php

}

function add_lpp_sub_menu_newsletter(){
	$lpp_enable_comingsoon = get_option('lpp_enable_comingsoon');
	$lpp_enable_email_newsletter = get_option('lpp_enable_email_newsletter');
  	$lpp_email_newsletter = get_option('lpp_email_newsletter');
	?>
	<style type="text/css">
	.lpp_form{
		width:800px;
	}
	.lpp_input{
		display: block;
		width:250px; 
		height:40px;
		font-size:16px;
		text-align: left;
	}
	.lpp_label{
		display: block;
		float: left;
		font-size: 18px;
		width: 150px;
		margin-right: 20px;
	}
	</style>
	<h3>Newsletter</h3>
	<form method="post" action="options.php" class="lpp_form">
	      <?php settings_fields( 'lpp_form_newsletter_options_group' );?>
	      <?php do_settings_sections( 'lpp_form_newsletter_options_group' );?>
	      <p style="margin-bottom:30px;"><label style="font-size: 18px; margin-right: 20px;"> Enable Autmomatic Newsletter : </label> <input type="checkbox" name="lpp_enable_email_newsletter" value="true" <?php checked( 'true', $lpp_enable_email_newsletter); ?>></p>
	      <hr>
	      <p style="margin-top:30px;"><label class="lpp_label">From Name : </label><input type='text' placeholder='From Name ' name='lpp_email_newsletter_from_name' value='<?php echo get_option('lpp_email_newsletter_from_name'); ?>' class='lpp_input'>
	      <p><label class="lpp_label">From Email : </label><input type='email' placeholder='From Email ' name='lpp_email_newsletter_from_email' value='<?php echo get_option('lpp_email_newsletter_from_email'); ?>' class='lpp_input'>
	      <p><label class="lpp_label">Email Subject : </label><input type='text' placeholder='Email Subject' name='lpp_email_newsletter_subject' value='<?php echo get_option('lpp_email_newsletter_subject'); ?>' class='lpp_input'>
		<?php
		$settings = array('media_buttons'=> true,'lpp_email_newsletter','textarea_rows' => 23);
		wp_editor( $lpp_email_newsletter, 'lpp_email_newsletter', $settings ); 
		submit_button();?>
	</form>
	<?php
}






 ?>