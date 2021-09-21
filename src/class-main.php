<?php
/**
 * Core plugin class
 */

namespace Tacocat;

if (! defined('ABSPATH') ) {
    exit;
}

class Main
{

    /**
     * Starts the plugin
     *
     * @return void
     */
    static public function start()
    {
        /* Load everything else here */
        error_log('Started');
    }
}
