<html>
	<head>
		<style type="text/css">
		body{
			width: 100%;
			min-width:1050px;
			height: 980px;
			text-align: center;
		}
		.lpp_section{
			width: 100%;
			max-width:1480px; 
			min-height: 550px;
			display: inline-block;
			text-align: center;
			border: 2px solid black;
		}
		.lpp_h1{
			font-size: 36px;
			font-size: 2.4rem;
			font-family: 'museo-slab', sans-serif;
			color: #333333;
			margin-top: 5%;

		}
		.lpp_h2{
			font-size: 28px;
			font-size: 1.6rem;
			font-family: 'museo-slab', sans-serif;
			color: #333333;
		}
		.lpp_p{
			color: #333333;
			line-height: 1.5;
			font-size: 1.125rem;
			font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		}
		#lpp_logo{
			height: 60px;
			border: 1px solid red;
			margin: 10px;
		}
		#lpp_hero_shot{
			width:800px;
			height: 450px;
			border: 2px solid red;
			margin-top: 3%;
		}
		#lpp_sub_sect2_left{
			width:58%;
			float: left;
			border: 2px solid blue;
		}
		#lpp_sub_sect2_left > p{
			margin:0 30px 10px 30px;
		}
		#lpp_feature_list{
			float: left;
			margin-left: 10%;
		}
		#lpp_sub_sect2_right{
			width:41%;
			float:left;
			border: 2px solid blue;
		}
		#lpp_sub_sect3_left{
			width:48%;
			float: left;
			border: 2px solid blue;
		}
		#lpp_sub_sect3_right{
			width:48%;
			float: left;
			border: 2px solid blue;
		}

		.lpp_input{
			width:60%;
			height:40px;
			margin-left:20px;
			margin-top:10px;
			font-size: 18px;
			font-family: verdana;
			color: #565656;  
		}
		#lpp_cta{
			
			margin-left:80px;
			margin-top: 20px;  
			width:60%;
			height:50px;
			border: none;
			background: #e3e3e3;
			font-size: 22px;
			color: black;

		}
		#lpp_sub_sect2_right{
			background: #b8e547;
			height: 400px;
		}
		#lpp_custom_form_code{
			display: none;
		}



		</style>
	</head>
	<body>
		<div id='lpp_section_1' class='lpp_section'>
			<div id='lpp_logo'>
				<input id="image_location2" type="text" class="upload_image_button1"  name="lpp_logo_url"value='<?php echo $lpp_logo_url; ?>' style=' font-size:19px; text-align:center;width:400px;height50px;' placeholder='Logo Image URL'/>
          		<input id="image_location2" type="button" class="upload_bg" data-id="1" value="Upload Image" />
			</div>
			<input id="image_location1" type="text" class="upload_image_button2"  name='lpp_add_img_1' value='<?php echo $lpp_add_img_1; ?>' placeholder='Featured image url' style='font-size:17px; text-align:center;width:80%;height:25%;'/>
			<input id="image_location1" type="button" class="upload_bg" data-id="2" value="Upload" />
			<embed src=''id='lpp_hero_shot'>
			<h1 class='lpp_h1'>
				<input type='text' style='font-size:28px;text-align:center;width:70%; height:20%; border:1px dashed black;' name='lpp_main_h1' placeholder='Your Primary Heading' value='<?php echo $lpp_main_h1; ?>'>
			</h1>
		</div>
		<div id='lpp_section_2' class='lpp_section'>
			<div id='lpp_sub_sect2_left'>
				 <?php
				 	$settings = array('media_buttons'=> false,'lpp_main_content','textarea_rows' => 14);
				    wp_editor($lpp_main_content,'lpp_main_content',$settings);
  				 ?>
				
			</div>
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
			<div id='lpp_sub_sect2_right'>
					
					<p>
	 			Default Form : <input checked type='radio' id='lpp_select_form_type_default' name='lpp_select_form_type'  value='1' <?php checked('', $lpp_select_form_type); ?> >
	 			Custom Form : <input type='radio' id='lpp_select_form_type_custom' name='lpp_select_form_type' value=''  <?php checked('1', $lpp_select_form_type); ?> >
	 		</p>
	 		
	 		<textarea rows='18' placeholder='Insert your form code here.' name='lpp_form_type_custom_code' id='lpp_custom_form_code'><?php echo $lpp_form_type_custom_code; ?></textarea>

				<div id='lpp_form'>
				<h2 class='lpp_h2'>Subscribe Now</h2>
				<p class='lpp_p'>Some Text to Support your Copy</p>
				
					<p class='lpp_p'>Name  :    <input type='text' id='lpp_name' class='lpp_input'></p>
					<p class='lpp_p'>Email  :  <input type='text' id='lpp_email' class='lpp_input'></p>
											<input type='text' style='font-size:20px;text-align:center;width:90%; border:1px dashed black;' name='lpp_main_cta' placeholder='Call To Action Text' value='<?php echo $lpp_main_cta; ?>'>
					
				</div>
			</div>
		</div>
		<div id='lpp_section_3' class='lpp_section'>
			<div id='sub_sect3_full'>
				<h2 class='lpp_h2'>
					<textarea type='text' style='font-size:18px;text-align:center;width:75%; height:90px; border:1px dashed black;' name='lpp_testimonial_left_content' placeholder='Testimonial Content' value='<?php echo $lpp_testimonial_left_content; ?>'><?php echo $lpp_testimonial_left_content; ?></textarea>
				</h2>
				<p class='lpp_p'><i>
					<input type='text' style='font-size:15px;text-align:center;width:40%; border:1px dashed black;' name='lpp_testimonial_left_content_author' placeholder='Author name ,Company Name' value='<?php echo $lpp_testimonial_left_content_author; ?>'>
				</i></p>
			</div>
			<div id='lpp_sub_sect3_left'>
				<?php
				 	$settings = array('media_buttons'=> false,'lpp_about_us','textarea_rows' => 13);
				    wp_editor($lpp_about_us,'lpp_about_us',$settings);
  				 ?>
			</div>
			<div id='lpp_sub_sect3_right'>
				<?php
				 	$settings = array('media_buttons'=> false,'lpp_contact_us','textarea_rows' => 13);
				    wp_editor($lpp_contact_us,'lpp_contact_us',$settings);
  
  				 ?>
			</div>
		</div>
	</body>
</html>