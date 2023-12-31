<?php
/**
 * Header/Footer Builder
 * Secondary Menu CSS Output
 * 
 * @package Botiga_Pro
 */

// @codingStandardsIgnoreStart WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

// Visibility
$css .= Botiga_Custom_CSS::get_responsive_css( 
    'secondary_menu_visibility', 
    'visible', 
    '.bhfb.bhfb-header .bhfb-builder-item.bhfb-component-secondary_menu, .bhfb-mobile_offcanvas .bhfb-builder-item.bhfb-component-secondary_menu', 
    'display',
    ''
);

// Text Color
$css .= Botiga_Custom_CSS::get_color_css( 'secondary_menu_color', '', '.bhfb .secondary-navigation a.botiga-dropdown-link' );
$css .= Botiga_Custom_CSS::get_fill_css( 'secondary_menu_color', '', '.bhfb .secondary-navigation a.botiga-dropdown-link + .dropdown-symbol svg' );

// Text Color Hover
$css .= Botiga_Custom_CSS::get_color_css( 'secondary_menu_color_hover', '', '.bhfb .secondary-navigation a.botiga-dropdown-link:hover' );
$css .= Botiga_Custom_CSS::get_fill_css( 'secondary_menu_color_hover', '', '.bhfb .secondary-navigation a.botiga-dropdown-link:hover + .dropdown-symbol svg' );

// Submenu Background
$css .= Botiga_Custom_CSS::get_background_color_css( 'secondary_menu_submenu_background', '', '.bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul, .bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul li.botiga-dropdown-li' );

// Submenu Text Color
$css .= Botiga_Custom_CSS::get_color_css( 'secondary_menu_submenu_color', '', '.bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul a' );
$css .= Botiga_Custom_CSS::get_fill_css( 'secondary_menu_submenu_color', '', '.bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul a + .dropdown-symbol svg' );

// Submenu Text Color Hover
$css .= Botiga_Custom_CSS::get_color_css( 'secondary_menu_submenu_color_hover', '', '.bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul a:hover' );
$css .= Botiga_Custom_CSS::get_fill_css( 'secondary_menu_submenu_color_hover', '', '.bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul a:hover + .dropdown-symbol svg' );

if( botiga_sticky_header_enabled() ) {
    // Sticky Header - Text Color
    $css .= Botiga_Custom_CSS::get_color_css( 'secondary_menu_sticky_color', '', '.sticky-header-active .bhfb .secondary-navigation a.botiga-dropdown-link' );
    $css .= Botiga_Custom_CSS::get_fill_css( 'secondary_menu_sticky_color', '', '.sticky-header-active .bhfb .secondary-navigation a.botiga-dropdown-link + .dropdown-symbol svg' );
    
    // Sticky Header - Text Color Hover
    $css .= Botiga_Custom_CSS::get_color_css( 'secondary_menu_sticky_color_hover', '', '.sticky-header-active .bhfb .secondary-navigation a.botiga-dropdown-link:hover' );
    $css .= Botiga_Custom_CSS::get_fill_css( 'secondary_menu_sticky_color_hover', '', '.sticky-header-active .bhfb .secondary-navigation a.botiga-dropdown-link:hover + .dropdown-symbol svg' );
    
    // Sticky Header - Submenu Background
    $css .= Botiga_Custom_CSS::get_background_color_css( 'secondary_menu_sticky_submenu_background', '', '.sticky-header-active .bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul, .sticky-header-active .bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul li.botiga-dropdown-li' );
    
    // Sticky Header - Submenu Text Color
    $css .= Botiga_Custom_CSS::get_color_css( 'secondary_menu_sticky_submenu_color', '', '.sticky-header-active .bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul a' );
    $css .= Botiga_Custom_CSS::get_fill_css( 'secondary_menu_sticky_submenu_color', '', '.sticky-header-active .bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul a + .dropdown-symbol svg' );
    
    // Sticky Header - Submenu Text Color Hover
    $css .= Botiga_Custom_CSS::get_color_css( 'secondary_menu_sticky_submenu_color_hover', '', '.sticky-header-active .bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul a:hover' );
    $css .= Botiga_Custom_CSS::get_fill_css( 'secondary_menu_sticky_submenu_color_hover', '', '.sticky-header-active .bhfb .secondary-navigation .sub-menu.botiga-dropdown-ul a:hover + .dropdown-symbol svg' );
}

// Padding
$css .= Botiga_Custom_CSS::get_responsive_dimensions_css( 
    'secondary_menu_padding',
    array(
        'desktop' => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'tablet'  => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'mobile'  => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
    ), 
    '.bhfb .secondary-navigation', 
    'padding'
);

// Margin
$css .= Botiga_Custom_CSS::get_responsive_dimensions_css( 
    'secondary_menu_margin',
    array(
        'desktop' => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'tablet'  => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'mobile'  => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
    ), 
    '.bhfb .secondary-navigation', 
    'margin',
    true
);

// @codingStandardsIgnoreEnd WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound