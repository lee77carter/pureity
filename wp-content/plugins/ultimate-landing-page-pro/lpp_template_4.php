<!DOCTYPE html>
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
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		
		body{

			width: 100%;
			min-width:1050px;
			height: 980px;
			margin: 0;
			padding: 0;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
			text-align: center;

		}

		#lpp_sub_feature{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;

		}

		

		.lpp_p{
			 line-height: 1.5; 
			 font-size: 1rem; 
			 
		}
		.lpp_h1{
			font-size: 36px; 
			font-size: 2.2rem;
			
			color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
 ;
		}
		.lpp_h2{
			font-size: 28px; 
			font-size: 1.75rem;
			
			
		}
		.lpp_section{
			width: 100%;
			max-width:1480px; 
			min-height: 300px;
			height: 900px;
			display: inline-block;
			text-align: center;
		}
		#lpp_section_1{
			text-align: center;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;

		}
		#lpp_section_2{
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
		}
		#lpp_section_3{
			background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;
		}
		#lpp_logo{
			width: 20%;
			height: 10%;
			margin: 10px 0 10px 0;

		}
		#main_feature_img{
			width: 85%;
			height: 60%;
			margin-top: 2%;

		}
		#lpp_primary_h1{
			margin-top:2%;
		}
		#lpp_sub_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		#sub_sect2_left{
			height: 100%;
			width: 50%;
			float: left;
		}
		#sub_sect2_left > h2,h4{
			margin-left: 5%;
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
			
		}
		#lpp_benefit > h3{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;

		}
		#lpp_benefit > p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;

		}
		#sub_sect2_right{
			width: 40%;
			float: right;
			text-align: center;
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
			padding-bottom: 100px;
		}
		#lpp_section_3{
			height:300px;
			text-align: center;
		}
		.lpp_input{
			font-size: 22px;
			margin-top: 5%;
			margin-left: 10%;
			width: 70%;
			height: 35px;
			text-align: center;


		}
		#lpp_cta{
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
			background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
			border: none;
			height: 45px;

		}
		#lpp_testimonial{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		#lpp_testimonial_author{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}

		#lpp_form_h2{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;

		}
		#lpp_sub_form_h{
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}

		

			<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>

	

		
		</style>

	</head>


	
	<body>
	 <div id='lpp_section_1' class='lpp_section'>
	 		<img src="<?php echo get_post_meta($post->ID,'lpp_logo_url',true); ?>" id='lpp_logo' alt='Logo'>
	 	<embed src="<?php echo get_post_meta($post->ID,'lpp_add_img_1',true); ?>" id='main_feature_img'>
	 	<h1 id='lpp_primary_h1' class='lpp_h1'>
	 		<?php echo get_post_meta($post->ID,'lpp_main_h1',true); ?>
	 	</h1>
	 	<h2 id='lpp_sub_h2' class='lpp_h2'>
	 		<?php echo get_post_meta($post->ID,'lpp_sub_h2',true); ?>
	 	 </h2>
	 </div>
	 <div id='lpp_section_2' class='lpp_section'>
	 	<div id='sub_sect2_left'>
	 		<?php echo get_post_meta($post->ID,'lpp_main_content',true); ?>
	 	</div>
	 	<div id='lpp_pointer'></div>
	 	<div id='sub_sect2_right'>
	 		<div id='lpp_form'>
	 			<?php 
					$lppcheck_empty = get_post_meta($post->ID,'lpp_select_form_type',true);
					if(!empty($lppcheck_empty)){
						?>
					<h2 id="lpp_form_h2" class="lpp_h2">
	 				<?php echo get_post_meta($post->ID,"lpp_form_h2",true); ?>
	 			</h2>
	 			<p id="lpp_sub_form_h" class="lpp_p"><b>
	 				<?php echo get_post_meta($post->ID,"lpp_form_sub_h2",true); ?>
	 			</b></p>
	 			<?php echo get_post_meta($post->ID,"lpp_select_data_save_method",true); ?>
	 				<input type="hidden" value="<?php echo get_option("lpp_redirection_url"); ?>" name="lpp_sub_url" class="lpp_sub_url">
	 				<input type="hidden" value="<?php echo get_the_id(); ?>" name="lpp-id" class="lpp_sub_url">
					<p>
	 				<input type="text" name="lpp_name" placeholder="Name" id="lpp_input_name" class="lpp_input">
	 				</p>
	 				<p>
	 				<input type="email" name="lpp_email" placeholder="E-mail" id="lpp_input_email" class="lpp_input"></p>
	 				<p>
	 				<button id="lpp_cta"  type="submit" class="lpp_input" >
	 					<?php echo get_post_meta($post->ID,"lpp_main_cta",true); ?>
	 				</button></p>

	 			</form> <p id="response"></p>
	 			<?php
					}
					else{
						 echo do_shortcode(get_post_meta($post->ID,'lpp_form_type_custom_code',true));
					}
				 ?>
	 		</div>
	 	</div>
	 </div>
	 <div id='lpp_section_3' class='lpp_section'>
	 	<h2 id="lpp_testimonial" class="lpp_h2">
	 		<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content',true); ?>
	 	</h2>
	 	<p id='lpp_testimonial_author' class='lpp_p'><i>
	 		<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content_author',true); ?>

	 	</i></p>

	 </div>
	</body>
</html>