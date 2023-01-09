<?php

/**
 * @defgroup plugins_generic_error404
 */

/**
 * @file plugins/generic/customPageError/index.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_error404
 * @brief Wrapper for the Custom Page Error plugin.
 *
 */
require_once('Error404Plugin.inc.php');

return new Error404Plugin();
