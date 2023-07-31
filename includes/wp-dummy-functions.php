<?php
/**
 * Add my new menu to the Admin Control Panel
 */
add_action( 'admin_menu', 'dum_add_admin_link' );

// Add a new top level menu link to the ACP
function dum_add_admin_link()
{
      add_menu_page(
        'WP Dummy',                  // Page title
        'WP Dummy',                  // Menu link
        'manage_options',            // Capability requirement
        'includes/dum-acp-page.php'  // File to display when clicking the link
    );
}
