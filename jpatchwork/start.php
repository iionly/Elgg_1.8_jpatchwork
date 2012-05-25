<?php
/**
 * This is a proof-of-concept implementation of embedding Java applets in Elgg.
 * It includes a sample applet and game.
 * (C) iionly 2012
 * GNU General Public License version 2
 */

elgg_register_event_handler('init', 'system', 'jpatchwork_init');

function jpatchwork_init() {

    // Add a menu item to the main site menu
    if (elgg_is_logged_in()) {
        elgg_register_menu_item('site', array('name' => elgg_echo('jpatchwork:menu'),
                                              'text' => elgg_echo('jpatchwork:menu'),
                                              'href' => elgg_get_site_url() . 'jpatchwork/sample'));
    }

    elgg_register_menu_item('page', array('name' => elgg_echo('jpatchwork:sample_menu'),
                                          'text' => elgg_echo('jpatchwork:sample_menu'),
                                          'href' => elgg_get_site_url() . 'jpatchwork/sample',
                                          'context' => 'jpatchwork',
                                          'section' => 'default'));

    elgg_register_menu_item('page', array('name' => elgg_echo('jpatchwork:frozenbubble_menu'),
                                          'text' => elgg_echo('jpatchwork:frozenbubble_menu'),
                                          'href' => elgg_get_site_url() . 'jpatchwork/frozenbubble',
                                          'context' => 'jpatchwork',
                                          'section' => 'default'));

    // routing of urls
    elgg_register_page_handler('jpatchwork', 'jpatchwork_page_handler');
}

function jpatchwork_page_handler($page) {

    if (!isset($page[0])) {
        $page[0] = 'sample';
    }

    elgg_set_context('jpatchwork');

    $page_type = $page[0];
    switch ($page_type) {
        case 'sample':
            $area2 = elgg_view_title(elgg_echo('jpatchwork:sample_title'));
            // Add the form to this section
            elgg_set_viewtype('xml');
            $area2 .= elgg_view('jpatchwork/sample');
            elgg_set_viewtype('default');
            break;
        case 'frozenbubble':
            $area2 = elgg_view_title(elgg_echo('jpatchwork:frozenbubble_title'));
            // Add the form to this section
            elgg_set_viewtype('xml');
            $area2 .= elgg_view('jpatchwork/frozenbubble');
            elgg_set_viewtype('default');
            break;
        default:
            return false;
    }

    // Format page
    $body = elgg_view('page/layouts/one_sidebar', array('content' => $area2));

    // Draw it
    echo elgg_view_page(elgg_echo('jpatchwork:title'), $body);

    return true;
}
