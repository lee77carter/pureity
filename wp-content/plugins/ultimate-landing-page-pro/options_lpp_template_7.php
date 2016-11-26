<html>
	<head>
		<style>
		*, *:before, *:after {
  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
 }
body{
	width:100%;
	height:800px;
	
}
#lpp_background{
	width:100%;
	height:1800px;
	position: fixed;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
	display: block;
	 -webkit-filter: blur(10px);
	 -moz-filter: blur(5px);
	 -o-filter: blur(5px);
	 -ms-filter: blur(5px);
	 filter: blur(5px);
}
#lpp_content{
	width: 100%;
	height: 100%;
	position: relative;
	right: 0;
	left: 0;
	z-index: 99999;
	display: inline-block;
	text-align: center;

}

.lpp_section{
	display: inline-block;
	border: 2px solid black;
	width: 100%;
	height: 70%;

}
#lpp_h1{
	font-size: 36px;
	font-size: 2.4rem;
	font-family: 'museo-slab', sans-serif;
	color: #333333;
	margin-top: 15%;

}
#lpp_sub_h2{
	font-size: 28px;
	font-size: 1.6rem;
	font-family: 'museo-slab', sans-serif;
	color: #333333;
	margin-top: -1.4%;

}




#lpp_subsect_left{
	width: 49.9%;
	height: 100%;
	float: left;
	border: 2px solid #13846c;

}
#lpp_subsect_right{
	width: 49.9%;
	height: 100%;
	float: right;
	border: 2px solid #13846c;

}
#lpp_subsect_left >p{
  color: #333333; 
  line-height: 1.5; 
  font-size: 1.125rem; 
  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

#lpp_subsect_right > ul{
  color: #333333; 
  line-height: 2; 
  font-size: 1.125rem; 
  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}
#lpp_section_2{
}
#lpp_section_1{
	height: 60%;
}

#lpp_section_3{
	display: inline-block;
	height:57%;
}
.testimonial{
	width: 50%;
}

#lpp_testimonial_left{

	float: left;
	border: 2px solid #13846c;

}
#lpp_testimonial_right{
	float: right;
	border: 2px solid #13846c;

}
.benefit{
	width: 50%;
}
#lpp_benefit_left{
	float: left;
	border: 2px solid #13846c;

}
#lpp_benefit_right{
	float: right;
	border: 2px solid #13846c;

}
#lpp_f_cta{


	height: 10%;
	border: 2px solid #13846c;
}
#lpp_email{
	width:60%;
	height: 6%;
	display: inline-block;
	font-size: 23px;
}
#lpp_main_CTA{
	width: 35%;
	height: 9%;
	font-size: 36px;
	font-size: 2.4rem;
	border: none;
	border-bottom: 10px solid #13846c;
	background-color: #1bbc9b;
	color: #fff;
	margin-top: 10%;


}
</style>

	</head>
	<body>
			<div id="lpp_content">
				<div id="lpp_wrapper">
					<div id="lpp_section_1" class="lpp_section">
						<input type='text' id='lpp_add_img_2' name='lpp_add_img_2' value='<?php echo $lpp_add_img_2; ?>' />
						<input id="image_location2" type="text" class="upload_image_button1"  name="lpp_add_img_2" value='<?php echo $lpp_add_img_2; ?>' style='width:60%; font-size:18px; height:50px; border:2px dashed black; text-align:center;' placeholder='Background Image URL'/>
          				<input id="image_location2" type="button" class="upload_bg" data-id="1" value="Upload Image" />
						<h1 id="lpp_h1" >
							<input type='text' id='lpp_main_h1' name='lpp_main_h1' value='<?php echo $lpp_main_h1; ?>' style='width:60%; font-size:22px; height:50px; border:2px dashed black; text-align:center;' placeholder='Main Heading'/>
						</h1>
						<br>
						<br>
						<h3 id="lpp_sub_h2">
							<input type='text' id='lpp_sub_h2' name='lpp_sub_h2' value='<?php echo $lpp_sub_h2; ?>' style='width:80%; font-size:18px; height:45px; border:2px dashed black; text-align:center;' placeholder='Suporting sub header and explanation.'/>
						</h3>
						<br>
						<br>
						<br>
						<input disabled type='text' name='lpp_email' placeholder='Email' id='lpp_email'>
						
							<input type='text' id='lpp_main_cta' name='lpp_main_cta' value='<?php echo $lpp_main_cta; ?>' style='width:210px; height:30px; border:2px dashed black; text-align:center;' placeholder='Call To Action Text'/>
							<br>
							<br>
							<br>
						
					
					</div>
					<!--- lpp_section_1 ENDS HERE!  -->
					<div id="lpp_section_2" class="lpp_section">
						<div id="lpp_subsect_left">
								<input id="image_location1" type="text" class="upload_image_button2"  name='lpp_add_img_1' value='<?php echo $lpp_add_img_1; ?>' style='width:400px; height:55px; border:2px dashed black;' placeholder='Insert Image URL here'/>
			   				 	<input id="image_location1" type="button" class="upload_bg" data-id="2" value="Upload" />
								<div style='height:370px; width:100%; border:1px solid blue; text-align:center;' >Your Image will be displayed here</div>
							
						</div>
						<div id="lpp_subsect_right">
								<?php
				 					$settings = array('media_buttons'=> false,'lpp_main_content','textarea_rows' => 14);
				    				wp_editor($lpp_main_content,'lpp_main_content',$settings);
				    			?>
						</div>
						<div id="lpp_sign_down2"></div>
					</div>
					<!--- lpp_section_2 ENDS HERE!  -->
					<div id="lpp_section_3" class="lpp_section">
						<div class="testimonial" id="lpp_testimonial_left">
							<p class="lpp_p" id="testimonial_text">
					            <textarea name='lpp_testimonial_left_content' id='lpp_testimonial_left_content' value='<?php echo $lpp_testimonial_left_content; ?>' style='width:300px; height:200px; border:2px dashed black; text-align:left;' placeholder='Enter your first testimonial here.'><?php echo $lpp_testimonial_left_content; ?></textarea>
					          </p>
					           <p style="font-size:11px;margin-left:10%;">
					             <input type='text' id='lpp_testimonial_left_content_author' name='lpp_testimonial_left_content_author' value='<?php echo $lpp_testimonial_left_content_author; ?>' style='width:280px; height:30px; border:2px dashed black; text-align:center;' placeholder='Enter testimonial author name here.'/>
          				    </p>
						</div>
						<div class="testimonial" id="lpp_testimonial_right">
					 		<p class="lpp_p" id="testimonial_text">
					            <textarea name='lpp_testimonial_right_content' id='lpp_testimonial_right_content' value='<?php echo $lpp_testimonial_right_content; ?>' style='width:300px; height:200px; border:2px dashed black; text-align:left;' placeholder='Enter your first testimonial here.'><?php echo $lpp_testimonial_right_content; ?></textarea>
					           </p>
					           <p style="font-size:11px;margin-left:10%;">
					             <input type='text' id='lpp_testimonial_right_content_author' name='lpp_testimonial_right_content_author' value='<?php echo $lpp_testimonial_right_content_author; ?>' style='width:280px; height:30px; border:2px dashed black; text-align:center;' placeholder='Enter testimonial author name here.'/>
				            </p>
						</div>
						<div class="benefit" id="lpp_benefit_left">
							<h3 class="lpp_h">
					            <input type='text' id='lpp_benefit_1_content_title' name='lpp_benefit_1_content_title' value='<?php echo $lpp_benefit_1_content_title; ?>' style='width:190px; height:30px; border:2px dashed black; text-align:center;' placeholder='Enter benefit title here.'/>
					        </h3>
					        <p class="lpp_p" id="benefit_text">
					            <textarea rows="4" cols="29" name='lpp_benefit_1_content' id='lpp_benefit_1_content' value='<?php echo $lpp_benefit_1_content; ?>' style='height:200px; border:2px dashed black; text-align:left;' placeholder='Enter your  benefit here.'><?php echo $lpp_benefit_1_content; ?></textarea>
					        </p>
							
						</div>
						<div class="benefit" id="lpp_benefit_right">
							<h3 class="lpp_h">
							    <input type='text' id='lpp_benefit_2_content_title' name='lpp_benefit_2_content_title' value='<?php echo $lpp_benefit_2_content_title; ?>' style='width:190px; height:30px; border:2px dashed black; text-align:left;' placeholder='Enter benefit title here.'/>
							</h3>
							<p class="lpp_p" id="benefit_text">
							    <textarea rows="4" cols="29" name='lpp_benefit_2_content' id='lpp_benefit_2_content' value='<?php echo $lpp_benefit_2_content; ?>' style='height:200px; border:2px dashed black; text-align:left;' placeholder='Enter your  benefit here.'><?php echo $lpp_benefit_2_content; ?></textarea>
							</p>							
						</div>
						<div id='lpp_f_line'>
					        <h2 class='lpp_h'>
					          <input type='text' id='lpp_final_sub_h2' name='lpp_final_sub_h2' value='<?php echo $lpp_final_sub_h2; ?>' style='width:550px; height:50px; border:2px dashed black; text-align:center;' placeholder='Final Suporting sub header.'/>

					        </h2>
					      </div>
					      <div id='lpp_f_cta'>
					      	<h1>
					        <input type='text' id='lpp_final_cta' name='lpp_final_cta' value='<?php echo $lpp_final_cta; ?>' style='width:550px; height:50px; border:2px dashed black; text-align:center;' placeholder='Place your final Call To Action Text Here'/>
					        </h1>
					  </div>
						
					</div>
			<!--- lpp_section_3 ENDS HERE!  -->
			</div>
		</div>
	</body>
</html>