<html>
	<head>


		<title><?php echo the_title(); ?></title>

		<!-- -------------------- Landing Page SEO  -------------------- -->
		<meta property="og:title" content="<?php echo get_post_meta($post->ID,'lpp_seo_title',true); ?>">

		<meta property="og:url" content="<?php $url = site_url(); echo $url; ?>">
		
		<meta property="og:description" name="description" content='<?php echo get_post_meta($post->ID,'lpp_seo_meta_description',true); ?>'>

		<meta name="keywords" content="<?php echo get_post_meta($post->ID,'lpp_seo_keywords',true); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script type="text/javascript">

	<?php echo get_post_meta($post->ID,'lpp_custom_js',true); ?>
	</script>

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

		<style type="text/css">
		body{
		<?php
			$c_bg_img = get_post_meta($post->ID,'lpp_add_img_2',true);
			if(!empty($c_bg_img)){
				?>
				background-image: url("<?php echo $c_bg_img; ?>");
				background-size: cover;
				<?php
			} else { ?>
				background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
			<?php }
		 ?>
	}
		#lpp_section_1{
			text-align: center;
			width: 80%;
			position: absolute;
  			top: 50%;
  			left: 50%;
 			transform: translate(-50%, -50%);

		}

		#lpp_content{
			background: rgba(0,0,0,.7);
			padding: 3% 4% 3% 4%;
			border-radius: 30px;
			margin: auto;


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
			border-radius: 5px;
			font-size: 18px;


		}
		#lpp_cta{
			height: 41px;
			margin-left: -2%;
			font-size: 15px;
			background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
			border-top-right-radius:5px;
			border-bottom-right-radius:5px; 
			border: none;
			cursor: pointer;
		}
		#lpp_features{
			display: inline-block;
			width: 90%;
			margin-left: 14%;

		}
		.lpp_feature{
			float: left;
			width: 26%;
			margin: 10px 4% 10px 0;
			display: inline-block;
		}
		.lpp_feature_img{
			float: left;
			width: 45px;
			height: 45px;
			margin-right:2px;
		}
		.lpp_p{
			font-size: 12px;
			text-align: left;


		}
		#lpp_logo{
			margin-top:3%; 
			margin-bottom: 2%;

		}

		<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>



		</style>
	</head>
	<body>
		<div class='lpp_section' id='lpp_section_1'>
			<div id='lpp_logo_sect'>
				<img src="<?php echo  get_post_meta( $post->ID , 'lpp_logo_url' , true ); ?>" id='lpp_logo'>
			</div>
			<div id='lpp_content'>
				<h1 class='lpp_h1'>
					<?php echo  get_post_meta( $post->ID , 'lpp_main_h1' , true ); ?>
				</h1>

					<?php 
					$lppcheck_empty = get_post_meta($post->ID,'lpp_select_form_type',true);
					if(!empty($lppcheck_empty)){
					?>
					<?php echo get_post_meta($post->ID,"lpp_select_data_save_method",true); ?>
				<p>
					<input type="hidden" value="<?php echo get_option("lpp_redirection_url"); ?>" name="lpp_sub_url" class="lpp_sub_url">
					<input type='hidden' value='<?php echo get_the_id(); ?>' name='lpp-id' class='lpp_sub_url'>
					<input type="hidden" name="lpp_name" class="lpp_input" placeholder="Name">
					<input type="email" name="lpp_email" id="lpp_email" class="lpp_input" placeholder="Email">
					<button name="submit" type="submit" id="lpp_cta">
						<?php echo  get_post_meta( $post->ID , "lpp_main_cta" , true ); ?>
					</button>
				</p>
				<p id="response" style="color:#fff"></p>
				</form>

						<?php
					}
					else{
						 echo do_shortcode(get_post_meta($post->ID,'lpp_form_type_custom_code',true));
					}
				 ?>

				<h3 class='lpp_h2'>
					<?php echo  get_post_meta( $post->ID , 'lpp_sub_h2' , true ); ?>
				</h3>
				<div id='lpp_features'>
					<div class='lpp_feature' id='lpp_feature_1'>
						<img src="<?php echo  get_post_meta( $post->ID , 'lpp_add_ftrimg_1' , true ); ?>" class='lpp_feature_img'>
						<p class='lpp_p'>
							<?php echo  get_post_meta( $post->ID , 'lpp_feature_1' , true ); ?>
						</p>
					</div>
					<div class='lpp_feature' id='lpp_feature_2'>
						<img src="<?php echo  get_post_meta( $post->ID , 'lpp_add_ftrimg_2' , true ); ?>" class='lpp_feature_img'>
						<p class='lpp_p'>
							<?php echo  get_post_meta( $post->ID , 'lpp_feature_2' , true ); ?>
						</p>
					</div>
					<div class='lpp_feature' id='lpp_feature_3'>
						<img src="<?php echo  get_post_meta( $post->ID , 'lpp_add_ftrimg_3' , true ); ?>" class='lpp_feature_img'>
						<p class='lpp_p'>
							<?php echo  get_post_meta( $post->ID , 'lpp_feature_3' , true ); ?>
						</p>
					</div>
				</div>
				
			</div>
		</div>
	</body>
</html>