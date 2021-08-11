<?php
/**
 * 
 * @package SurveyKit
 */

namespace Inc\Base;

class BaseController {
    public $plugin_path;

    public $plugin_url;

    public $plugin;

    public $managers = array();


    public function __construct()
    {
        $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
        $this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
        $this->plugin = plugin_basename(dirname(__FILE__, 3)) . '/survey-kit.php';

        // TODO: Remove this
        echo '<pre>';
        print_r($this->plugin);
        echo '</pre>';
        
    }


}