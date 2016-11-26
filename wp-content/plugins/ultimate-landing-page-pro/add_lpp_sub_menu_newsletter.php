<?php
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
	     <p><label class="lpp_label">From Name : </label><input type='text' placeholder='From Name ' name='lpp_email_newsletter_from_name' value='<?php echo get_option('lpp_email_newsletter_from_name'); ?>' class='lpp_input'>
	      <p><label class="lpp_label">From Email : </label><input type='email' placeholder='From Email ' name='lpp_email_newsletter_from_email' value='<?php echo get_option('lpp_email_newsletter_from_email'); ?>' class='lpp_input'>
	       <p><label class="lpp_label">Email Subject : </label><input type='text' placeholder='Email Subject' name='lpp_email_newsletter_subject' value='<?php echo get_option('lpp_email_newsletter_subject'); ?>' class='lpp_input'>
		<?php
		$settings = array('media_buttons'=> true,'lpp_email_newsletter','textarea_rows' => 13);
		wp_editor( $lpp_email_newsletter, 'lpp_email_newsletter', $settings ); 
		submit_button();?>
	</form>
	<?php
}


 ?>