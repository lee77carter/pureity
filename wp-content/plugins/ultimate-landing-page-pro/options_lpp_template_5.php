<html>
	<head>
		<style type="text/css">
		#body{
			width: 100%;
			height: 100%;
			display: inline-block;
		}
		.lpp_section{
			width: 100%;
			height: 100%;
			border: 2px solid black;
			text-align: center;
		}
		#lpp_logo{
			float: left;
			width: 150px;
			height: 50px;
			border: 1px solid green;
			
		}
		.lpp_h1{
			font-size: 37px; 
			font-size: 2.25rem;
			font-family: 'museo-slab', sans-serif;
			color: #333333;
		}
		.lpp_h2{
			font-size: 27px; 
			font-size: 1.5rem;
			font-family: 'museo-slab', sans-serif;
			color: #333333;
		}
		.lpp_p{
			color: #333333;
			line-height: 1.5;
			font-size: 1.125rem;
			font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		}
		#lpp_section_1{
			display: inline-block;
		}
		#lpp_primary_h1{
			margin-top:12%; 
		}
		#lpp_sub_h2{
			margin-top: -1.5%;
		}

		#sub_sect_1_left{
			width: 50%;
			float: left;
			height: 53%;
			border: 1px solid red;
			margin-top: 5%;
			margin-left: 7%;
		}
		#sub_sect_1_right{
			width: 34%;
			float: left;
			height: 53%;
			border: 1px solid red;
			margin-top: 5%;
			margin-right: 5%;
		}
		#sub_sect_1_right,#sub_sect_1_left{
			background: rgba(81,130,209,1);
		}
		.lpp_input_field{
			width: 70%;
			height: 10%;
			float: left;
			margin-left: 5%;
			font-size: 18px; 

		}
		#lpp_sub_sect_2_top_left{
			width: 46%;
			height: 43%;
			float: left;
			margin-top: 3%;
			margin-left: 2%;
		}
		#lpp_sub_sect_2_top_right{
			width: 46%;
			height: 43%;
			float: right;
			margin-top: 3%;
			margin-right: 2%;
		}
		#lpp_sub_sect_2_bottom_left{
			width: 46%;
			height: 43%;
			float: left;
			margin-top: 3%;
			margin-left: 2%;
		}
		#lpp_sub_sect_2_bottom_right{
			width: 46%;
			height: 43%;
			float: right;
			margin-top: 3%;
			margin-right: 2%;
		}
		#lpp_sub_sect_3_left{
			width: 45%;
			float: left;
			border: 1px solid blue;
		}
		#lpp_sub_sect_3_right{
			width: 54%;
			float: right;
			border: 1px solid blue;
		}
		.lpp_feature_box{
			-webkit-box-shadow: 7px 6px 25px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 7px 6px 25px 0px rgba(0,0,0,0.75);
			box-shadow: 7px 6px 25px 0px rgba(0,0,0,0.75);
		}
		#lpp_section_3
		{
			height: 600px;
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
			<h1 id='lpp_primary_h1' class="lpp_h1">
				<input type='text' style='font-size:28px;text-align:center;width:70%; height:20%; border:1px dashed black;' name='lpp_main_h1' placeholder='Your Primary Heading' value='<?php echo $lpp_main_h1; ?>'>
			</h1>
			<h3 id='lpp_sub_h2' style='font-size:1.1rem;font-size: 19px;' class='lpp_h2'>
				<input type='text' style='font-size:20px;text-align:center;width:90%; height:20%; border:1px dashed black;' name='lpp_sub_h2' placeholder='Your Sub Heading' value='<?php echo $lpp_sub_h2; ?>'>
			</h3>
			<div id='sub_sect_1_left'>
				

				<input id="image_location1" type="text" class="upload_image_button2"  name='lpp_add_img_1' value='<?php echo $lpp_add_img_1; ?>' placeholder='Featured image url' style='font-size:17px; text-align:center;width:80%;height:25%;'/>
			    <input id="image_location1" type="button" class="upload_bg" data-id="2" value="Upload" />
	 			<img src='<?php echo $lpp_add_img_1 ;?>' style='height:45.5%;width:100%;' >
	 	
				
			</div>
			<div id='sub_sect_1_right'>
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
				<p>
	 			Default Form : <input checked type='radio' id='lpp_select_form_type_default' name='lpp_select_form_type'  value='1' <?php checked('1', $lpp_select_form_type); ?> >
	 			Custom Form : <input type='radio' id='lpp_select_form_type_custom' name='lpp_select_form_type' value=''  <?php checked('', $lpp_select_form_type); ?> >
	 		</p>
	 		
	 		<textarea rows='22' placeholder='Insert your form code here.' name='lpp_form_type_custom_code' id='lpp_custom_form_code'><?php echo $lpp_form_type_custom_code; ?></textarea>




				<div id='lpp_form'>
				<h2 class='lpp_h2'>
					<input type='text' style='font-size:20px;text-align:center;width:70%; border:1px dashed black;' name='lpp_form_h2' placeholder='Form Title' value='<?php echo $lpp_form_h2; ?>'>
				</h2>
				<p style='float:left; margin-left:5%;line-height:0px;' class='lpp_p'>Name*</p>
				<br>
				<br>
				<br>
				<input type='text' name='lpp_name' id='lpp_name' class='lpp_input_field' placeholder='Name'>
				<br>
				<br>
				<br>
				<p style='float:left; margin-left:5%;line-height:0px;' class='lpp_p'>E-Mail*</p>
				<br>
				<br>
				<br>
				<input type='email' name='lpp_email' id='lpp_email' class='lpp_input_field' placeholder='E-Mail'>
				<br>
				<br>
				<br>
				
	 					<input type='text' style='font-size:20px;text-align:center;width:70%; border:1px dashed black;' name='lpp_main_cta' placeholder='Call To Action Text' value='<?php echo $lpp_main_cta; ?>'>
	 				
				</div>
			</div>
		</div>
		<div id='lpp_section_2' class='lpp_section'>
			<div id='lpp_sub_sect_2_top_left' class='lpp_feature_box'>
				<h3 class='lpp_h2'>
					<input type='text' style='font-size:17px;text-align:center;width:50%; border:1px dashed black;' name='lpp_benefit_1_content_title' placeholder='Your awesome benefit' value='<?php echo $lpp_benefit_1_content_title; ?>'>
				</h3>
				<p class='lpp_p'>
					<textarea type='text' style='font-size:14px;text-align:center;width:65%; border:1px dashed black;' name='lpp_benefit_1_content' placeholder='Your awesome benefit description' value='<?php echo $lpp_benefit_1_content; ?>'><?php echo $lpp_benefit_1_content; ?></textarea>
				</p>
			</div>
			<div id='lpp_sub_sect_2_top_right' class='lpp_feature_box'>
				<h3 class='lpp_h2'>
					<input type='text' style='font-size:17px;text-align:center;width:50%; border:1px dashed black;' name='lpp_benefit_2_content_title' placeholder='Your awesome benefit' value='<?php echo $lpp_benefit_2_content_title; ?>'>
				</h3>
				<p class='lpp_p'>
					<textarea type='text' style='font-size:14px;text-align:center;width:65%; border:1px dashed black;' name='lpp_benefit_2_content' placeholder='Your awesome benefit description' value='<?php echo $lpp_benefit_2_content; ?>'><?php echo $lpp_benefit_2_content; ?></textarea>
				</p>

			</div>
			<div id='lpp_sub_sect_2_bottom_left' class='lpp_feature_box'>
				<h3 class='lpp_h2'>
					<input type='text' style='font-size:17px;text-align:center;width:50%; border:1px dashed black;' name='lpp_benefit_3_content_title' placeholder='Your awesome benefit' value='<?php echo $lpp_benefit_3_content_title; ?>'>
				</h3>
				<p class='lpp_p'>
					<textarea type='text' style='font-size:14px;text-align:center;width:65%; border:1px dashed black;' name='lpp_benefit_3_content' placeholder='Your awesome benefit description' value='<?php echo $lpp_benefit_3_content; ?>'><?php echo $lpp_benefit_3_content; ?></textarea>
				</p>
			</div>
			<div id='lpp_sub_sect_2_bottom_right' class='lpp_feature_box'>
				<h3 class='lpp_h2'>
					<input type='text' style='font-size:17px;text-align:center;width:50%; border:1px dashed black;' name='lpp_benefit_4_content_title' placeholder='Your awesome benefit' value='<?php echo $lpp_benefit_4_content_title; ?>'>
				</h3>
				<p class='lpp_p'>
					<textarea type='text' style='font-size:14px;text-align:center;width:65%; border:1px dashed black;' name='lpp_benefit_4_content' placeholder='Your awesome benefit description' value='<?php echo $lpp_benefit_4_content; ?>'><?php echo $lpp_benefit_4_content; ?></textarea>
				</p>
			</div>
		</div>
		<div id='lpp_section_3' class='lpp_section'>
			<div id='lpp_sub_sect_3_left'>
				<h3 class='lpp_h2'>
					<input type='text' style='font-size:20px;text-align:center;width:50%; border:1px dashed black;' name='lpp_aboutus_h1' placeholder='About Us heading' value='<?php echo $lpp_aboutus_h1; ?>'
				</h3>
				<p class='lpp_p'>
					<textarea type='text' style='font-size:14px;text-align:center;width:65%; border:1px dashed black;' name='lpp_aboutus_content' placeholder='About Us Content' value='<?php echo $lpp_aboutus_content; ?>'><?php echo $lpp_aboutus_content; ?></textarea>
				</p>
			</div>
			<div id='lpp_sub_sect_3_right'>
				<h3 class='lpp_h2'>
					<textarea type='text' style='font-size:18px;text-align:center;width:65%; border:1px dashed black;' name='lpp_testimonial_left_content' placeholder='Testimonial Content' value='<?php echo $lpp_testimonial_left_content; ?>'><?php echo $lpp_testimonial_left_content; ?></textarea>
				</h3>
				<p class='lpp_p'>
					<input type='text' style='font-size:15px;text-align:center;width:40%; border:1px dashed black;' name='lpp_testimonial_left_content_author' placeholder='Author name ,Company Name' value='<?php echo $lpp_testimonial_left_content_author; ?>'>
				</p>
			</div>
		</div>
	</body>
</html>