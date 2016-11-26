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
		p,li,span,td,a,#lpp_sub_sect2_left{
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
		body{
			width: 100%;
			min-width:1050px;
			height: 980px;
			text-align: center;
			margin: 0;
			padding: 0;
		}
		h1,h2,h3,h4,h5,h6{
			
			
		}
		p,ul,li,input{
			
		}

		.lpp_section{
			width: 100%;
			max-width:1480px; 
			min-height: 450px;
			display: inline-block;
			text-align: center;
			
		}
		.lpp_h1{
			font-size: 36px;
			font-size: 2.4rem;
			
			color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
			margin-top: 5%;

		}
		.lpp_h2{
			font-size: 28px;
			font-size: 1.6rem;
			
			color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_p{
			color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
			line-height: 1.5;
			font-size: 1.125rem;
			
		}
		#lpp_section_1{
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		#lpp_section_2{
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;

		}
		#lpp_section_3{
			background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;

		}
		#lpp_logo{
			width:120px;
			height: 60px;
			
			margin: 10px;
		}
		#lpp_hero_shot{
			width:800px;
			height: 450px;
			margin-top: 3%;
		}
		#lpp_sub_sect2_left{
			width:58%;
			float: left;
			margin-top: 5%;
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
		}
		#lpp_sub_sect3_left{
			width:48%;
			float: left;
		}
		#lpp_sub_sect3_right{
			width:48%;
			float: left;
		}

		.lpp_input{
			width:60%;
			height:40px;
			margin-left:20px;
			margin-top:10px;
			font-size: 18px;
			color: #565656;  
		}
		#lpp_cta{
			
			margin-left:80px;
			margin-top: 20px;  
			width:60%;
			height:50px;
			border: none;
			font-size: 22px;
			background:<?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;

		}
		#lpp_sub_sect2_right{
			height: 400px;
		}


			<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>




		</style>
	</head>
	<body>
		<div id='lpp_section_1' class='lpp_section'>
			<div id='lpp_logo'>
				<img src="<?php echo get_post_meta($post->ID,'lpp_logo_url',true); ?>" id='lpp_logo'>
			</div>
			<embed src='<?php echo get_post_meta($post->ID,'lpp_add_img_1',true); ?>' id='lpp_hero_shot'>
			<h1 class='lpp_h1'>
				<?php echo get_post_meta($post->ID,'lpp_main_h1',true); ?>
			</h1>
		</div>
		<div id='lpp_section_2' class='lpp_section'>
			<div id='lpp_sub_sect2_left'>
				<?php echo get_post_meta($post->ID,'lpp_main_content',true); ?>
				
			</div>
			<div id='lpp_sub_sect2_right'>
				<?php 
					$lppcheck_empty = get_post_meta($post->ID,'lpp_select_form_type',true);
					if(!empty($lppcheck_empty)){

						?>
						<h2 class="lpp_h2">
					<?php echo get_post_meta($post->ID,"lpp_form_h2",true); ?>
				</h2>
				<p class="lpp_p">
					<?php echo get_post_meta($post->ID,"lpp_form_sub_h2",true); ?>
				</p>
				<?php echo get_post_meta($post->ID,"lpp_select_data_save_method",true); ?>
					<input type="hidden" value="<?php echo get_option("lpp_redirection_url"); ?>" name="lpp_sub_url" class="lpp_sub_url">
					<input type='hidden' value='<?php echo get_the_id(); ?>' name='lpp-id' class='lpp_sub_url'>
					<p class="lpp_p">Name  :    <input type="text" id="lpp_name" name="lpp_name" class="lpp_input"></p>
					<p class="lpp_p">Email  :  <input type="text" id="lpp_email" name="lpp_email" class="lpp_input"></p>
					<button type="submit" id="lpp_cta">Subcribe Now</button>
				</form>
				<?php
					}
					else{
						 echo do_shortcode(get_post_meta($post->ID,'lpp_form_type_custom_code',true));
					}
				 ?>
				 <p id="response"></p>
	 			
				
			</div>
		</div>
		<div id='lpp_section_3' class='lpp_section'>
			<div id='sub_sect3_full'>
				<h2 class='lpp_h2'>
					<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content',true); ?>
				</h2>
				<p class='lpp_p'><i>
					<?php echo get_post_meta($post->ID,'lpp_testimonial_left_content_author',true); ?>
					</i></p>
			</div>
			<div id='lpp_sub_sect3_left'>
				<?php echo get_post_meta($post->ID,'lpp_about_us',true); ?>
			</div>
			<div id='lpp_sub_sect3_right'>
				<?php echo get_post_meta($post->ID,'lpp_contact_us',true); ?>
			</div>
		</div>
	</body>
</html>