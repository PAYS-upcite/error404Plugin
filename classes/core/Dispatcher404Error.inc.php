<?php
/**
 * @file plugins/generic/error404/Dispatcher404Error.inc.php
 *
 * Copyright (c) 2022-2023 Bourrand Erwan
 * Distributed under the GNU GPL v3.
 *
 * @class Dispatcher404Error
 * @ingroup plugins_generic_error404
 *
 * @brief Override the handle404 method of the dispatcher to redirect to a proper static page.
 */

import('lib.pkp.classes.core.Dispatcher');

use PKP\core\Dispatcher;
use APP\core\Application;

class Dispatcher404Error extends Dispatcher{

	function __construct(Dispatcher $dispatcher) {
		$this->_application = $dispatcher->_application;
		$this->_routerNames = $dispatcher->_routerNames;
		$this->_routerInstances = $dispatcher->_routerInstances;
		foreach ($this->_routerInstances as $routerInstance) {
			$routerInstance->setDispatcher($this);
		}
		$this->_router = $dispatcher->_router;
		$this->_router->setDispatcher($this);
		$this->_requestCallbackHack = $dispatcher->_requestCallbackHack;
	}
	
	public static function handle404() {
		header("HTTP/1.1 404 Not Found");
		$templateMgr = TemplateManager::getManager(Application::get()->getRequest());
		$templateMgr->display('plugins/generic/error404/templates/frontend/pages/page404.tpl');
		exit;
	}
}