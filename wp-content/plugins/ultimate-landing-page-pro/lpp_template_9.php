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
		p,li,span,td,a,#left{
			font-family:"<?php echo $paragraph_font; ?>", sans-serif !important;
		}
		input,label,button,select,textarea{
			font-family:"<?php echo $input_font; ?>", sans-serif !important;
		}
		button:hover{
			cursor:pointer;
		}
		div{
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
		 margin: 0 auto;
	}
		  @media screen and (min-width: 680px) {

	.lpp_section{
	  	background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
  		margin: 0 auto;
		}
	#lpp_logo > img{
		margin-top: 10px;
	}
	#lpp_content{
		min-width: 85%;
		text-align: center;
		background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
		-webkit-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		-moz-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		position: absolute;
  		top: 50%;
  		left: 50%;
 		transform: translate(-50%, -50%);

	}
	.lpp_h1{
		margin: 20px 40px 10px 45px;
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
		width: 90%;
		margin: 0px 0px 5px 0px;
		height: 45px;
		font-size: 22px;
	}
	#lpp_submit{
		border: none;
		height: 50px;
		color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;

	}
	#left{
		width: 50%;
		float: left;
		border-right: 2px solid #d0d0d0;
	}
	#form{
		width: 45%;
		float: left;
		margin: 15% 0 0 20px;

	}
	#response{
		font-family: helvetica,sans-serif;
		font-style: italic;
		color: #E86850;
	}
}

 @media screen and (max-width: 680px) {

	.lpp_section{
		width: 400px;
		margin: 0 auto;
		
		}
	#lpp_logo > img{
		margin-top: 10px;
	}
	#lpp_content{
		background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
		min-width: 85%;
		position: absolute;
		text-align: center;
		-webkit-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		-moz-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		position: absolute;
  		top: 50%;
  		left: 50%;
 		transform: translate(-50%, -50%);

	}
	.lpp_h1{
		margin: 10px 20px 5px 22px;
		font-weight: 100;
		font-family: arial;
		font-size: 24px;
		font-size: 2rem;
		text-align: left;
		color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
	}
	.lpp_p{
		margin: 2.5px 20px 5px 22px;
		text-align: left;
		font-weight: 100;
		font-family: arial;
		font-size: 16px;
		line-height: 1.5;
		font-size: .9rem;
		color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	}

	.lpp_input{
		width: 90%;
		margin:0px 0px 5px 0px;
		height: 25px;
		font-size: 16px;
	}
	#lpp_submit{
		border: none;
		height: 25px;
		color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
		background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;

	}
	#left{
		width: 50%;
		float: left;
		border-right: 2px solid #d0d0d0;
	}
	#form{
		width: 45%;
		float: left;
		margin: 15% 0 0 10px;
	}
	#response{
		font-family: helvetica,sans-serif;
		font-style: italic;
		color: #E86850;
	}

 }

	<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>


	</style>

</head>
<body>
	
	<div id='lpp_section_1' class='lpp_section'>
		<div id='lpp_content'>

			<div id='left'> 
			<div id='lpp_logo'>
		<img src="<?php echo get_post_meta($post->ID,'lpp_logo_url',true); ?>">
			</div>

				<?php echo  get_post_meta( $post->ID , 'lpp_main_content' , true ); ?>
		</div>
		<div id='form'>
			<?php echo get_post_meta($post->ID,'lpp_select_data_save_method',true); ?>
				<input type='hidden' value='<?php echo get_option('lpp_redirection_url'); ?>' name='lpp_sub_url' class='lpp_sub_url'>
				<input type='hidden' value='<?php echo get_the_id(); ?>' name='lpp-id' class='lpp_sub_url'>
				<p><input type='text' name='lpp_name' class='lpp_input' placeholder='Name'></p>
				<p><input type='email' name='lpp_email' class='lpp_input' placeholder='Email' required></p>
				<p><input type='submit' name='submit' id='lpp_submit' value='<?php echo  get_post_meta( $post->ID , 'lpp_main_cta' , true ); ?>' class='lpp_input'></p>
				<p id='response'></p>
			</form>
		</div>
	</div>
	</div>


	
</body>
</html>