
<style lang="text/css">
    .compound-setting { line-height:20px;}
    .narrow-input { width:66px;}
    .long-input { width: 345px;}
	.postbox .inside {margin-bottom: 6px}
	.form-table th{padding: 8px 8px 8px 25px}
	.form-table td{padding: 3px 0 3px 0}	
</style>

<div class="wrap">
<?php screen_icon(EZP_CS_Constants::PLUGIN_SLUG); ?>
<h2><?php EZP_CS_Utility::_e('Settings') ?></h2>

<form id="easy-pie-cs-main-form" method="post" action="<?php echo admin_url('admin.php?page=' . EZP_CS_Constants::$SETTINGS_SUBMENU_SLUG); ?>" > 
	

    <?php
    if (isset($_GET['settings-updated']))
    {
        echo "<div class='updated'><p>" . EZP_CS_Utility::__('If you have a caching plugin, be sure to clear the cache!') . "</p></div>";
    }
    ?>
    <div id="easypie-cs-options" class="inside">
        
		<?php
		$action_updated = null;
		$global = EZP_CS_Global_Entity::get_instance();
		$config = EZP_CS_Config_Entity::get_by_id($global->config_index);
		$error_string = "";

		if (isset($_POST['action']) && $_POST['action'] == 'save')
		{
			check_admin_referer('easy-pie-coming-soon-save-settings');

			// Artificially set the bools since they aren't part of the postback
			$config->collect_email = false;
			$config->collect_name = false;

			$error_string = $config->set_post_variables($_POST);
			if ($error_string == "")
			{
				$config->fix_url_fields();
				$action_updated = $config->save();
			}
		}
		?>

		<?php wp_nonce_field('easy-pie-coming-soon-save-settings'); ?>
		<input type="hidden" name="action" value="save"/>            
		<?php if ($error_string != "") : ?>
			<div id="message" class="error below-h2"><p><?php echo EZP_CS_Utility::__('Errors present:') . "<br/> $error_string" ?></p></div>
		<?php endif; ?>

		<?php if ($action_updated) : ?>
			<div id="message" class="updated below-h2">
				<p><span><?php echo EZP_CS_Utility::__('Settings Saved.'); ?></span><strong style="margin-left:7px;"><?php echo '  ' . EZP_CS_Utility::__('If you have a caching plugin be sure to clear it.'); ?></strong></p>
			</div>
		<?php endif; ?>

		<!-- ===================================
		BASIC -->
		<div class="postbox"  style="margin-top:10px;">
		<div class="inside">
			<h3 class="ezp-cspe-subtitle"><?php EZP_CS_Utility::_e("Basic") ?></h3>
			<table class="form-table"> 
				<tr>
					<th scope="row"><?php echo EZP_CS_Utility::_e("Status") ?></th>
					<td>
						<input type="radio" name="coming_soon_mode_on" value="true" <?php echo $config->coming_soon_mode_on ? 'checked' : ''; ?>/><span><?php echo EZP_CS_Utility::__('On'); ?></span>
						<input type="radio" name="coming_soon_mode_on" value="" <?php echo $config->coming_soon_mode_on ? '' : 'checked'; ?>/><span><?php echo EZP_CS_Utility::__('Off'); ?></span>                                    
					</td>
				</tr>                          
			</table>
	
			<!-- COLLECTION-->
			<div class="ezp-cspe-subtitle2" style="margin-top:15px"><?php EZP_CS_Utility::_e("COLLECTION") ?></div>	
			<table class="form-table"> 
				<tr>
					<th scope="row"><?php echo EZP_CS_Utility::_e("Collect Email") ?></th>
					<td>
						<input type="checkbox" name="collect_email" <?php echo $config->collect_email ? 'checked' : ''; ?> />                                                                                                                
						<span><?php EZP_CS_Utility::_e("Yes") ?></span>
					</td>
				</tr>   
				<tr>
					<th scope="row"><?php echo EZP_CS_Utility::_e("Collect Name") ?></th>
					<td>
						<div class="compound-setting">                            
							<input type="checkbox" name="collect_name" <?php echo $config->collect_name ? 'checked' : ''; ?> />                                                                                                                
							<span><?php EZP_CS_Utility::_e("Yes") ?></span>
						</div>
					</td>
				</tr>   
			</table>
			
			<!-- SOCIAL-->
			<div class="ezp-cspe-subtitle2" style="margin-top:15px"><?php EZP_CS_Utility::_e("SOCIAL") ?></div>	
			<table class="form-table"> 
				<tr>
					<th scope="row"><?php echo EZP_CS_Utility::_e("Facebook URL") ?></th>
					<td><input class="long-input" name="facebook_url" type="text" value="<?php echo $config->facebook_url; ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><?php echo EZP_CS_Utility::_e("Google Plus URL") ?></th>
					<td><input class="long-input" name="google_plus_url" type="text" value="<?php echo $config->google_plus_url; ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><?php echo EZP_CS_Utility::_e("Twitter URL") ?></th>
					<td>
						<input class="long-input" name="twitter_url" type="text" value="<?php echo $config->twitter_url; ?>" /><br/>
						<small>Get more social icons with <a style="color:#DC3232" href="https://snapcreek.com/ezp-coming-soon/" target="_blank">Coming Soon Page Elite</a></small>
					</td>
				</tr>
			</table>
			
		</div>
		</div>
		

		<!-- ===================================
		ADVANCED -->
		<div class="postbox"  style="margin-top:10px;">
		<div class="inside">
			<h3 class="ezp-cspe-subtitle"><?php EZP_CS_Utility::_e("Advanced") ?></h3>
			
				<!-- HTTP -->
				<div class="ezp-cspe-subtitle2" style="margin-top:15px"><?php EZP_CS_Utility::_e("HTTP") ?></div>	
				<table class="form-table"> 
					<tr>
						<th scope="row"><?php echo EZP_CS_Utility::_e("Return Code") ?></th>
						<td>
							<input type="radio" name="return_code" value="200" <?php echo $config->return_code == 200 ? 'checked' : ''; ?> /><?php echo EZP_CS_Utility::_e("200") ?>
							<input type="radio" name="return_code" value="503" <?php echo $config->return_code == 503 ? 'checked' : ''; ?> /><?php echo EZP_CS_Utility::_e("503") ?>
						</td>
					</tr>  
				</table>


				<!-- SEO -->
				<div class="ezp-cspe-subtitle2" style="margin-top:15px"><?php EZP_CS_Utility::_e("SEO") ?></div>	
				<table class="form-table"> 
					<tr>
						<th scope="row"><?php echo EZP_CS_Utility::_e("Author URL") ?></th>
						<td>
							<input class="long-input" name="author_url" type="text" value="<?php echo $config->author_url; ?>" />
							<div><span class="description"><?php EZP_CS_Utility::_e('Google+ or other identifying URL'); ?></span></div>
						</td>
					</tr>
					<tr>
						<th scope="row"><?php echo EZP_CS_Utility::_e("Meta Description") ?></th>
						<td>
							<textarea rows="5" cols="60" name="meta_description"><?php echo EZP_CS_Utility::_he($config->meta_description); ?></textarea>
						</td>
					</tr>    
					<tr>
						<th scope="row"><?php echo EZP_CS_Utility::_e("Meta Keywords") ?></th>
						<td>
							<input class="long-input" name="meta_keywords" type="text" value="<?php echo $config->meta_keywords; ?>" />
							<div><span class="description"><?php EZP_CS_Utility::_e('Comma separated list'); ?></span></div>
						</td>
					</tr>                      
					<tr>
						<th scope="row"><?php echo EZP_CS_Utility::_e("Analytics Code") ?></th>
						<td>
							<textarea rows="5" cols="60" name="analytics_code"><?php echo EZP_CS_Utility::_he($config->analytics_code); ?></textarea>                        
							<div><span class="description"><?php echo EZP_CS_Utility::__('Analytics tracking code') . ' (' . EZP_CS_Utility::__('include') . '&lt;script&gt;&lt;/script&gt;)'; ?></span></div>
						</td>
					</tr>
				</table>

				
				<!-- ACCESS -->
				<div class="ezp-cspe-subtitle2" style="margin-top:15px"><?php EZP_CS_Utility::_e("ACCESS") ?></div>	
				<table class="form-table"> 
					<tr>
						<th scope="row"><?php echo EZP_CS_Utility::_e("Unfiltered URLs") ?></th>
						<td>
							<textarea rows="5" cols="60" name="unfiltered_urls"><?php echo $config->unfiltered_urls; ?></textarea>
							<div><span class="description"><?php EZP_CS_Utility::_e('Each line should contain a relative URL you don\'t want the page shown on (e.g. for http://mysite.com/mypage enter /mypage)'); ?></span></div>
							<br/>
							<small>Grant access by IP or special URL with <a style="color:#DC3232" href="https://snapcreek.com/ezp-coming-soon/" target="_blank">Coming Soon Page Elite</a></small>
						</td>
					</tr>    
				</table>
			</div>
		</div>    

<?php
submit_button();
?>
		<a href="https://snapcreek.com/ezp-coming-soon/docs/faqs-tech/" target="_blank"><?php EZP_CS_Utility::_e('FAQ'); ?></a>	|
		<a href="https://wordpress.org/support/plugin/easy-pie-coming-soon/reviews/" target="_blank"><?php echo EZP_CS_Utility::__('Rate'); ?></a>	|            
		<a href="https://snapcreek.com/support/" target="_blank"><?php EZP_CS_Utility::_e('Contact') ?></a>

    </div>
</form>	
</div>

