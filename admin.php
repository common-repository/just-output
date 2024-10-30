<?php

defined( 'ABSPATH' ) || exit;

function just_output_add_quicktag() {

    global $hook_suffix;

    if ( ( 'post.php' == $hook_suffix || 'post-new.php' == $hook_suffix ) && wp_script_is('quicktags')){
        ?>
        <script>
            　QTags.addButton('just_output','<?php echo esc_attr_x('Just Output', 'quicktag','just-output'); ?>','[jo]','[/jo]','j','<?php esc_attr_e('Disables the automatically inserted p and br tags.','just-output'); ?>');
        </script>
        <?php
    }

}

add_action('admin_print_footer_scripts', 'just_output_add_quicktag',20);


function just_output_textdomain_load() {
    load_plugin_textdomain( 'just-output', false, dirname( plugin_basename( JUST_OUTPUT_PLUGIN_FILE ) ) .'/languages/' );
}
add_action( 'plugins_loaded', 'just_output_textdomain_load');

