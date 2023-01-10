<?php
/**
 * @file plugins/generic/error404/Error404PluginHandler.inc.php
 *
 * Copyright (c) 2022-2023 Bourrand Erwan
 * Distributed under the GNU GPL v3.
 *
 * @class Error404PluginHandler
 * @ingroup plugins_generic_error404
 *
 * @brief handle call to display 404 error static page.
 */

import('classes.handler.Handler');

class Error404PluginHandler extends Handler {
	public function index($args, $request) {
		$plugin = PluginRegistry::getPlugin('generic', 'error404plugin');
		$templateMgr = TemplateManager::getManager($request);
		return $templateMgr->display($plugin->getTemplateResource('frontend/pages/page404.tpl'));
  	}
}