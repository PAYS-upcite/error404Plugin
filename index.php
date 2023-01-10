<?php

/**
 * @defgroup plugins_generic_error404
 */

/**
 * @file plugins/generic/error404/index.php
 *
 * Copyright (c) 2022-2023 Bourrand Erwan
 * Distributed under the GNU GPL v3.
 *
 * @ingroup plugins_generic_error404
 * @brief Wrapper for the Error 404 Page plugin.
 *
 */
require_once('Error404Plugin.inc.php');

return new Error404Plugin();
