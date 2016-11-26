<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

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
		#m-container h1,#m-container h2,#m-container h3,#m-container h4,#m-container h5,#m-container h6{
			font-family:"<?php echo $heading_font; ?>", sans-serif !important;
		}
		#m-container p, #m-container li, #m-container span, #m-container td, #m-container a{
			font-family:"<?php echo $paragraph_font; ?>", sans-serif !important;
		}
		#m-container input, #m-container label, #m-container button, #m-container select, #m-container textarea{
			font-family:"<?php echo $input_font; ?>", sans-serif !important;
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

<script type="text/javascript">

	jQuery(document).ready(function(){

		jQuery('#lpp_datepicker').datepicker({
			showButtonPanel: true ,
			dateFormat: 'yy/mm/dd'
		});

	});
</script>


<style type="text/css">

body{
	margin: 0 auto;
}

.mmp_section{
	width: 100%;
	margin: 0 auto;
	text-align: center;
	min-height:330px;

}

#sec-2{
	background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;

}
#sec-1{
	padding: 7% 20px 7% 20px;
	background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
}
#sec-1 > h1, #sec-1 > h3{
	font-weight: bold;
	text-align: center;
	color: white;
}


#c-heading{
	color: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
	text-align: center !important;
	margin-top: 3%;
} 
#m-container{

}

.day-s{
	text-align: center;
	font-size: 18px;
	font-weight: normal;
}
.mm-counters{
	text-align: center;
}
.mm-c-table{
	font-size: 3rem;
	min-height: 85px;
	width: 50%;
	text-align: center !important;
	margin:0 auto;
}


.mm-span-social{
	margin-top: 2%;
}

.mm-btn{
	background:#fff;
	border: 2px solid <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
	color: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
	padding: 1% 5% 1% 5%;
	font-size: 1.1rem;
	

}
.mm-btn{
	-webkit-transition: background 1s, color 1s;
    transition: background 1s, color 1s;
}
.mm-btn:hover{
	background:<?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
	color:#fff;
}
.mm-input{
	border: none;
	border: 1px solid <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
	padding: 1% 5% 1% 5%;
	color: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
	font-size: 1.1rem;
}
#response{
	color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
}
#lpp_custom_form_code{
	display: none;
}

</style>

<script type="text/javascript">
	 jQuery('#lpp_datepicker').datepicker("option", "dateFormat","yy-mm-dd");
</script>
</head>
<div id='m-container' class="w3-row w3-center">
	<div id="sec-1" class='w3-col s12 mmp_section'>
	<?php
		$settings = array('media_buttons'=> true,'lpp_main_content');
		wp_editor($lpp_main_content,'lpp_main_content',$settings);
  	?>
	</div>
	<div id="sec-2" class='w3-col s12 mmp_section'>
		<div id="m-counter" class="w3-col s12">
		<div id='c-heading' class="w3-center">
		
			<table class=" w3-center mm-c-table">
				<tr class="mm-counters">
					<td>2</td> <td>12</td> <td>56</td> <td>45</td>
				</tr>
				<tr class="day-s">
					<td>DAYS</td> <td>HOURS</td> <td>MINUTES</td> <td>SECONDS</td>
				</tr> 
			</table>

			<label for="lpp_datepicker">Pick A Date :</label>
			<input  type="text" id="lpp_datepicker" name="lpp_date_countdown" value="<?php echo get_post_meta($post->ID,'lpp_date_countdown',true); ?>"> <span>Leave empty for no countdown</span>
		</div>
	</div>
	<div class="w3-col s12 w3-center mm-span-social">
	<p>
	 			<label style="color:#5A5A5A;">Default Form : </label> <input checked type='radio' id='lpp_select_form_type_default' name='lpp_select_form_type'  value='1' <?php checked('1', $lpp_select_form_type); ?> >
	 			<label style="color:#5A5A5A;"> Custom Form : </label> <input type='radio' id='lpp_select_form_type_custom' name='lpp_select_form_type' value=''  <?php checked('', $lpp_select_form_type); ?> >
	 		</p>
	 		<textarea rows='18' placeholder='Insert your form code here.' name='lpp_form_type_custom_code' id='lpp_custom_form_code'><?php echo $lpp_form_type_custom_code; ?></textarea>
	 		
		<span id="lpp_form">
			<input type="email" name="" class="mm-input" placeholder='Enter Email' id=""> 
			<input type='text' name='lpp_main_cta' value='<?php echo $lpp_main_cta; ?>' class="mm-btn" placeholder='CTA Text'/>
		
		</span>
	</div>
	</div>
	
</div>
</html>