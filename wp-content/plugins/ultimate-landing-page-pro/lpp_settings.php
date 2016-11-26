<?php 





//////////// META BOXES TYPE STARTS HERE!!!!! //////////////////
                                                        ///////
                                                        //////
                                                        /////
//////////// META BOXES TYPE STARTS HERE!!!!! //////////////



add_action('add_meta_boxes','lpp_main_ui_metabox');

  function lpp_main_ui_metabox(){

    add_meta_box('lpp_select_landingpage_template','Select Landing Page Template','lpp_landing_page_template_select','landingpage_f','normal','high');


    add_meta_box('lpp_main_ui','Edit Landing page Template','lpp_landing_page_template_edit','landingpage_f','normal','low');
    
    add_meta_box('lpp_main_settings' ,'Landing Page Settings','lpp_main_front_end_settings', 'landingpage_f','normal','low');
    
    add_meta_box('lpp_custom_css' ,'Custom  CSS/JS','lpp_custom_css', 'landingpage_f','normal','low');
   
    add_meta_box('lpp_mail_chimp' ,'Integrations','lpp_mail_chimp', 'landingpage_f','normal','low');

    add_meta_box('lpp_seo_set' ,'Landing Page SEO','lpp_seo_set', 'landingpage_f','normal','low');

  }
 

//////////// META BOX 1  STARTS HERE!!!!! //////////////

  function lpp_landing_page_template_edit($post){
    // $post is already set, and contains an object: the WordPress post
    global $post;
 //////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //START                                 //
                                                                      //  
                                                                     //
    ///////  MAIN SETTINGS var assign BOX Starts HERE!!! /////////////

    $lpp_fe_template_select = get_post_meta($post->ID,'lpp_fe_template_select',true);

    $lpp_main_h1 = get_post_meta($post->ID,'lpp_main_h1',true);
    $lpp_sub_h2 = get_post_meta($post->ID,'lpp_sub_h2',true);
    $lpp_main_content = get_post_meta($post->ID,'lpp_main_content',true);
    $lpp_main_cta = get_post_meta($post->ID,'lpp_main_cta',true);
    $lpp_feature_1 = get_post_meta($post->ID,'lpp_feature_1',true);
    $lpp_feature_2 = get_post_meta($post->ID,'lpp_feature_2',true);
    $lpp_feature_3 = get_post_meta($post->ID,'lpp_feature_3',true);
    $lpp_feature_4 = get_post_meta($post->ID,'lpp_feature_4',true);
    $lpp_testimonial_left_content = get_post_meta($post->ID,'lpp_testimonial_left_content',true);
    $lpp_testimonial_left_content_author = get_post_meta($post->ID,'lpp_testimonial_left_content_author',true);
    $lpp_testimonial_right_content = get_post_meta($post->ID,'lpp_testimonial_right_content',true);
    $lpp_testimonial_right_content_author = get_post_meta($post->ID,'lpp_testimonial_right_content_author',true);
    $lpp_benefit_1_content_title = get_post_meta($post->ID,'lpp_benefit_1_content_title',true);
    $lpp_benefit_1_content = get_post_meta($post->ID,'lpp_benefit_1_content',true);
    $lpp_benefit_2_content_title = get_post_meta($post->ID,'lpp_benefit_2_content_title',true);
    $lpp_benefit_2_content = get_post_meta($post->ID,'lpp_benefit_2_content',true);
    $lpp_benefit_3_content_title = get_post_meta($post->ID,'lpp_benefit_3_content_title',true);
    $lpp_benefit_3_content = get_post_meta($post->ID,'lpp_benefit_3_content',true);
    $lpp_benefit_4_content_title = get_post_meta($post->ID,'lpp_benefit_4_content_title',true);
    $lpp_benefit_4_content = get_post_meta($post->ID,'lpp_benefit_4_content',true);
    $lpp_final_sub_h2 = get_post_meta($post->ID,'lpp_final_sub_h2',true);
    $lpp_final_cta = get_post_meta($post->ID,'lpp_final_cta',true);

    $lpp_cta_url = get_post_meta($post->ID,'lpp_cta_url',true);

    $lpp_new_empty_template = get_post_meta($post->ID,'lpp_new_empty_template',true);





    //Additional Settings

    $lpp_benefit_sect_title = get_post_meta( $post->ID,'lpp_benefit_sect_title',true);
    $lpp_benefit_sect_sub_title = get_post_meta( $post->ID,'lpp_benefit_sect_sub_title',true);
    $lpp_form_h2 = get_post_meta( $post->ID,'lpp_form_h2',true);
    $lpp_form_sub_h2 = get_post_meta( $post->ID,'lpp_form_sub_h2',true);

    $lpp_about_us = get_post_meta( $post->ID,'lpp_about_us',true);
    $lpp_contact_us = get_post_meta( $post->ID,'lpp_contact_us',true);

    $lpp_aboutus_h1 = get_post_meta($post->ID,'lpp_aboutus_h1',true);
    $lpp_aboutus_content = get_post_meta($post->ID,'lpp_aboutus_content',true);
    $lpp_featured_img_url = get_post_meta($post->ID,'lpp_featured_img_url',true);
    $lpp_logo_url = get_post_meta($post->ID,'lpp_logo_url',true);
    $lpp_favicon = get_post_meta($post->ID,'lpp_favicon',true);



    $lpp_add_img_1 = get_post_meta($post->ID,'lpp_add_img_1',true);
    $lpp_add_img_2 = get_post_meta($post->ID,'lpp_add_img_2',true);
    $lpp_add_img_3 = get_post_meta($post->ID,'lpp_add_img_3',true);
    $lpp_add_img_5 = get_post_meta($post->ID,'lpp_add_img_5',true);

    $lpp_add_ftrimg_1 = get_post_meta($post->ID,'lpp_add_ftrimg_1',true);
    $lpp_add_ftrimg_2 = get_post_meta($post->ID,'lpp_add_ftrimg_2',true);
    $lpp_add_ftrimg_3 = get_post_meta($post->ID,'lpp_add_ftrimg_3',true);
    $lpp_add_ftrimg_4 = get_post_meta($post->ID,'lpp_add_ftrimg_4',true);

    $lpp_select_data_save_method =  get_post_meta($post->ID,'lpp_select_data_save_method',true);
    $lpp_select_form_type =  get_post_meta($post->ID,'lpp_select_form_type',true);
    $lpp_form_type_custom_code =  get_post_meta($post->ID,'lpp_form_type_custom_code',true);

    $lpp_twitter_username = get_post_meta($post->ID,'lpp_twitter_username',true);
    $lpp_fb_username = get_post_meta($post->ID,'lpp_fb_username',true);







///////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //ENDS                                  //
                                                                      //  
                                                                     //
///////////  MAIN SETTINGS var assign BOX ENDS HERE!!! ///////////////
     



///////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //Starts                                //
                                                                      //  
                                                                     //
////////  MAIN SETTINGS Input field BOX Starts HERE!!! ///////////////





    // I will use this nonce field later on when saving.
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );


    $sm_action_url = admin_url('admin-ajax.php?action=lpp_landingpage_db');
    $sm_action_url_mc = admin_url('admin-ajax.php?action=lpp_landingpage_mailchimp');
    $sm_action_url_gr = admin_url('admin-ajax.php?action=lpp_landingpage_getresponse');
    
    $lpp_mailchimp_method = '<form id="lpp_form" action='.$sm_action_url_mc.' method="post" class="lpp_form">';
    $lpp_getresponse_method = '<form id="lpp_form" action='.$sm_action_url_gr.' method="post" class="lpp_form">';
    $lpp_database_method  = '<form id="lpp_form" action='.$sm_action_url.' method="post" class="lpp_form" >';

    ?>
    <p>
      <label for='save_method'>Where To Save Subscribers Data :</label>
      <select name='lpp_select_data_save_method' required>
      <option value='<?php echo $lpp_database_method ?>' <?php selected($lpp_database_method , $lpp_select_data_save_method); ?> >Database</option>
      <option value='<?php echo $lpp_mailchimp_method ?>' <?php selected($lpp_mailchimp_method, $lpp_select_data_save_method); ?> >MailChimp</option>
      <option value='<?php echo $lpp_getresponse_method ?>' <?php selected($lpp_getresponse_method, $lpp_select_data_save_method); ?> >GetResponse</option>
    </select>
    </p>
<?php

$lpp_template_select = get_post_meta($post->ID,'lpp_template_select',true);
if (!empty($lpp_template_select)) {
    include ('options_'.$lpp_template_select);
  }




?>
<style type="text/css">
#wpfooter{
  display: none;
}
  #submit{
    width: 200px;
    height: 40px;
    margin-top: 8px;
    margin-right: 50px;
    font-size: 19px;

  }
  #lpp_main_settings,#lpp_select_landingpage_template,#lpp_custom_css,#lpp_main_ui{
    border-top:5px solid #75c5ff;
  }

</style>
<div style='width:95%;margin-left:2.5%; text-align:center; background:#e3e3e3;height:60px;border-left:5px solid #a7d142;margin-top:50px;'>
 <?php submit_button('Update');?>
</div>

<?php


  }


  /////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //ENDS                                  //
                                                                      //  
                                                                     //
///////////  MAIN SETTINGS input fields BOX ENDS HERE!!! /////////////
     






///////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //Starts                                //
                                                                      //  
                                                                     //
////////  MAIN SETTINGS Saving CODE BOX Starts HERE!!! ///////////////



  add_action('save_post','lpp_save_meta');

  function lpp_save_meta($post_id){
    
     // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
     
    // now we can actually save the data

    $default_attribs = array(
            'id' => array(),
            'class' => array(),
            'title' => array(),
            'style' => array(),
            'data' => array(),
            'data-mce-id' => array(),
            'data-mce-style' => array(),
            'data-mce-bogus' => array(),
        );

        $allowed = array(
            'div'           => $default_attribs,
            'span'          => $default_attribs,
            'p'             => $default_attribs,
            'a'             => array_merge( $default_attribs, array(
                'href' => array(),
                'target' => array('_blank', '_top'),
            ) ),
            'u'             =>  $default_attribs,
            'i'             =>  $default_attribs,
            'q'             =>  $default_attribs,
            'b'             =>  $default_attribs,
            'ul'            => $default_attribs,
            'ol'            => $default_attribs,
            'li'            => $default_attribs,
            'br'            => $default_attribs,
            'hr'            => $default_attribs,
            'strong'        => $default_attribs,
            'blockquote'    => $default_attribs,
            'del'           => $default_attribs,
            'strike'        => $default_attribs,
            'em'            => $default_attribs,
            'code'          => $default_attribs,
        );
     
    // Make sure your data is set before trying to save it
    if( isset( $_POST['lpp_fe_template_select'] ) )
        update_post_meta( $post_id, 'lpp_fe_template_select',$_POST['lpp_fe_template_select']);
         
    if( isset( $_POST['lpp_template_select'] ) )
        update_post_meta( $post_id, 'lpp_template_select', $_POST['lpp_template_select']);
         
    // This is purely my personal preference for saving check-boxes
    $chk = isset( $_POST['my_meta_box_check'] ) && $_POST['my_meta_box_select'] ? 'on' : 'off';
    update_post_meta( $post_id, 'my_meta_box_check', $chk );


// Starts Here ****** Stars ********* )))))) () Moon **********

    if( isset( $_POST['lpp_main_h1'] ) )
        update_post_meta( $post_id, 'lpp_main_h1', wp_kses( $_POST['lpp_main_h1'], $allowed ) );

    if( isset( $_POST['lpp_sub_h2'] ) )
        update_post_meta( $post_id, 'lpp_sub_h2', wp_kses( $_POST['lpp_sub_h2'], $allowed ) );

    if( isset( $_POST['lpp_main_content'] ) )
        update_post_meta( $post_id, 'lpp_main_content', $_POST['lpp_main_content']);

      if( isset( $_POST['lpp_feature_1'] ) )
        update_post_meta( $post_id, 'lpp_feature_1', wp_kses( $_POST['lpp_feature_1'], $allowed ) );

      if( isset( $_POST['lpp_feature_2'] ) )
        update_post_meta( $post_id, 'lpp_feature_2', wp_kses( $_POST['lpp_feature_2'], $allowed ) );

      if( isset( $_POST['lpp_feature_3'] ) )
        update_post_meta( $post_id, 'lpp_feature_3', wp_kses( $_POST['lpp_feature_3'], $allowed ) );

      if( isset( $_POST['lpp_feature_4'] ) )
        update_post_meta( $post_id, 'lpp_feature_4', wp_kses( $_POST['lpp_feature_4'], $allowed ) );

    if( isset( $_POST['lpp_main_cta'] ) )
        update_post_meta( $post_id, 'lpp_main_cta', wp_kses( $_POST['lpp_main_cta'], $allowed ) );

      if( isset( $_POST['lpp_testimonial_left_content'] ) )
        update_post_meta( $post_id, 'lpp_testimonial_left_content', wp_kses( $_POST['lpp_testimonial_left_content'], $allowed ) );

      if( isset( $_POST['lpp_testimonial_left_content_author'] ) )
        update_post_meta( $post_id, 'lpp_testimonial_left_content_author', wp_kses( $_POST['lpp_testimonial_left_content_author'], $allowed ) );


    if( isset( $_POST['lpp_testimonial_right_content'] ) )
        update_post_meta( $post_id, 'lpp_testimonial_right_content', wp_kses( $_POST['lpp_testimonial_right_content'], $allowed ) );

      if( isset( $_POST['lpp_testimonial_right_content_author'] ) )
        update_post_meta( $post_id, 'lpp_testimonial_right_content_author', wp_kses( $_POST['lpp_testimonial_right_content_author'], $allowed ) );

      if( isset( $_POST['lpp_benefit_1_content_title'] ) )
        update_post_meta( $post_id, 'lpp_benefit_1_content_title', wp_kses( $_POST['lpp_benefit_1_content_title'], $allowed ) );

    if( isset( $_POST['lpp_benefit_1_content'] ) )
        update_post_meta( $post_id, 'lpp_benefit_1_content', $_POST['lpp_benefit_1_content']);

      if( isset( $_POST['lpp_benefit_2_content_title'] ) )
        update_post_meta( $post_id, 'lpp_benefit_2_content_title', wp_kses( $_POST['lpp_benefit_2_content_title'], $allowed ) );

    if( isset( $_POST['lpp_benefit_2_content'] ) )
        update_post_meta( $post_id, 'lpp_benefit_2_content', $_POST['lpp_benefit_2_content'] );

      if( isset( $_POST['lpp_benefit_3_content_title'] ) )
        update_post_meta( $post_id, 'lpp_benefit_3_content_title', wp_kses( $_POST['lpp_benefit_3_content_title'], $allowed ) );

    if( isset( $_POST['lpp_benefit_3_content'] ) )
        update_post_meta( $post_id, 'lpp_benefit_3_content',$_POST['lpp_benefit_3_content'] );

      if( isset( $_POST['lpp_benefit_4_content_title'] ) )
        update_post_meta( $post_id, 'lpp_benefit_4_content_title', wp_kses( $_POST['lpp_benefit_4_content_title'], $allowed ) );

    if( isset( $_POST['lpp_benefit_4_content'] ) )
        update_post_meta( $post_id, 'lpp_benefit_4_content', $_POST['lpp_benefit_4_content'] );

    if( isset( $_POST['lpp_final_sub_h2'] ) )
        update_post_meta( $post_id, 'lpp_final_sub_h2', wp_kses( $_POST['lpp_final_sub_h2'], $allowed ) );

    if( isset( $_POST['lpp_final_cta'] ) )
        update_post_meta( $post_id, 'lpp_final_cta', wp_kses( $_POST['lpp_final_cta'], $allowed ) );

      if( isset( $_POST['lpp_cta_url'] ) )
        update_post_meta( $post_id, 'lpp_cta_url', wp_kses( $_POST['lpp_cta_url'], $allowed ) );


      // ////////////////// Additional SETTINGS /////////////////////////// ///// ////

      if( isset( $_POST['lpp_benefit_sect_title'] ) )
        update_post_meta( $post_id, 'lpp_benefit_sect_title', wp_kses( $_POST['lpp_benefit_sect_title'], $allowed ) );

      if( isset( $_POST['lpp_benefit_sect_sub_title'] ) )
        update_post_meta( $post_id, 'lpp_benefit_sect_sub_title', wp_kses( $_POST['lpp_benefit_sect_sub_title'], $allowed ) );

      if( isset( $_POST['lpp_form_h2'] ) )
        update_post_meta( $post_id, 'lpp_form_h2', wp_kses( $_POST['lpp_form_h2'], $allowed ) );

      if( isset( $_POST['lpp_form_sub_h2'] ) )
        update_post_meta( $post_id, 'lpp_form_sub_h2', wp_kses( $_POST['lpp_form_sub_h2'], $allowed ) );

      if( isset( $_POST['lpp_aboutus_h1'] ) )
        update_post_meta( $post_id, 'lpp_aboutus_h1', wp_kses( $_POST['lpp_aboutus_h1'], $allowed ) );

      if( isset( $_POST['lpp_aboutus_content'] ) )
        update_post_meta( $post_id, 'lpp_aboutus_content', wp_kses( $_POST['lpp_aboutus_content'], $allowed ) );

      if( isset( $_POST['lpp_featured_img_url'] ) )
        update_post_meta( $post_id, 'lpp_featured_img_url', $_POST['lpp_featured_img_url']);

      if( isset( $_POST['lpp_favicon'] ) )
        update_post_meta( $post_id, 'lpp_favicon', wp_kses( $_POST['lpp_favicon'], $allowed ) );

      if( isset( $_POST['lpp_mailchimp_apikey'] ) )
        update_post_meta( $post_id, 'lpp_mailchimp_apikey',$_POST['lpp_mailchimp_apikey']);

      if( isset( $_POST['lpp_mailchimp_listid'] ) )
        update_post_meta( $post_id, 'lpp_mailchimp_listid',$_POST['lpp_mailchimp_listid']);

      if( isset( $_POST['lpp_getresponse_api_key'] ) )
        update_post_meta( $post_id, 'lpp_getresponse_api_key',$_POST['lpp_getresponse_api_key']);

      if( isset( $_POST['lpp_getresponse_campaign_id'] ) )
        update_post_meta( $post_id, 'lpp_getresponse_campaign_id',$_POST['lpp_getresponse_campaign_id']);

      if( isset( $_POST['lpp_custom_styling'] ) )
        update_post_meta( $post_id, 'lpp_custom_styling',$_POST['lpp_custom_styling']);

      if( isset( $_POST['lpp_custom_js'] ) )
        update_post_meta( $post_id, 'lpp_custom_js',$_POST['lpp_custom_js']);

      if( isset( $_POST['lpp_about_us'] ) )
        update_post_meta( $post_id, 'lpp_about_us',$_POST['lpp_about_us']);

      if( isset( $_POST['lpp_contact_us'] ) )
        update_post_meta( $post_id, 'lpp_contact_us',$_POST['lpp_contact_us']);









// ////////////////// GENERAL SETTINGS /////////////////////////// ///// ////

      // ////////////////// Background Color Save SETTINGS /////////////////////////// ///// ////

    if( isset( $_POST['lpp_body_bg'] ) )
        update_post_meta( $post_id, 'lpp_body_bg', wp_kses( $_POST['lpp_body_bg'], $allowed ) );

      if( isset( $_POST['lpp_content_bg'] ) )
        update_post_meta( $post_id, 'lpp_content_bg', wp_kses( $_POST['lpp_content_bg'], $allowed ) );

      if( isset( $_POST['lpp_header_bg'] ) )
        update_post_meta( $post_id, 'lpp_header_bg', wp_kses( $_POST['lpp_header_bg'], $allowed ) );

      if( isset( $_POST['lpp_center_bg'] ) )
        update_post_meta( $post_id, 'lpp_center_bg', wp_kses( $_POST['lpp_center_bg'], $allowed ) );

      if( isset( $_POST['lpp_testimonial_bg'] ) )
        update_post_meta( $post_id, 'lpp_testimonial_bg', wp_kses( $_POST['lpp_testimonial_bg'], $allowed ) );

      if( isset( $_POST['lpp_benefit_bg'] ) )
        update_post_meta( $post_id, 'lpp_benefit_bg', wp_kses( $_POST['lpp_benefit_bg'], $allowed ) );

      if( isset( $_POST['lpp_f_header_bg'] ) )
        update_post_meta( $post_id, 'lpp_f_header_bg', wp_kses( $_POST['lpp_f_header_bg'], $allowed ) );

      if( isset( $_POST['lpp_cta_bg'] ) )
        update_post_meta( $post_id, 'lpp_cta_bg', wp_kses( $_POST['lpp_cta_bg'], $allowed ) );

      if( isset( $_POST['lpp_form_bg'] ) )
        update_post_meta( $post_id, 'lpp_form_bg', wp_kses( $_POST['lpp_form_bg'], $allowed ) );

      // ////////////////// Text Color Save SETTINGS /////////////////////////// ///// ////

      if( isset( $_POST['lpp_h1_c'] ) )
        update_post_meta( $post_id, 'lpp_h1_c', wp_kses( $_POST['lpp_h1_c'], $allowed ) );

      if( isset( $_POST['lpp_h2_c'] ) )
        update_post_meta( $post_id, 'lpp_h2_c', wp_kses( $_POST['lpp_h2_c'], $allowed ) );

      if( isset( $_POST['lpp_content_c'] ) )
        update_post_meta( $post_id, 'lpp_content_c', wp_kses( $_POST['lpp_content_c'], $allowed ) );

      if( isset( $_POST['lpp_testimonial_c'] ) )
        update_post_meta( $post_id, 'lpp_testimonial_c', wp_kses( $_POST['lpp_testimonial_c'], $allowed ) );

      if( isset( $_POST['lpp_benefit_h2_c'] ) )
        update_post_meta( $post_id, 'lpp_benefit_h2_c', wp_kses( $_POST['lpp_benefit_h2_c'], $allowed ) );

      if( isset( $_POST['lpp_benefit_c'] ) )
        update_post_meta( $post_id, 'lpp_benefit_c', wp_kses( $_POST['lpp_benefit_c'], $allowed ) );

      if( isset( $_POST['lpp_f_h2_c'] ) )
        update_post_meta( $post_id, 'lpp_f_h2_c', wp_kses( $_POST['lpp_f_h2_c'], $allowed ) );

      if( isset( $_POST['lpp_cta_c'] ) )
        update_post_meta( $post_id, 'lpp_cta_c', wp_kses( $_POST['lpp_cta_c'], $allowed ) );


      if( isset( $_POST['lpp_add_img_1'] ) )
        update_post_meta( $post_id, 'lpp_add_img_1',  $_POST['lpp_add_img_1']);

      if( isset( $_POST['lpp_add_img_2'] ) )
        update_post_meta( $post_id, 'lpp_add_img_2',  $_POST['lpp_add_img_2']);

      if( isset( $_POST['lpp_add_img_3'] ) )
        update_post_meta( $post_id, 'lpp_add_img_3',  $_POST['lpp_add_img_3']);

      if( isset( $_POST['lpp_logo_url'] ) )
        update_post_meta( $post_id, 'lpp_logo_url',  $_POST['lpp_logo_url']);

      if( isset( $_POST['lpp_add_ftrimg_1'] ) )
        update_post_meta( $post_id, 'lpp_add_ftrimg_1',  $_POST['lpp_add_ftrimg_1']);

      if( isset( $_POST['lpp_add_ftrimg_2'] ) )
        update_post_meta( $post_id, 'lpp_add_ftrimg_2',  $_POST['lpp_add_ftrimg_2']);

      if( isset( $_POST['lpp_add_ftrimg_3'] ) )
        update_post_meta( $post_id, 'lpp_add_ftrimg_3',  $_POST['lpp_add_ftrimg_3']);

      if( isset( $_POST['lpp_add_ftrimg_4'] ) )
        update_post_meta( $post_id, 'lpp_add_ftrimg_4',  $_POST['lpp_add_ftrimg_4']);


      if( isset( $_POST['lpp_select_data_save_method'] ) )
        update_post_meta( $post_id, 'lpp_select_data_save_method',  $_POST['lpp_select_data_save_method']);

      if( isset( $_POST['lpp_select_form_type'] ) )
        update_post_meta( $post_id, 'lpp_select_form_type',  $_POST['lpp_select_form_type']);

      if( isset( $_POST['lpp_form_type_custom_code'] ) )
        update_post_meta( $post_id, 'lpp_form_type_custom_code',  $_POST['lpp_form_type_custom_code']);
      

       if( isset( $_POST['lpp_new_empty_template'] ) )
        update_post_meta( $post_id, 'lpp_new_empty_template',  $_POST['lpp_new_empty_template']);




      if( isset( $_POST['lpp_seo_title'] ) )
        update_post_meta( $post_id, 'lpp_seo_title', wp_kses( $_POST['lpp_seo_title'], $allowed ) );

      if( isset( $_POST['lpp_seo_keywords'] ) )
        update_post_meta( $post_id, 'lpp_seo_keywords', wp_kses( $_POST['lpp_seo_keywords'], $allowed ) );

      if( isset( $_POST['lpp_seo_meta_description'] ) )
        update_post_meta( $post_id, 'lpp_seo_meta_description', wp_kses( $_POST['lpp_seo_meta_description'], $allowed ) );

      if( isset( $_POST['lpp_twitter_username'] ) )
        update_post_meta( $post_id, 'lpp_twitter_username', wp_kses( $_POST['lpp_twitter_username'], $allowed ) );

      if( isset( $_POST['lpp_fb_username'] ) )
        update_post_meta( $post_id, 'lpp_fb_username', wp_kses( $_POST['lpp_fb_username'], $allowed ) );


      if( isset( $_POST['lpp_headings_font'] ) )
        update_post_meta( $post_id, 'lpp_headings_font', wp_kses( $_POST['lpp_headings_font'], $allowed ) );

      if( isset( $_POST['lpp_paragraph_font'] ) )
        update_post_meta( $post_id, 'lpp_paragraph_font', wp_kses( $_POST['lpp_paragraph_font'], $allowed ) );

      if( isset( $_POST['lpp_input_font'] ) )
        update_post_meta( $post_id, 'lpp_input_font', wp_kses( $_POST['lpp_input_font'], $allowed ) );

      if( isset( $_POST['lpp_date_countdown'] ) )
        update_post_meta( $post_id, 'lpp_date_countdown', wp_kses( $_POST['lpp_date_countdown'], $allowed ) );



  }











  ///////////////Includes////////////////////////

include 'lpp_basic_settings.php';

include 'select_template.php';

include 'lpp_custom_scripts.php';

include 'lpp_mail_chimp_int.php';

include 'lpp_seo.php';

//include 'config.inc.php';




  //////////// META BOXES TYPE ENDS HERE    !!!!! //////////////


















?>