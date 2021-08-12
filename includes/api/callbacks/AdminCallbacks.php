<?php
/**
 * @package AlecadddPlugin
 */

namespace Includes\Api\Callbacks;

use Includes\Base\BaseController;


class AdminCallbacks extends BaseController {

	public function adminDashboard() {

		return require_once "$this->plugin_path/public/Admin.php";
	}
	public function surveyDashboard() {

		return require_once "$this->plugin_path/public/Survey.php";
	}
}