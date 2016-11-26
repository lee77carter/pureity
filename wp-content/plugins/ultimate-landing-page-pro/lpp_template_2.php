<!DOCTYPE html>
<html>
	<head>
		<title><?php echo the_title(); ?></title>

		<!-- -------------------- Landing Page SEO  -------------------- -->
		<meta property="og:title" content="<?php echo get_post_meta($post->ID,'lpp_seo_title',true); ?>">

		<meta property="og:url" content="<?php $url = site_url(); echo $url; ?>">
		
		<meta property="og:description" name="description" content='<?php echo get_post_meta($post->ID,'lpp_seo_meta_description',true); ?>'>

		<meta name="keywords" content="<?php echo get_post_meta($post->ID,'lpp_seo_keywords',true); ?>">


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

*, *:before, *:after {
  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
 }

 body{
	width:100%;
	min-width: 700px;
	margin: 0px;
	
}
#lpp_content{
	width: 100%;
	height: 100%;
	margin: 0 auto;
	display: inline-block;
	text-align: center;
	

}

.lpp_p{

  line-height: 1.5; 
  font-size: 1.125rem; 

}
.lpp_section{
	display: inline-block;
	width: 100%;

}
#lpp_section_1{
	background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
	background-image:url("<?php echo get_post_meta($post->ID,'lpp_add_img_2',true); ?>");
	background-size: cover;
}
#lpp_h1{
	font-size: 36px;
	font-size: 2.4rem;
	color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
	margin-top: 14%;

}
.lpp_h2{
	font-size: 28px;
	font-size: 1.6rem;
	
}
#lpp_sub_h2{
	font-size: 28px;
	font-size: 1.6rem;
	color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
	margin-top: -1%;

}
#lpp_cta{
	padding: 15px 100px 15px 100px;
	font-size: 36px;
	font-size: 2.4rem;
	border: none;
	background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
	color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
	margin-top: 5%;
	margin-bottom:15%; 
}


#lpp_section_2{
	background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
	color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
}

#lpp_subsect_left{
	width: 50%;
	float: left;

}
#lpp_subsect_right{
	width: 50%;
	float: left;
	text-align: left;
}
#lpp_subsect_left > p{
  color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
  line-height: 1.5; 
  font-size: 1.125rem; 
}

#lpp_section_3{
	display: inline-block;
	width: 100%;
	background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true);   ?>;
}

#testimonial_text{
	text-align: left;
	color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
}

#lpp_testimonial_left{
	margin: 3% 0 2% 0;
	padding: 2% 1% 2% 2%;
	width: 46%;
	float: left;



}
#lpp_testimonial_right{
	text-align: left;
	margin: 3% 0 2% 0;
	padding: 2% 1% 2% 2%;
	width: 46%;
	float: right;

}
#lpp_benefit_left{
	margin: 3% 0 2% 0;
    padding: 2% 1% 2% 2%;
    width: 40%;
    float: right;
    text-align: left;

}
#lpp_benefit_right{
	text-align: left;
    margin: 3% 0 2% 0;
    padding: 2% 1% 2% 2%;
    width: 41%;
    float: left;

}
#lpp_footer{
	width: 100%;
	float: right;
	background:<?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>


}

#benefit_h2{
	color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
}

#benefit_text{
	color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
}
#lpp_f_h2{
	color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
}

		

			<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>





		</style>
	</head>
	<body>
		<div id="lpp_background"></div>
			<div id="lpp_content">
				<div id="lpp_wrapper">
					<div id="lpp_section_1" class="lpp_section">
						<h1 id="lpp_h1" >
							<?php echo  get_post_meta( $post->ID , 'lpp_main_h1' , true ); ?>
						</h1>
						<h2 id="lpp_sub_h2">
							<?php echo  get_post_meta( $post->ID , 'lpp_sub_h2' , true ); ?>
						</h2>
						<a  href ="<?php echo  get_post_meta( $post->ID , 'lpp_cta_url' , true ); ?> "><button id="lpp_cta"><?php echo  get_post_meta( $post->ID , 'lpp_main_cta' , true ); ?></button></a>
						
					</div>
					<!--- lpp_section_1 ENDS HERE!  -->
					<div id="lpp_section_2" class="lpp_section">
						<div id="lpp_subsect_left">
							<!---
							<img 
								style='width:80%; height:60%;margin-top:13%;'>
								 -->

								 <img src="<?php echo get_post_meta($post->ID,'lpp_add_img_1',true); ?>" style='width:80%; height:60%;margin-top:13%;'>
						</div>
						<div id="lpp_subsect_right">
							<div style='margin-top:13%;'>
								<?php echo  get_post_meta( $post->ID , 'lpp_main_content' , true ); ?>
							</div>
						</div>
					</div>
					<!--- lpp_section_2 ENDS HERE!  -->
					<div id="lpp_section_3" class="lpp_section">
						<div id="lpp_testimonial_left">
							<p class="lpp_p" id="testimonial_text">
              					<?php echo  get_post_meta( $post->ID , 'lpp_testimonial_left_content' , true ); ?>
             				</p>
             				<p style="font-size:15px; margin-left:10%;" id="testimonial_text">
             				  <?php echo  get_post_meta( $post->ID , 'lpp_testimonial_left_content_author' , true ); ?></p>
						</div>
						<div id="lpp_testimonial_right">
							<p class="lpp_p" id="testimonial_text" >
				              <?php echo  get_post_meta( $post->ID , 'lpp_testimonial_right_content' , true ); ?>
				            </p>
				            <p style="font-size:15px; margin-left:10%;" id="testimonial_text">
              					<?php echo  get_post_meta( $post->ID , 'lpp_testimonial_right_content_author' , true ); ?></p>
						</div>
						<div id="lpp_benefit_left">
							<h2 class="lpp_h2" id="benefit_h2">
				              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_1_content_title' , true ); ?>
				           </h2>
				           <p class="lpp_p" id="benefit_text">
				           	  <?php echo  get_post_meta( $post->ID , 'lpp_benefit_1_content' , true ); ?>
				           </p>
						</div>
						<div id="lpp_benefit_right">
							<h2 class="lpp_h2" id="benefit_h2">
				              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_2_content_title' , true ); ?>
				            </h2>
				            <p class="lpp_p" id="benefit_text">
				              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_2_content' , true ); ?>
				            </p>
						</div>
						<div id="lpp_footer">
					         <h2 id="lpp_f_h2" class="lpp_h2"><?php echo  get_post_meta( $post->ID , 'lpp_final_sub_h2' , true ); ?></h2>
        						<a  href ="<?php echo  get_post_meta( $post->ID , 'lpp_cta_url' , true ); ?> ">
        							
        							<button id="lpp_f_cta" style="background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
	color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;width:100%;height:60%; margin-top:0;font-size:21px; border:none;">
        							<h2  class='lpp_h2'><?php echo  get_post_meta( $post->ID ,'lpp_final_cta', true ); ?>
        							</h2>
        						 	</button>
        						</a>
						</div>
							</div>
			<!--- lpp_section_3 ENDS HERE!  -->
			</div>
		</div>
	</body>
</html>