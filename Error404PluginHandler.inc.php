<?php
/**
 * @file plugins/generic/customPageError/CustomPageErrorPlugin.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CustomPageErrorPlugin
 * @ingroup plugins_generic_error404
 *
 * @brief Clear the CSS and Template cache on every page load.
 */

import('classes.handler.Handler');

class Error404PluginHandler extends Handler {
	public function index($args, $request) {
		$plugin = PluginRegistry::getPlugin('generic', 'error404plugin');
		$templateMgr = TemplateManager::getManager($request);
		return $templateMgr->display($plugin->getTemplateResource('frontend/pages/page404.tpl'));
  	}
}