<! DOCTYPE html>
<html>
<head>

  <style type="text/css">


body{
  width:100%;
  text-align: center;

}
#lpp_content{
position: static;
width:100%;
left: 0;
right: 0;
top: 0;
bottom: 0;
margin: 0 auto;

}



@media screen {


#lpp_h1{
  color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;
}
#lpp_h2{
  color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
}

#lpp_main_content,#lpp_feature{
  color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
}

#lpp_cta{
  color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
}
#testimonial_text{
  color: <?php echo get_post_meta($post->ID,'lpp_testimonial_c',true); ?>;
}
#benefit_h2{
  color: <?php echo get_post_meta($post->ID,'lpp_benefit_h2_c',true); ?>;
}

#benefit_text{
  color: <?php echo get_post_meta($post->ID,'lpp_benefit_c',true); ?>;
}

#lpp_f_h2{
  color: <?php echo get_post_meta($post->ID,'lpp_f_h2_c',true); ?>;
}

#lpp_cta_{
  color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
}




/*****************************   BG AND Co *****************************\\






\*************************************************************************/



#lpp_content,body {
  background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
}

#lpp_center{
  background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;

}
#lpp_testimonial{
  background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
}

#lpp_benefit{
  background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;

}

#lpp_cta{
  background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
}

#lpp_f_line{
  background: <?php echo get_post_meta($post->ID,'lpp_benefit_bg',true); ?>;
}
#lpp_f_cta{
  background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
}

}
/*****************************   BG AND Co *****************************\\






\*************************************************************************/


@media screen and (min-width: 680px) {

  .lpp_h1{
  font-size: 36px; 
  font-size: 2rem;
  font-family: 'museo-slab', sans-serif;

}
.lpp_h2{
  font-size: 26px; 
  font-size: 1.6rem;
  font-family: 'museo-slab', sans-serif;

}

.lpp_p{
  line-height: 1.3; 
  font-size: 1.125rem; 
  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;

}


  #lpp_content {
    max-width: 100%;
  }
  #lpp_header {
    width: 100%;
  }
  
  #lpp_center_left, #lpp_center_right{
    float: left;
  }

  #lpp_center_left {
    width:100%;
    margin-right: 1.041667%;
  }

  #lpp_center_right {
    width: 100%;
  }
  





#lpp_center{
  width: 100%;
  height:90%;
  display: inline-block;
}
#lpp_center_left{
  width:45%;
  height:75%;
  text-align: center;

}
#lpp_center_left >img{
  margin-top: 10%;

}

#lpp_center_right{
  width:50%;
  height:75%;
  text-align: center;

}

#lpp_feature{
  list-style-type:disc;
  text-align: left;
  margin-top: 10%;
  margin-left: 5%;

}
#lpp_cta{
  margin-top: 7%;
  width: 70%;
  height: 15%;
  border:none;
  font-size: 2em;
  font-family:verdana;
}
#lpp_f_cta{
  font-size: 1em;
  font-family:verdana;
 text-align: center;
  width: 100%;


}




#lpp_testimonial{
  margin-top: -17px;
  width: 100%;
  height:15%;
  display: inline-block;
}

#lpp_benefit{
  margin-top: -18px;
  width: 100%;
  height:40%;
}

#lpp_testimonial_left{
  width:45%;
  height:75%;
  float: left;
}

#lpp_testimonial_right{
  width:50%;
  height:75%;
  float: right;
}



#lpp_benefit_1{
  width:30%;
  height:70%;
  float: left;
  text-align: center;
  margin-left:2%; 
  text-align: center;

}

#lpp_benefit_2{
  width:30%;
  height:70%;
  float: left;
  text-align: center;
  margin-left:2%; 
  text-align: center;

}

#lpp_benefit_3{
  width:30%;
  height:70%;
  float: left;
  text-align: center;
  margin-left:2%; 
  text-align: center;
}




#lpp_f_line,#lpp_f_cta{

  width: 100%;
  height:10%;
  display: inline-block;

}

}

@media screen and (max-width: 680px) {

  .lpp_h1{
  font-size: 36px; 
  font-size: 2rem;
  font-family: 'museo-slab', sans-serif;

}
.lpp_h2{
  font-size: 26px; 
  font-size: 1.6rem;
  font-family: 'museo-slab', sans-serif;

}

.lpp_p{
  line-height: 1.3; 
  font-size: 1.125rem; 
  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;

}


#lpp_center_left{
  width:100%;
  height:45%;
  text-align: center;

}

#lpp_center_right{
  width:100%;
  text-align: center;
  margin-top:-120px;

}

#lpp_testimonial{
  margin-top: -20px;
}

#lpp_benefit{
  margin-top: -34px;
}

#lpp_cta{
  width: 70%;
  border:none;
  font-size: 2em;
  font-family:verdana;
  text-align: center;
}
#lpp_f_cta{
  margin-top: -16px;

  font-size: 1em;
  font-family:verdana;
  text-align: center;
  width: 100%;


}
}

@media screen and (max-width: 480px) {

  .lpp_h1{
  font-size: 24px;  
  font-size: 1.5rem; 
  font-family: 'museo-slab', sans-serif;

}
.lpp_h2{
  font-size: 22px; 
  font-size: 1.1rem;
  font-family: 'museo-slab', sans-serif;

}

.lpp_p{
  line-height: 1.3; 
  font-size: 0.9rem; 
  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;

}



}




    </style>





  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('css/style_template_1.css',__FILE__); ?>">
  </head>
  <body>
    <div id="lpp_content">
      
        <div id="lpp_center">
          <h1 id="lpp_h1" class="lpp_h1"><?php echo  get_post_meta( $post->ID , 'lpp_main_h1' , true ); ?></h1>
        <h3 id="lpp_h2" class='lpp_h2'><?php echo  get_post_meta( $post->ID , 'lpp_sub_h2' , true ); ?></h3>
          <div id="lpp_center_left">
            <?php echo get_the_post_thumbnail( $post->ID, $size, $attr ); ?> 
          </div>
          <div id="lpp_center_right">
            <p id="lpp_main_content" style="margin-top:9%;" class="lpp_p">
              <?php echo  get_post_meta( $post->ID , 'lpp_main_content' , true ); ?>
            </p>

            <ul id="lpp_feature" class="lpp_p">
              <li><?php echo  get_post_meta( $post->ID , 'lpp_feature_1' , true ); ?></li>
              <li><?php echo  get_post_meta( $post->ID , 'lpp_feature_2' , true ); ?></li>
              <li><?php echo  get_post_meta( $post->ID , 'lpp_feature_3' , true ); ?></li>
              </ul>

             <a  href ="<?php echo  get_post_meta( $post->ID , 'lpp_cta_url' , true ); ?> "><button id="lpp_cta"><?php echo  get_post_meta( $post->ID , 'lpp_main_cta' , true ); ?></button></a>
            
          </div>
        </div>
        <hr>
        <div id="lpp_testimonial">
          <div id="lpp_testimonial_left">
            <p class="lpp_p" id="testimonial_text">
              <?php echo  get_post_meta( $post->ID , 'lpp_testimonial_left_content' , true ); ?>
             </p>
             <p style="font-size:11px;margin-left:10%;" id="testimonial_text">
               <?php echo  get_post_meta( $post->ID , 'lpp_testimonial_left_content_author' , true ); ?>
             </p>

          </div>
          <div id="lpp_testimonial_right" >
            <p class="lpp_p" id="testimonial_text" >
              <?php echo  get_post_meta( $post->ID , 'lpp_testimonial_right_content' , true ); ?>
            </p>
            <p style="font-size:11px; margin-left:10%;" id="testimonial_text">
              <?php echo  get_post_meta( $post->ID , 'lpp_testimonial_right_content_author' , true ); ?></p>
          </div>
          
        </div>
        <hr>
        <div id="lpp_benefit">
          <div id="lpp_benefit_1">
           <h2 class="lpp_h2" id="benefit_h2">
             <?php echo  get_post_meta( $post->ID , 'lpp_benefit_1_content_title' , true ); ?>
           </h2>
           <p class="lpp_p" id="benefit_text">
            <?php echo  get_post_meta( $post->ID , 'lpp_benefit_1_content' , true ); ?>
           </p>
            
          </div>
          <div id="lpp_benefit_2">
            <h2 class="lpp_h2" id="benefit_h2">
              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_2_content_title' , true ); ?>
            </h2>
            <p class="lpp_p" id="benefit_text">
              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_2_content' , true ); ?>
            </p>
          </div>
          <div id="lpp_benefit_3">
            <h2 class="lpp_h2" id="benefit_h2">
              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_3_content_title' , true ); ?>
            </h2>
            <p class="lpp_p" id="benefit_text">
              <?php echo  get_post_meta( $post->ID , 'lpp_benefit_3_content' , true ); ?>
            </p>
          </div>
        </div>
        <div id="lpp_f_line">
          <h2 id="lpp_f_h2" class="lpp_h2"><?php echo  get_post_meta( $post->ID , 'lpp_final_sub_h2' , true ); ?></h2>
        </div>
        <a  href ="<?php echo  get_post_meta( $post->ID , 'lpp_cta_url' , true ); ?> "><h1 id="lpp_cta_" class="lpp_h1"><button id="lpp_f_cta"><?php echo  get_post_meta( $post->ID , 'lpp_main_cta' , true ); ?></h1></button></a>

    </div>
  </body>
</html>