<?php
/**
 *
 * @package Plugin
 * @subpackage SIWECOS
 * @author Fulai Zhang <fulai.zhang@4fb.de>
 * @copyright four for business AG
 * @link http://www.4fb.de
 */

/**
 * This file contains the default blank sub navigation frame backend page.
 *
 * @package          Core
 * @subpackage       Backend
 * @author           Unknown
 * @copyright        four for business AG <www.4fb.de>
 * @license          http://www.contenido.org/license/LIZENZ.txt
 * @link             http://www.4fb.de
 * @link             http://www.contenido.org
 */

defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

// Generate template
$tpl->generate($cfg['path']['templates'] . $cfg['templates']['subnav_blank']);