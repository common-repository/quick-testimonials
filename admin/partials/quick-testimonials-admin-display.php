<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://themeregion.com
 * @since      1.0.0
 *
 * @package    Quick_Testimonials
 * @subpackage Quick_Testimonials/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="tr-side-shortcode-generate-wrapper">
	<p>
        <?php
        _e( 'Copy and paste below shortcode into your posts or pages', 'quick-testimonials' );
		global $post;
		?>
    </p>
	<div class="qt-sc-code selectable" >[quick_testimonials <?php echo 'id="' . $post->ID . '"';
	?>]</div>
</div>
