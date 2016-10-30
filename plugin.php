<?php
/**
 * Plugin name: WP noindex testing staging robots
 * Description: Uses robots.txt to not index development/testing environments of this site with search-engines
 * Plugin author: Onni Hakala / Geniem Oy
 * Plugin URI: https://github.com/devgeniem/wp-noindex-testing-staging-robots
 * License URI: https://opensource.org/licenses/MIT
 * Version: 1.0
 */

/**
 * Hides staging/development from Search engines
 *
 * @param string $output - Output into robots.txt.
 * @param bool   $public - 1 or 0 depending if blog public meta is turned on.
 */
add_filter( 'robots_txt', function( string $output, bool $public ) {

    // Hides all non production sites and all sites under WP_HIDE_ROBOTS_DOMAIN
    if ( defined( 'WP_ENV' ) && WP_ENV !== 'production' ) {
        $output = "User-agent: *\n";
        $output .= "Disallow: /\n";
    } elseif ( defined('WP_HIDE_ROBOTS_DOMAINS') ) {

        // Check all domains
        $domains = explode(',', WP_HIDE_ROBOTS_DOMAINS );
        foreach ($domains as $domain) {

            // If domain contains any of the domains in WP_HIDE_ROBOTS_DOMAINS deny it from robots
            if ( strpos( $_SERVER['HTTP_HOST'], $domain ) !== false ) {
                $output = "User-agent: *\n";
                $output .= "Disallow: /\n";
                break;
            }
        }
    }

    return $output;
}, 10, 2 );
