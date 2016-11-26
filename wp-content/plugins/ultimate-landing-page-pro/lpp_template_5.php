<html>
	<head>

		<title><?php echo the_title(); ?></title>

		<!-- -------------------- Landing Page SEO  -------------------- -->
		<meta property="og:title" content="<?php echo get_post_meta($post->ID,'lpp_seo_title',true); ?>">

		<meta property="og:url" content="<?php $url = site_url(); echo $url; ?>">
		
		<meta property="og:description" name="description" content='<?php echo get_post_meta($post->ID,'lpp_seo_meta_description',true); ?>'>

		<meta name="keywords" content="<?php echo get_post_meta($post->ID,'lpp_seo_keywords',true); ?>">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

				<?php
		$heading_font = get_post_meta($post->ID,'lpp_headings_font',true);
		$paragraph_font = get_post_meta($post->ID,'lpp_paragraph_font',true);
		$input_font = get_post_meta($post->ID,'lpp_input_font',true);
		$headingfontURL = "https://fonts.googleapis.com/css?family=$heading_font";
		$paragrapghfontURL = "https://fonts.googleapis.com/css?family=$paragraph_font";
		$inputfontURL = "https://fonts.googleapis.com/css?family=$input_font";
?>

		<link href="<?php echo $headingfontURL; ?>" rel='stylesheet' type='text/css'>
		<link href="<?php echo $paragrapghfontURL; ?>" rel='stylesheet' type='text/css'>
		<link href="<?php echo $inputfontURL; ?>" rel='stylesheet' type='text/css'>
		<style type="text/css">
		h1,h2,h3,h4,h5,h6{
			font-family:"<?php echo $heading_font; ?>", sans-serif !important;
		}
		p,li,span,td,a{
			font-family:"<?php echo $paragraph_font; ?>", sans-serif !important;
		}
		input,label,button,select,textarea{
			font-family:"<?php echo $input_font; ?>", sans-serif !important;
		}
		button:hover{
			cursor:pointer;
		}
		</style>

<script type="text/javascript">
    $(document).ready(function() {
    $('.lpp_form').on('submit',function(){
    	<?php 
    		$success_msg = get_option('lpp_success_msg','Thank You for subscribing');
    		$failure_msg = get_option('lpp_failure_msg','Unknown error occurred.');
    		$email_exists_msg = get_option('lpp_subscriber_exists_msg','Subscriber Already Exists');
    	?>


         
         var success_msg = '<?php echo $success_msg; ?>';
         var failure_msg = '<?php echo $failure_msg; ?>';
         var email_exists_msg = '<?php echo $email_exists_msg; ?>';
         var sub_url = $('.lpp_sub_url').val();

        // Add text 'loading...' right after clicking on the submit button. 
        $('#response').text('Processing'); 
         
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(result){
                if (result == success_msg){
                    $('#response').text(success_msg);  
                } else if(result == 'run_url'){
                    $('#response').text(success_msg);
                    window.location.assign(sub_url);
                }else if (result == email_exists_msg) {
                		 $('#response').text(email_exists_msg);
                		 if (!!sub_url) {
                		 	window.location.assign(sub_url);
                		 }
                }else if (result == 'Invalid Input') {
                	$('#response').text('Invalid Input');
                }
                else
                {
                    $('#response').text(failure_msg);
                }
            }
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });
});

</script>
		

			<script type="text/javascript">

						<?php echo get_post_meta($post->ID,'lpp_custom_js',true); ?>

			</script>
		<style type="text/css">

		html{
			width: 100%;
			margin: 0 auto;
			padding: 0;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		#body{
			width: 100%;
			display: inline-block;
			margin: 0;
			padding: 0;
		}
		.lpp_section{
			width: 100%;
			text-align: center;
			display: inline-block;
		}
		#main_feature_img{
			width:100%;
			 height:100%;
		}
		input[type="submit"]{
			cursor: pointer;
		}


		@media screen and (min-width: 680px) {




		

		#lpp_logo{
			float: left;
			width:15%;
			height:10%;
			
		}
		#lpp_logo_img{
			width:100%;
			height:100%;
		}
		.lpp_h1{
			font-size: 37px; 
			font-size: 2.25rem;
			
			color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
		}
		.lpp_h2{
			font-size: 27px; 
			font-size: 1.5rem;
			
		}
		.lpp_p{
			line-height: 1.5;
			font-size: 1.125rem;
			
		}
		#lpp_section_1{
			display: inline-block;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		#lpp_primary_h1{
			margin-top:12%; 
		}
		#lpp_sub_h2{
			margin-top: -1.5%;
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		#sub_sect_1_left{
			width: 50%;
			float: left;
			height: 53%;
			margin-top: 5%;
			margin-left: 7%;
		}
		#sub_sect_1_right{
			width: 37%;
			float: left;
			height: 53%;
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
		#lpp_section_2{
			margin: 5% 0 5% 0;
		}
		#lpp_sub_sect_2_top_left{
			width: 46%;
			min-height: 29%;
			float: left;
			margin-top: 3%;
			margin-left: 2%;
		}
		#lpp_sub_sect_2_top_right{
			width: 46%;
			min-height: 29%;
			float: right;
			margin-top: 3%;
			margin-right: 2%;
		}
		#lpp_sub_sect_2_bottom_left{
			width: 46%;
			min-height: 29%;
			float: left;
			margin-top: 3%;
			margin-left: 2%;
		}
		#lpp_sub_sect_2_bottom_right{
			width: 46%;
			min-height: 29%;
			float: right;
			margin-top: 3%;
			margin-right: 2%;
		}
		#lpp_sub_sect_3_left{
			width: 45%;
			float: left;
		}
		#lpp_sub_sect_3_right{
			width: 54%;
			float: right;
		}
		.lpp_feature_box{
			-webkit-box-shadow: 3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			-moz-box-shadow:    3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			box-shadow:         3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;

			
		}
		#lpp_section_3
		{
			background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;
			padding: 1% 0 5% 0;

		}
		.lpp_benefit_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_benefit_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_aboutus{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		.lpp_testimonial_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_form_h2,.lpp_form_p{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_submit{
			margin-top: 20px;
			height: 50px;
			border: none;
			background:<?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		}

	}

	@media screen and (max-width: 680px) {

		#main_feature_img{
			width:100%;
			 height:35%;
		}
		#lpp_logo_img{
			width:50%;
			height:100%;
		}

		#lpp_logo{
			
			width:100%;
			height: 50px;

		}
		.lpp_h1{
			font-size: 26px; 
			font-size: 1.6rem;
			
			color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
		}
		.lpp_h2{
			font-size: 20px; 
			font-size: 1.2rem;
			
		}
		.lpp_p{
			line-height: 1.2;
			font-size: 1rem;
			
		}
		#lpp_section_1{
			display: inline-block;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		#lpp_primary_h1{
					
		}
		#lpp_sub_h2{
			
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		#sub_sect_1_left{
			width: 100%;

							}
		#sub_sect_1_right{
			width: 100%;
			padding-top: 1%;

					
		}
		#sub_sect_1_right,#sub_sect_1_left{
			background: rgba(81,130,209,1);
		}
		.lpp_input_field{
			width: 100%;
			height: 5%;
			font-size: 18px; 

		}

		#lpp_section_2{
			height: 100%;
			
		}
		#lpp_sub_sect_2_top_left{
			margin-bottom: 4%;
			width: 100%;
			
							}
		#lpp_sub_sect_2_top_right{
			width: 100%;
			margin-bottom: 4%;
					
		}
		#lpp_sub_sect_2_bottom_left{
			width: 100%;
			margin-bottom: 4%;
			
							}
		#lpp_sub_sect_2_bottom_right{
			width: 100%;
			
					
		}
		#lpp_sub_sect_3_left{
			width: 100%;
			margin-bottom: 6%;
			
		}
		#lpp_sub_sect_3_right{
			width: 100%;
			
		}
		.lpp_feature_box{
			-webkit-box-shadow: 3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			-moz-box-shadow:    3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			box-shadow:         3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
			padding: 5px;

			
		}
		#lpp_section_3
		{
			margin-top: 20%;
			background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;
		}
		.lpp_benefit_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_benefit_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_aboutus{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		.lpp_testimonial_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_form_h2,.lpp_form_p{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_submit{
			
			height: 40px;
			border: none;
			background:<?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		}
	}

	@media screen and (max-width: 420px) {


		#main_feature_img{
			width:100%;
			 height:20%;
		}
		#lpp_logo_img{
			width:50%;
			height:100%;
		}

		#lpp_logo{
			
			width:100%;
			height: 50px;

		}
		.lpp_h1{
			font-size: 26px; 
			font-size: 1.4rem;
			
			color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
		}
		.lpp_h2{
			font-size: 20px; 
			font-size: 1rem;
			
		}
		.lpp_p{
			line-height: 1.1;
			font-size: 0.9rem;
			
		}
		#lpp_section_1{
			display: inline-block;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		#lpp_primary_h1{
					
		}
		#lpp_sub_h2{
			
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		#sub_sect_1_left{
			width: 100%;

							}
		#sub_sect_1_right{
			width: 100%;
			padding-top: 1%;
			padding-bottom: 2%;

					
		}
		#sub_sect_1_right,#sub_sect_1_left{
			background: rgba(81,130,209,1);
		}
		.lpp_input_field{
			width: 100%;
			height: 4%;
			font-size: 12px; 

		}

		#lpp_section_2{
			height: 100%;

		}
		#lpp_sub_sect_2_top_left{
			width: 100%;
			
							}
		#lpp_sub_sect_2_top_right{
			width: 100%;
			
					
		}
		#lpp_sub_sect_2_bottom_left{
			width: 100%;
			
							}
		#lpp_sub_sect_2_bottom_right{
			width: 100%;
			
					
		}
		#lpp_sub_sect_3_left{
			width: 100%;
			
		}
		#lpp_sub_sect_3_right{
			width: 100%;
			
		}
		.lpp_feature_box{
			-webkit-box-shadow: 3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			-moz-box-shadow:    3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			box-shadow:         3px 7px 10px 0px rgba(130, 130, 130, 0.75);
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
			padding: 5px;

			
		}
		#lpp_section_3
		{
			position: static;
			background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;
			margin-top: 75%;
		}
		.lpp_benefit_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_benefit_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_aboutus{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		.lpp_testimonial_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_form_h2,.lpp_form_p{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_submit{
			
			height: 20px;
			border: none;
			background:<?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		}
	}


		
			<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>






		</style>
	</head>
	<body>
		<div id='lpp_section_1' class='lpp_section'>
			<div id='lpp_logo'>
				<img src="<?php echo get_post_meta($post->ID,'lpp_logo_url',true); ?>" id='lpp_logo_img'>
			</div>
			<h1 id='lpp_primary_h1' class="lpp_h1">
				<?php echo get_post_meta($post->ID,'lpp_main_h1',true); ?>
			</h1>
			<h3 id='lpp_sub_h2' style='font-size:1.1rem;font-size: 19px;' class='lpp_h2'>
				<?php echo get_post_meta($post->ID,'lpp_sub_h2',true); ?>
			</h3>
			<div id='sub_sect_1_left'>
				<embed src="<?php echo get_post_meta($post->ID,'lpp_add_img_1',true); ?>" id='main_feature_img'	>
			</div>
			<div id='sub_sect_1_right'>
				<?php 
					$lppcheck_empty = get_post_meta($post->ID,'lpp_select_form_type',true);
					if(!empty($lppcheck_empty)){

						?>
						<h2 class="lpp_h2 lpp_form_h2">
					<?php echo get_post_meta($post->ID,"lpp_form_h2",true); ?>
				</h2>
				<?php echo get_post_meta($post->ID,"lpp_select_data_save_method",true); ?>
				<p style="float:left; margin-left:5%;line-height:0px;" class="lpp_p lpp_form_p">Name</p>
				<input type="hidden" value="<?php echo get_option("lpp_redirection_url"); ?>" name="lpp_sub_url" class="lpp_sub_url">
				<input type='hidden' value='<?php echo get_the_id(); ?>' name='lpp-id' class='lpp_sub_url'>
				<br>
				<br>
				<br>
				<input type="text" name="lpp_name" id="lpp_name" class="lpp_input_field" placeholder="Name">
				<br>
				<br>
				<br>
				<p style="float:left; margin-left:5%;line-height:0px;" class="lpp_p lpp_form_p">E-Mail</p>
				<br>
				<br>
				<br>
				<input type="text" name="lpp_email" id="lpp_email" class="lpp_input_field" placeholder="Email">
				<br>
				<br>
				<br>
				<input type="submit" class="lpp_input_field lpp_submit" value="<?php echo get_post_meta($post->ID,"lpp_main_cta",true); ?>">
			</form> <p id="response"></p>
			<?php
					}
					else{
						 echo do_shortcode(get_post_meta($post->ID,'lpp_form_type_custom_code',true));
					}
				 ?>

			</div>
		</div>
		<div id='lpp_section_2' class='lpp_section'>
			<div id='lpp_sub_sect_2_top_left' class='lpp_feature_box'>
				<h3 class='lpp_h2 lpp_benefit_h2'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_1_content_title',true); ?>
				</h3>
				<p class='lpp_p lpp_benefit_p'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_1_content',true); ?>
				</p>
			</div>
			<div id='lpp_sub_sect_2_top_right' class='lpp_feature_box'>
				<h3 class='lpp_h2 lpp_benefit_h2'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_2_content_title',true); ?>
				</h3>
				<p class='lpp_p lpp_benefit_p'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_2_content',true); ?>
				</p>

			</div>
			<div id='lpp_sub_sect_2_bottom_left' class='lpp_feature_box'>
				<h3 class='lpp_h2 lpp_benefit_h2'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_3_content_title',true); ?>
				</h3>
				<p class='lpp_p lpp_benefit_p'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_3_content',true); ?>
				</p>
			</div>
			<div id='lpp_sub_sect_2_bottom_right' class='lpp_feature_box'>
				<h3 class='lpp_h2 lpp_benefit_h2'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_4_content_title',true); ?>
				</h3>
				<p class='lpp_p lpp_benefit_p'>
					<?php echo get_post_meta($post->ID,'lpp_benefit_4_content',true); ?>
				</p>
			</div>
		</div>
		<div id='lpp_section_3' class='lpp_section'>
			<div id='lpp_sub_sect_3_left'>
				<h3 class='lpp_h2 lpp_aboutus'>
					<?php echo get_post_meta($post->ID,'lpp_aboutus_h1',true); ?>
				</h3>
				<p class='lpp_p lpp_aboutus'>
					<?php echo get_post_meta($post->ID,'lpp_aboutus_content',true); ?>
				</p>
			</div>
			<div id='lpp_sub_sect_3_right'>
				<h3 class='lpp_h2 lpp_testimonial_p'>
					<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content',true); ?>
				</h3>
				<p class='lpp_p lpp_testimonial_p'>
					<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content_author',true); ?>
				</p>
			</div>
		</div>
	</body>
</html>