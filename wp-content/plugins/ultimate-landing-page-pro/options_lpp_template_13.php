<html>
<head>
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		text-align: center;
		
		
	}
	#lpp_wrapper8{
		width:100%;
		background:#22d673 ;  
		background-image: url("<?php echo get_post_meta($post->ID,'lpp_add_img_2',true); ?>");
		background-size: cover;

	}
	.lpp_section{
		margin: 5% 25% 10% 25%;

	}
	#lpp_logo{
		width: 450px;
		height: 60px;
		text-align: center;
		border-bottom: 1px solid #d0d0d0;
	}
	#lpp_content{
		width: 450px;
		height: 750px;
		text-align: center;
		-webkit-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		-moz-box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
		box-shadow: 0px 13px 17px -9px rgba(0,0,0,0.53);
	}
	.lpp_h1{
		margin: 30px 40px 10px 45px;
		font-weight: 100;
		font-family: arial;
		font-size: 36px;
		font-size: 2.8rem;
		line-height: 1.2;
		text-align: left;
	}
	.lpp_p{
		margin: 5px 40px 10px 45px;
		text-align: left;
		font-weight: 100;
		font-family: arial;
		font-size: 19px;
		line-height: 1.5;
		font-size: 1.2rem;
	}

	.lpp_input{
		width: 370px;
		margin: 20px 0px -15px 0px;
		height: 40px;
		font-size: 22px;
	}
	#lpp_submit{
		background: #1bbc9b;
		color: #fff;
		border: none;
		height: 50px;
	}

	input{
		border: none;
	}
	input:hover,input:focus,textarea:hover,textarea:focus{
		border: 2px dashed black;
	}


	


	</style>

</head>
<body>
	<div id='lpp_wrapper8'>
		<input id="image_location2" type="text" class="upload_image_button1"  name="lpp_add_img_2"value='<?php echo $lpp_add_img_2; ?>' style='width:60%; font-size:18px; height:50px; text-align:center;' placeholder='Background Image URL'/>
		<input id="image_location2" type="button" class="upload_bg" data-id="1" value="Upload Image" />
	
		<div id='lpp_section_1' class='lpp_section'>
			<div id='lpp_content'>

				<div id='lpp_logo'>
					
					<input id="image_location1" type="text" class="upload_image_button2"  name='lpp_logo_url' placeholder='Logo URL' value='<?php echo $lpp_logo_url; ?>' style='text-align:center;width:90%;height:40px;' />
					<input id="image_location1" type="button" class="upload_bg" data-id="2" value="Upload" />
				</div>
				<p class='lpp_p'>
				<?php
				if(empty($lpp_main_content)){
					$lpp_main_content = "Insert an Image, shortcode, or embed a video.";
				}
				 	$settings = array('media_buttons'=> true,'lpp_main_content','textarea_rows' => 13);
				    wp_editor($lpp_main_content,'lpp_main_content',$settings);

  				 ?>

				</p>
					<p>
					<input type='text' id='lpp_main_cta' name='lpp_main_cta' value='<?php echo $lpp_main_cta; ?>' style='width:230px; height:35px; text-align:center;' placeholder='Button Text'/>
					<input type='url' id='lpp_cta_url' name='lpp_cta_url' value='<?php echo $lpp_cta_url; ?>' style='width:230px; height:35px; text-align:center;' placeholder='Button URL'/>
					 </p>
					 <br>
					 <br>
					 <p>
					<input type='text' id='' name='lpp_twitter_username' value='<?php echo $lpp_twitter_username; ?>' style='width:230px; height:35px; text-align:center;' placeholder='Twitter Username'/>
					<input type='url' id='' name='lpp_fb_username' value='<?php echo $lpp_fb_username; ?>' style='width:230px; height:35px; text-align:center;' placeholder='Facebook page URL'/>
					 </p>
		</div>
	</div>
</div>

	
</body>
</html>