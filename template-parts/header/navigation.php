<?php

/**
 * Bootstrap 5 Nav Walker for WordPress Menus
 *
 * Outputs a WordPress menu compatible with Bootstrap 5 navbar markup.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Class SSC_Bootstrap_Nav_Walker
 */
class SSC_Bootstrap_Nav_Walker extends Walker_Nav_Menu
{

    /**
     * Starts the list before the elements are added.
     */
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent  = str_repeat("\t", $depth);
        $output .= "\n{$indent}<ul class=\"dropdown-menu\">\n";
    }

    /**
     * Starts the element output.
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $item    = $data_object;
        $indent  = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Add Bootstrap classes.
        $li_classes = array('nav-item');

        if (in_array('menu-item-has-children', $classes, true) && 0 === $depth) {
            $li_classes[] = 'dropdown';
        }

        if (in_array('current-menu-item', $classes, true)) {
            $li_classes[] = 'active';
        }

        $li_class = implode(' ', array_filter($li_classes));

        $output .= $indent . '<li class="' . esc_attr($li_class) . '">';

        // Link attributes.
        $atts = array(
            'title'  => ! empty($item->attr_title) ? $item->attr_title : '',
            'target' => ! empty($item->target) ? $item->target : '',
            'rel'    => ! empty($item->xfn) ? $item->xfn : '',
            'href'   => ! empty($item->url) ? $item->url : '',
        );

        if (in_array('menu-item-has-children', $classes, true) && 0 === $depth) {
            $atts['class']          = 'nav-link dropdown-toggle';
            $atts['role']           = 'button';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded']  = 'false';
        } elseif ($depth > 0) {
            $atts['class'] = 'dropdown-item';
        } else {
            $atts['class'] = 'nav-link';
        }

        if (in_array('current-menu-item', $classes, true)) {
            $atts['aria-current'] = 'page';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (! empty($value)) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $item_output  = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= (isset($args->link_before) ? $args->link_before : '') . $title . (isset($args->link_after) ? $args->link_after : '');
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Fallback menu if no menu is assigned.
 */
function ssc_fallback_menu()
{
    echo '<ul class="navbar-nav ms-auto align-items-lg-center">';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'seoservicecanada') . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('#about')) . '">' . esc_html__('About', 'seoservicecanada') . '</a></li>';
    // echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/contact/')) . '">' . esc_html__('Contact', 'seoservicecanada') . '</a></li>';
    echo '</ul>';
}
