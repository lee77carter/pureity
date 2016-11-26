<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo the_title(); ?></title>

		<!-- -------------------- Landing Page SEO  -------------------- -->
		<meta property="og:title" content="<?php echo get_post_meta($post->ID,'lpp_seo_title',true); ?>">

		<meta property="og:url" content="<?php $url = site_url(); echo $url; ?>">
		
		<meta property="og:description" name="description" content='<?php echo get_post_meta($post->ID,'lpp_seo_meta_description',true); ?>'>

		<meta name="keywords" content="<?php echo get_post_meta($post->ID,'lpp_seo_keywords',true); ?>">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src='<?php echo plugins_url("/js/countdown.js",__FILE__); ?>'></script>
<link rel="stylesheet" href='<?php echo plugins_url("/css/w3.css",__FILE__); ?>'>

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
#logo{
	max-width:120px; 
}

body{
	<?php
			$c_bg_img = get_post_meta($post->ID,'lpp_add_img_2',true);
			if(!empty($c_bg_img)){
				?>
				background-image: url("<?php echo $c_bg_img; ?>");
				   -webkit-background-size: cover;
   				   -moz-background-size: cover;
                   -o-background-size: cover;
                   background-size: cover;
				<?php
			} else { ?>
				background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
			<?php }
		 ?>
	max-width:1920px;
 
}
#header > h1, #header > h3{
	text-align: center;
	color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
}

#header{
	
}
#m-container{
	padding: 3% 0% 3% 0%;
	background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
	max-width: 80%; 
	margin: 0 auto;
}

#c-heading{
	color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	text-align: center !important;
	margin-top: 3%;
} 
#m-container{
	position: absolute;
  	top: 50%;
  	left: 50%;
 	transform: translate(-50%, -50%);
}

.day-s{
	text-align: center;
	font-size: 0.8rem;
	font-weight: 100;
}
.mm-counters{
	text-align: center;
}
.mm-counters > td{
	margin: 
}
.mm-c-table{
	font-size: 3.5em;
	width: 50%;
	text-align: center !important;
	margin:0 auto;
}
.mm-img-social{
	width: 3%;
	margin: 10px;
}

.mm-span-social{
	margin-top: 6%;
	text-align: center;
}

.mm-form{
	text-align: center;
}
.mm-input{
	background:transparent;
	border: 1px solid <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	width: 30%;
	padding-top:.5%;
	padding-bottom:.5%;
	padding-left:10px; 
}
.mm-btn{
	padding-right: 3%;
	padding-left: 3%;
	padding-top:.5%;
	padding-bottom:.5%;
	color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
	background:transparent;
	border: 2px solid <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
}

.mm-btn{
	-webkit-transition: background 1s, color 1s;
    transition: background 1s, color 1s;

}


.mm-btn:hover{
		background-color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		color: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
}
.mm-c-table{
	border-collapse: separate;
	border-spacing: 15px;
}
</style>
	<title>Template</title>
	<?php
	$lpp_countdown_date = get_post_meta($post->ID,'lpp_date_countdown',true);
	if (!empty($lpp_countdown_date)) {
		?>
	

	<script type="text/javascript">
		$(document).ready(function(){
			$('#c-heading').countdown('<?php echo $lpp_countdown_date; ?>', function(event) {
		    	$(this).html(event.strftime(''
		    		+'<table class=" w3-center mm-c-table">'
							+'<tr class="mm-counters">'
								+'<td>%D</td> <td>%H</td> <td>%M</td> <td>%S</td>'
							+'</tr>'
							+'<tr class="day-s">'
								+'<td>DAYS</td> <td>HOURS</td> <td>MINUTES</td> <td>SECONDS</td>'
							+'</tr>'
							
							));
			});

		});
		

	</script>

	<?php } ?>
</head>
<body>
	<div id='m-container' class="w3-row w3-card-8">
	<div id='header' class="w3-col s12 w3-center">
	<?php echo  do_shortcode(get_post_meta( $post->ID , 'lpp_main_content' , true )); ?>
	</div>
	<div id="m-counter" class="w3-col s12">
		<div id='c-heading' class="w3-center">
		
		</div>
	</div>
	<div class="w3-col s12 w3-center mm-span-social">
		<?php 
	$lppcheck_empty = get_post_meta($post->ID,'lpp_select_form_type',true);
	if(!empty($lppcheck_empty)){
?>
	<?php echo get_post_meta($post->ID,"lpp_select_data_save_method",true); ?>
		<span>
			<input type="hidden" value="<?php echo get_option("lpp_redirection_url"); ?>" name="lpp_sub_url" class="lpp_sub_url">
			<input type='hidden' value='<?php echo get_the_id(); ?>' name='lpp-id' class='lpp_sub_url'>
			<input type="hidden" name="lpp_name" class="lpp_input" placeholder="Name">
			<input type="email" name="lpp_email" name="" class="mm-input" placeholder='Enter Email' id=""> <input type="submit" value='<?php echo get_post_meta($post->ID,"lpp_main_cta",true); ?>' class="mm-btn">
		</span>
	<p id="response"></p>
	</form>

	<?php
}
	else{
	echo do_shortcode(get_post_meta($post->ID,'lpp_form_type_custom_code',true));
}
?>
	<br>
	</div>
<!-- </div> -->
</body>
</html>