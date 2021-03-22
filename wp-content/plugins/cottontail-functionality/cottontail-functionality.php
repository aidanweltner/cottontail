<?php
/**
 * Plugin Name: Cottontail Functionality Starter
 * Description: Core functionality for Cottontail Creative Sites. <strong>It should always be activated</strong>.
 * Version:     1.0.0
 * Author:      Aidan Weltner
 * Author URI: https://cottontailcreative.com
 *
 */

add_filter(
    'be_media_from_production_url',
    function () {
        return 'https://cottontailcreative.com';
    }
);
