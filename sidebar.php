<?php

/**
 * Sidebar Template
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

if (! is_active_sidebar('sidebar-blog')) {
    return;
}
?>

<div class="ssc-sidebar__inner">
    <?php dynamic_sidebar('sidebar-blog'); ?>
</div>