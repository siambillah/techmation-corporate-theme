<?php

// ৫. এসইও মেটা বক্স (সঠিক পজিশনে)
function techmation_add_seo_box() {
    add_meta_box(
        'techmation_seo_id',
        'Techmation SEO Settings',
        'techmation_seo_callback',
        array('post', 'page'),
        'side', // 'normal' এর বদলে 'side' দেওয়া হয়েছে, যাতে ডানে দেখায়
        'high'
    );
}
add_action( 'add_meta_boxes', 'techmation_add_seo_box' );

function techmation_seo_callback( $post ) {
    $seo_title = get_post_meta( $post->ID, '_techmation_seo_title', true );
    $seo_desc  = get_post_meta( $post->ID, '_techmation_seo_desc', true );
    ?>
    <div style="padding: 10px;">
        <label for="techmation_seo_title" style="font-weight:bold; display:block; margin-bottom: 5px;">SEO Title</label>
        <input type="text" name="techmation_seo_title" id="techmation_seo_title" value="<?php echo esc_attr( $seo_title ); ?>" style="width: 100%; margin-bottom: 10px;">
        
        <label for="techmation_seo_desc" style="font-weight:bold; display:block; margin-bottom: 5px;">Description</label>
        <textarea name="techmation_seo_desc" id="techmation_seo_desc" style="width: 100%; height: 60px;"><?php echo esc_textarea( $seo_desc ); ?></textarea>
    </div>
    <?php
}

function techmation_save_seo_data( $post_id ) {
    if ( isset( $_POST['techmation_seo_title'] ) ) {
        update_post_meta( $post_id, '_techmation_seo_title', sanitize_text_field( $_POST['techmation_seo_title'] ) );
    }
    if ( isset( $_POST['techmation_seo_desc'] ) ) {
        update_post_meta( $post_id, '_techmation_seo_desc', sanitize_textarea_field( $_POST['techmation_seo_desc'] ) );
    }
}
add_action( 'save_post', 'techmation_save_seo_data' );