<html>
	<head>
		<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			height: 100%;
			width: 100%;
			min-height: 850px;
			text-align: center;

			
		}
		#lpp_section_1{
			background-image:url("<?php echo get_post_meta($post->ID,'lpp_add_img_2',true); ?>");
			background-size: cover;
			width: 100%;
			height: 80%;
			max-width: 1500px;
			margin: 0 auto;
			text-align: center;
		}

		#lpp_content{
			background: rgba(0,0,0,.8);
			width: 50%;
			margin-left: 20%;
			padding: 2% 4% 2% 4%;
			margin-top: 8%;
			border-radius: 30px;


		}

		.lpp_h1,.lpp_h2,.lpp_p{
			color: #fff;
			font-family: sans-serif;
			font-weight: 100;

		}

		.lpp_h1{
			font-size: 39px;

		}
		.lpp_h2{
			font-size:20px;

		}
		.lpp_input{
			width: 80%;
			height: 40px;
			border: none;
			border-radius: 10px;

		}
		#lpp_cta{
			width: 15%;
			height: 40px;
			margin-left: -2%;
		}
		#lpp_features{
			display: inline-block;
			width: 90%;
			margin-left: 19%;
		}
		.lpp_feature{
			float: left;
			margin: 10px 5% 10px 0;
			display: inline-block;
		}
		.lpp_feature_img{
			float: left;
			width: 50px;
			height: 50px;
		}
		.lpp_p{
			margin-top: 0%;
			font-size: 12px;


		}
		#lpp_custom_form_code{
			display: none;
		}


		</style>
		<script>
					jQuery(document).ready(function() {
						jQuery( "#lpp_select_form_type_default" ).click(function() {
							jQuery('#lpp_form').show('slow');
							jQuery('#lpp_custom_form_code').hide('slow');

						});
						jQuery( "#lpp_select_form_type_custom" ).click(function() {
							jQuery('#lpp_form').hide('slow');
							jQuery('#lpp_custom_form_code').show('slow');
						});
						
					});
			
			</script>
	</head>
	<body>
		<div class='lpp_section' id='lpp_section_1'>
			<input id="image_location2" type="text" class="upload_image_button1"  name="lpp_add_img_2"value='<?php echo $lpp_add_img_2; ?>' style='width:70%; font-size:15px; height:50px; border:2px dashed black; text-align:center;' placeholder='Background Image URL'/>
			<input id="image_location2" type="button" class="upload_bg" data-id="1" value="Upload" />
			<div id='lpp_logo'>
  			<input id="image_location1" type="text" class="upload_image_button2"  name='lpp_logo_url' placeholder='Logo URL' value='<?php echo $lpp_logo_url; ?>' style=' margin-top:10px;font-size:14px; text-align:center;width:300px;height50px;' />
			<input id="image_location1" type="button" class="upload_bg" data-id="2" value="Upload" />
			</div>
			<div id='lpp_content'>
				<h1 class='lpp_h1'>
					<input type='text' id='lpp_main_h1' name='lpp_main_h1' value='<?php echo $lpp_main_h1; ?>' style='width:60%; font-size:22px; height:50px; border:2px dashed black; text-align:center;' placeholder='Main Heading'/>
				</h1>
				<p>
	 			Default Form : <input checked type='radio' id='lpp_select_form_type_default' name='lpp_select_form_type'  value='1' <?php checked('1', $lpp_select_form_type); ?> >
	 			Custom Form : <input type='radio' id='lpp_select_form_type_custom' name='lpp_select_form_type' value=''  <?php checked('', $lpp_select_form_type); ?> >
	 		</p>
	 		<textarea rows='18' placeholder='Insert your form code here.' name='lpp_form_type_custom_code' id='lpp_custom_form_code'><?php echo $lpp_form_type_custom_code; ?></textarea>
				<div id='lpp_form'>
				<form>
				<p>
					<input type='email' name='lpp_email' id='lpp_email' class='lpp_input' placeholder='Email' disabled>
					
						<input type='text' id='lpp_main_cta' name='lpp_main_cta' value='<?php echo $lpp_main_cta; ?>' style='width:150px; height:30px; border:2px dashed black; text-align:left;font-size:11px;' placeholder='CTA Text'/>
					
				</p>
				</form>
				</div>
				<h3 class='lpp_h2'>
					<input type='text' id='lpp_sub_h2' name='lpp_sub_h2' value='<?php echo $lpp_sub_h2; ?>' style='width:80%; font-size:16px; height:30px; border:2px dashed black; text-align:center;' placeholder='Suporting sub header and explanation.'/>
				</h3>
				<div id='lpp_features'>
					<div class='lpp_feature' id='lpp_feature_1'>
						<input type='url' id='lpp_add_ftrimg_1' name='lpp_add_ftrimg_1' value='<?php echo $lpp_add_ftrimg_1; ?>' style='width:150px; height:35px; border:2px dashed black; text-align:center; font-size:11px;' placeholder='Enter feature img url'/>

						<p class='lpp_p'><input type='text' id='lpp_feature_1' name='lpp_feature_1' value='<?php echo $lpp_feature_1; ?>' style='width:150px; height:35px; border:2px dashed black; text-align:center;font-size:11px;' placeholder='Enter your product features'/></p>
					</div>
					<div class='lpp_feature' id='lpp_feature_2'>
						<input type='url' id='lpp_add_ftrimg_2' name='lpp_add_ftrimg_2' value='<?php echo $lpp_add_ftrimg_2; ?>' style='width:150px; height:35px; border:2px dashed black; text-align:center; font-size:11px;' placeholder='Enter feature img url'/>

						<p class='lpp_p'>
							<input type='text' id='lpp_feature_2' name='lpp_feature_2' value='<?php echo $lpp_feature_2; ?>' style='width:150px; height:35px; border:2px dashed black; text-align:center;font-size:11px;' placeholder='Enter your product features'/>
						</p>
					</div>
					<div class='lpp_feature' id='lpp_feature_3'>
						<input type='url' id='lpp_add_ftrimg_3' name='lpp_add_ftrimg_3' value='<?php echo $lpp_add_ftrimg_3; ?>' style='width:150px; height:35px; border:2px dashed black; text-align:center; font-size:11px;' placeholder='Enter feature img url'/>

						<p class='lpp_p'>
							<input type='text' id='lpp_feature_3' name='lpp_feature_3' value='<?php echo $lpp_feature_3; ?>' style='width:150px; height:35px; border:2px dashed black; text-align:center;font-size:11px;' placeholder='Enter your product features'/>
						</p>
					</div>
				</div>
				
			</div>
			</div>
	</body>
</html>