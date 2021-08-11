<?php
/**
 * 
 * @package SurveyKit
 * 
 */

namespace Inc\Deactivate;

class Deactivate {

    public static function deactivate() {
        flush_rewrite_rules();
    }
}