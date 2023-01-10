<?php
/**
 * @file plugins/generic/error404/Error404Plugin.inc.php
 *
 * Copyright (c) 2022-2023 Bourrand Erwan
 * Distributed under the GNU GPL v3.
 *
 * @class Error404Plugin
 * @ingroup plugins_generic_error404
 *
 * @brief redirect 404 error to a proper static page.
 */

import('lib.pkp.classes.plugins.GenericPlugin');
import('plugins.generic.error404.classes.core.Dispatcher404Error');

class Error404Plugin extends GenericPlugin {
	/**
	 * @copydoc Plugin::register
	 */
	public function register($category, $path, $mainContextId = NULL) {
		$success = parent::register($category, $path, $mainContextId);
		if ($success && $this->getEnabled()) {
	    	HookRegistry::register('LoadHandler', array($this, 'setPageHandler'));
		    HookRegistry::register('Dispatcher::dispatch', array($this, 'setDispatcher'));
		}
		return true;
	}
	
	public function setPageHandler($hookName, $params) {
		$page = $params[0];
		if ($page === '404') {
			$this->import('Error404PluginHandler');
			define('HANDLER_CLASS', 'Error404PluginHandler');
			return true;
		}
		return false;
	}

    public function setDispatcher($hookName, $params) {
        $request = $this->getRequest();
        $request->setDispatcher(new Dispatcher404Error($request->getDispatcher()));
    }

	/**
	 * Install default settings on journal creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * @copydoc PKPPlugin::getDisplayName
	 */
	public function getDisplayName() {
		return __('plugins.generic.error404.name');
	}

	/**
	 * @copydoc PKPPlugin::getDescription
	 */
	public function getDescription() {
		return __('plugins.generic.error404.description');
	}
}
