
<style type='text/css'>

#lpp_header{
  text-align: center;
  width: 95%;
  border: 2px solid black;
  display: inline-block;
}
#lpp_center{
  width: 95%;
  border: 2px solid black;
  display: inline-block;
}
#lpp_center_left{
  width:45%;
  height:75%;
  float: left;
  text-align: center;

}
#lpp_center_left >img{
  margin-top: 10%;
  height:0%;

}

#lpp_center_right{
  width:50%;
  height:75%;
  float: right;
  text-align: center;

}
#lpp_text{
  margin-top: 10%;
  margin-right: 1%;
  color: #333333; 
  line-height: 1.5; 
  font-size: 1.125rem; 
  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}
.lpp_p{
  color: #333333; 
  line-height: 1.5; 
  font-size: 1.125rem; 
  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;

}

#lpp_feature{
  list-style-type:disc;
  text-align: left;
  margin-top: 4%;
  margin-left: 5%;

}
#lpp_cta1{
  margin-top: 7%;
  width: 70%;
  height: 5%;
  border:none;
  border-bottom: 9px solid #13846c;

  font-size: 1.6em;
  font-family:verdana;
  background: #1BBC9B;
  color: #fff;

}





#lpp_testimonial{
  width: 100%;
  border: 2px solid black;
  display: inline-block;
}
#testimonial_text{
  font-size: 1rem;
  margin-left: 5px;
}

#lpp_testimonial_left{
  width:100%;
  float: left;
}


#lpp_benefit_sect{
  width: 95%;
  border: 2px solid black;
  text-align: center;
  display: inline-block;
}

#lpp_benefit_1{
  width:30%;
  float: left;
  text-align: center;
  border: 1px solid black;
  margin-left:2%; 
  text-align: center;

}

#lpp_benefit_2{
  width:30%;
  float: left;
  text-align: center;
  border: 1px solid black;
  margin-left:2%; 
  text-align: center;

}

#lpp_benefit_3{
  width:30%;
  float: left;
  text-align: center;
  border: 1px solid black;
  margin-left:2%; 
  text-align: center;
}




#lpp_f_line,#lpp_f_cta{

  width: 95%;
  border: 2px solid black;
  display: inline-block;

}
#lpp_main_content{

  border: 2px dashed black;

}
.wp-editor-area{
  border: 2px dashed black;
}








    </style>



<body>

    <div id='lpp_header' class='lpp_h'>
      <h1><input type='text' id='lpp_main_h1' name='lpp_main_h1' value='<?php echo $lpp_main_h1; ?>' style='width:300px; height:50px; border:2px dashed black; text-align:center;' placeholder='Main Heading'/></h1>
      <h3> 
        <input type='text' id='lpp_sub_h2' name='lpp_sub_h2' value='<?php echo $lpp_sub_h2; ?>' style='width:500px; height:35px; border:2px dashed black; text-align:center;' placeholder='Suporting sub header and explanation.'/>
        </h3>
    </div>
    <div id='lpp_content'>
      <div id='lpp_center'>
        <div id='lpp_center_left'>
          <input id="image_location2" type="text" class="upload_image_button1"  name="lpp_add_img_1"value='<?php echo $lpp_add_img_1; ?>' style='font-size:14px; text-align:center;width:80%;height:45%;' placeholder='Featured image url'/>
          <input id="image_location2" type="button" class="upload_bg" data-id="1" value="Upload Image" />
          <img src='<?php echo $lpp_add_img_1 ;?>' style='height:40%;width:90%;' >
        </div>
        <div id='lpp_center_right'>
          
            <p id='lpp_text' class='lpp_p'>
            <?php 
            if(empty($lpp_main_content)){
          $lpp_main_content = "Insert an Image,text, shortcode, or embed a video.";
        }
          $settings = array('media_buttons'=> true,'lpp_main_content','textarea_rows' => 13);
            wp_editor($lpp_main_content,'lpp_main_content',$settings);

           ?>
            <div id="lpp_cta1">
              <input type='text' id='lpp_main_cta' name='lpp_main_cta' value='<?php echo $lpp_main_cta; ?>' style='width:230px; height:35px; border:2px dashed black; text-align:center;' placeholder='Call To Action Text'/>
            </div>
            <input type='url' id='lpp_cta_url' name='lpp_cta_url' value='<?php echo $lpp_cta_url; ?>' style='width:230px; height:35px; border:2px dashed black; text-align:center;' placeholder='Call To Action Target URl'/>
      </div>
      <div id="lpp_testimonial">
        <div id="lpp_testimonial_left">
          <p class="lpp_p" id="testimonial_text">
             <?php 
            if(empty($lpp_testimonial_left_content)){
          $lpp_testimonial_left_content = "Insert your testimonial here.";
        }
          $settings = array('media_buttons'=> true,'lpp_testimonial_left_content','textarea_rows' => 13);
            wp_editor($lpp_testimonial_left_content,'lpp_testimonial_left_content',$settings);
           ?>
           </p>
           <p style="font-size:11px;" style="text-align:center;">
             <input type='text' id='lpp_testimonial_left_content_author' name='lpp_testimonial_left_content_author' value='<?php echo $lpp_testimonial_left_content_author; ?>' style='width:280px; height:30px; border:2px dashed black; text-align:center;' placeholder='Enter testimonial author name here.'/>
           </p>

        </div>
        
      </div>
      <div id="lpp_benefit_sect">
        <div id="lpp_benefit_1">
          <?php 
            if(empty($lpp_benefit_1_content)){
          $lpp_benefit_1_content = "Insert your Benefit 1 here.";
        }
          $settings = array('media_buttons'=> true,'lpp_benefit_1_content','textarea_rows' => 9);
            wp_editor($lpp_benefit_1_content,'lpp_benefit_1_content',$settings);
           ?>
        </div>
        <div id="lpp_benefit_2">
          <?php 
            if(empty($lpp_benefit_2_content)){
          $lpp_benefit_2_content = "Insert your Benefit 2 here.";
        }
          $settings = array('media_buttons'=> true,'lpp_benefit_2_content','textarea_rows' => 9);
            wp_editor($lpp_benefit_2_content,'lpp_benefit_2_content',$settings);
           ?>
        </div>
        <div id="lpp_benefit_3">
          <?php 
            if(empty($lpp_benefit_3_content)){
          $lpp_benefit_3_content = "Insert your Benefit 3 here.";
        }
          $settings = array('media_buttons'=> true,'lpp_benefit_3_content','textarea_rows' => 9);
            wp_editor($lpp_benefit_3_content,'lpp_benefit_3_content',$settings);
           ?>
        </div>
      </div>
      <div id='lpp_f_line' style="text-align:center;">
        <h2 class='lpp_h'>
          <input type='text' id='lpp_final_sub_h2' name='lpp_final_sub_h2' value='<?php echo $lpp_final_sub_h2; ?>' style='width:550px; height:50px; border:2px dashed black; text-align:center;' placeholder='Final Suporting sub header.'/>

        </h2>
      </div>
      <div id='lpp_f_cta' style="text-align:center;"><h1>
        <input type='text' id='lpp_final_cta' name='lpp_final_cta' value='<?php echo $lpp_final_cta; ?>' style='width:550px; height:50px; border:2px dashed black; text-align:center;' placeholder='Place your final Call To Action Text Here'/>
      </h1></div>
    </div>
    </div>
  </body>