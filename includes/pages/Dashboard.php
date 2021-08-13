<?php
/**
 * @package survey-kit
 */

namespace Includes\Pages;

use Includes\Base\BaseController;
use Includes\Api\Callbacks\AdminCallbacks;

class Dashboard extends BaseController {

    public $callbacks;

    public function register() {

        $this->callbacks = new AdminCallbacks();
		add_action('admin_menu', array($this, 'setMainMenu'));
    }

    public function setMainMenu() {

        add_menu_page('Survey Kit','Survey Kit', 'manage_options','survey_kit', array($this->callbacks, 'adminDashboard'), 'dashicons-store', 110);
	
		add_submenu_page('survey_kit', 'Survey Kit', 'Survey Kit', 'manage_options','survey_kit');
		
		add_submenu_page('survey_kit', 'Survey Test', 'Survey Test', 'manage_options','survey_test', array($this->callbacks, 'surveyDashboard'), 2);

	}



}