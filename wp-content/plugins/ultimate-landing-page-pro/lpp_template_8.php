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

		#lpp_content,div{
			font-family:"<?php echo $paragraph_font; ?>", sans-serif;
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

	*, *:before, *:after {
		  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
		 }
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
		 @media screen and (min-width: 680px) {
	
	.lpp_section{
		margin: auto;
		width: 520px;
		position: absolute;
  		top: 50%;
  		left: 50%;
  		transform: translate(-50%, -50%);

	}
	#lpp_logo > img{
		margin-top: 20px;
		text-align: center;
	}
	#lpp_content{
		text-align: center;
		background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
		-webkit-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		-moz-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		padding: 8px 15px 8px 15px;
	}
	.lpp_h1{
		margin: 30px 40px 10px 45px;
		font-weight: 100;
		font-family: arial;
		font-size: 36px;
		font-size: 2.8rem;
		text-align: left;
		color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
	}
	.lpp_p{
		margin: 5px 40px 10px 45px;
		text-align: left;
		font-weight: 100;
		font-family: arial;
		font-size: 19px;
		line-height: 1.5;
		font-size: 1.2rem;
		color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	}

	.lpp_input{
		width: 370px;
		height: 45px;
		font-size: 22px;
	}
	#lpp_submit{
		border: none;
		height: 50px;
		color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
		cursor: pointer;
		margin-bottom:15px;


	}
}
@media screen and (max-width: 680px) {

	.lpp_section{
		margin: auto;
		width: 330px;
		position: absolute;
  		top: 50%;
  		left: 50%;
  		transform: translate(-50%, -50%);

	}
	#lpp_logo> img{
		margin-top: 10px;
		max-width: 150px;
		text-align: center;
	}
	#lpp_content{
		background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
		text-align: center;
		-webkit-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		-moz-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		padding: 8px 15px 8px 15px;
	}
	.lpp_h1{
		margin: 10px 20px 5px 20px;
		font-weight: 100;
		font-family: arial;
		font-size: 24px;
		font-size: 1.9rem;
		text-align: left;
		color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
	}
	.lpp_p{
		margin: 3px 20px 5px 22px;
		text-align: left;
		font-weight: 100;
		font-family: arial;
		font-size: 15px;
		line-height: 1.5;
		font-size: .9rem;
		color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	}

	.lpp_input{
		width: 250px;
		height: 35px;
		font-size: 18px;
	}
	#lpp_submit{
		border: none;
		height: 35px;
		color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
		cursor: pointer;
		margin-bottom:15px;


	}


}


	
	<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>


	</style>

</head>
<body>
	
	<div id='lpp_section_1' class='lpp_section'>
		<div id='lpp_content'>

			<div id='lpp_logo'>
		<img src="<?php echo get_post_meta($post->ID,'lpp_logo_url',true); ?>">
			</div>
			<p class='lpp_p'>
				<?php echo  get_post_meta( $post->ID , 'lpp_main_content' , true ); ?>
			</p>
			<?php echo get_post_meta($post->ID,'lpp_select_data_save_method',true); ?>
				<input type="hidden" value="<?php echo get_option("lpp_redirection_url"); ?>" name="lpp_sub_url" class="lpp_sub_url">
				<input type='hidden' value='<?php echo get_the_id(); ?>' name='lpp-id' class='lpp_sub_url'>
				<input type='hidden' name='lpp_name' class='lpp_input' placeholder='Name'>

				<p><input type='email' name='lpp_email' class='lpp_input' placeholder='Email'></p>
				<p><button type='submit' id='lpp_submit' value='Get Notified' class='lpp_input'>
					<?php echo  get_post_meta( $post->ID , 'lpp_main_cta' , true ); ?>
				</button></p>
				<p id="response"></p>
			</form>
	</div>
</div>


	
</body>
</html>