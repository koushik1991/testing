<?php 
/*
Plugin Name: ZimmerBiomet_Sidebar Plugin
Plugin URI: http://Delgence.com
Description: A plugin meant only for Zimmer Biomet for Doctors Sign up template
Version: 1.0
Author: Pushpendu
Author URI: pushpendudelgence@gmail.com
License: GPLv2
*/

/**
 * Adds a meta box to the post editing screen
 */

/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'doctors_sign_up_template_setup' );
add_action( 'load-post-new.php', 'doctors_sign_up_template_setup' );

/* Meta box setup function. */
function doctors_sign_up_template_setup() {

	/* Add meta boxes on the 'add_meta_boxes' hook. */
add_action( 'add_meta_boxes', 'pm_ZimmerSidebar_meta' );
  add_action( 'save_post', 'save_sidebar_Zimmertemplate_meta');

}

function pm_ZimmerSidebar_meta() {
    add_meta_box( 'pm_zimmersidebar', 
    	__( 'Doctors Signup Template', 'pm-textdomain' ),
    	 'pm_zimmersidebarcallback', 
    	 'tribe_events',
    	 'side',
    	 'default'
    	 );
}


function pm_zimmersidebarcallback()
{
	// $post is already set, and contains an object: the WordPress post
    global $post;
$values = get_post_custom( $post->ID );
 $text1 = isset( $values['Aankomst'] ) ? $values['Aankomst'] : '';
  $text2 = isset( $values['Logies'] ) ? $values['Logies'] : '';
   $text3 = isset( $values['vertrek'] ) ? $values['vertrek'] : '';
   $text4 = isset( $values['prdname'] ) ? $values['prdname'] : '';
   $text5 = isset( $values['pdfprijs'] ) ? $values['pdfprijs'] : '';
$selected = isset( $values['pm_doctor_template_select'] ) ? esc_attr( $values['pm_doctor_template_select'][0] ) : "";
    // We'll use this nonce field later on when saving.
 wp_nonce_field( 'pm_doctor_template_nonce', 'meta_box_nonce' );
    ?>
<p>
        <label for="pm_doctor_template_select">Template: </label>
<select name="pm_doctor_template_select" id="pm_doctor_template_select">
    <option value="NoTemplate" <?php selected( $selected, 'NoTemplate' ); ?>>No Template</option>
			<option value="Template1" <?php selected( $selected, 'Template1' ); ?>>Template 1</option>
				<option value="Template2" <?php selected( $selected, 'Template2' ); ?>>Template 2</option>
 				
</select>
    </p>
    <p>
<label for="Aankomst">Aankomst:</label>
    <input type="text" name="Aankomst" id="Aankomst" value="<?php echo $text1[0]; ?>" class="widefat" />
</p>
 <p>
<label for="Logies">Logies:</label>
    <input type="text" name="Logies" id="Logies" value="<?php echo $text2[0]; ?>" class="widefat" />
</p>
 <p>
<label for="vertrek">Vertrek:</label>
    <input type="text" name="vertrek" id="vertrek" value="<?php echo $text3[0]; ?>" class="widefat"/>
</p>
 <p>
<label for="prdname">Product Name:</label>
    <input type="text" name="prdname" id="prdname" value="<?php echo $text4[0]; ?>" class="widefat"/>
</p>
 <p>
<label for="pdfprijs">Prijs:</label>
    <input type="text" name="pdfprijs" id="pdfprijs" value="<?php echo $text5[0]; ?>" class="widefat"/>
</p>
    <?php        
}
 
?>
<?php

function save_sidebar_Zimmertemplate_meta( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'pm_doctor_template_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
     
    // now we can actually save the data
    //$allowed = array( 
        //'a' => array( // on allow a tags
       //     'href' => array() // and those anchors can only have href attribute
       // )
    //);
     
    // Make sure your data is set before trying to save it
 
         
    if( isset( $_POST['pm_doctor_template_select'] ) )
        update_post_meta( $post_id, 'pm_doctor_template_select', esc_attr( $_POST['pm_doctor_template_select'] ) );
         
         if( isset( $_POST['Aankomst'] ) )
        update_post_meta( $post_id, 'Aankomst', wp_kses( $_POST['Aankomst'], $allowed ) );

    if( isset( $_POST['Logies'] ) )
        update_post_meta( $post_id, 'Logies', wp_kses( $_POST['Logies'], $allowed ) );
    if( isset( $_POST['vertrek'] ) )
        update_post_meta( $post_id, 'vertrek', wp_kses( $_POST['vertrek'], $allowed ) );
  if( isset( $_POST['prdname'] ) )
        update_post_meta( $post_id, 'prdname', wp_kses( $_POST['prdname'], $allowed ) );
     if( isset( $_POST['pdfprijs'] ) )
        update_post_meta( $post_id, 'pdfprijs', wp_kses( $_POST['pdfprijs'], $allowed ) );
  
}
?>