<?php

    require_once(dirname( __FILE__ ) . '/class-tgm-plugin-activation.php');
    add_action( 'tgmpa_register', 'jbcarroll_register_required_plugins' );
    
    function jbcarroll_register_required_plugins() {
        /*
         * Array of plugin arrays. Required keys are name and slug.
         * If the source is NOT from the .org repo, then source is also required.
         */
        $plugins = array(
            array(
                'name'      => 'Advanced Custom Fields',
                'slug'      => 'advanced-custom-fields',
                'source'    => dirname( __FILE__ ) . '/resources/advanced-custom-fields.5.9.5.zip', // The plugin source.
                'required'  => true,
            ),
            array(
                'name'               => 'Advanced Custom Fields Pro', // The plugin name.
                'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
                'source'             => dirname( __FILE__ ) . '/resources/advanced-custom-fields-pro.zip', // The plugin source.
                'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            ),
        );
        tgmpa( $plugins, $config );
    };
?>