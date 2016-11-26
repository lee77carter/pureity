<html>
<head>
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		
		
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
		<input type='text' id='lpp_add_img_2' name='lpp_add_img_2' value='<?php echo $lpp_add_img_2; ?>' style='width:60%; font-size:18px; height:50px; text-align:center;' placeholder='Background Image URL'/>
	
		<div id='lpp_section_1' class='lpp_section'>
			<div id='lpp_content'>

				<div id='lpp_logo'>
					<input type='text'  style='text-align:center;width:90%;height:40px;' name='lpp_logo_url' placeholder='Logo URL' value='<?php echo $lpp_logo_url; ?>'>
				</div>
				<p class='lpp_p'>
				<?php
				if(empty($lpp_main_content)){
					$lpp_main_content = "Insert an Image or embed a video.";
				}
				 	$settings = array('media_buttons'=> true,'lpp_main_content','textarea_rows' => 13);
				    wp_editor($lpp_main_content,'lpp_main_content',$settings);

  				 ?>

				</p>
				<form>
					<p><input disabled type='email' name='lpp_email' class='lpp_input' placeholder='Email'></p>
					<p><button disabled type='submit' id='lpp_submit' value='Get Notified' class='lpp_input'> 
					<input type='text' id='lpp_main_cta' name='lpp_main_cta' value='<?php echo $lpp_main_cta; ?>' style='width:230px; height:35px; text-align:center;' placeholder='Call To Action Text'/>
					 </button></p>
					  <br>
					 <p>
					<input type='text' id='' name='lpp_twitter_username' value='<?php echo $lpp_twitter_username; ?>' style='width:230px; height:35px; text-align:center;' placeholder='Twitter Username'/>
					<input type='url' id='' name='lpp_fb_username' value='<?php echo $lpp_fb_username; ?>' style='width:230px; height:35px; text-align:center;' placeholder='Facebook page URL'/>
					 </p>
				</form>
				 <br>
					
		</div>
	</div>
</div>

	
</body>
</html>