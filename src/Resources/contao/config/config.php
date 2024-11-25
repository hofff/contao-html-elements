<?php

/**
 * Contao Open Source CMS
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package    semantic_html5
 * @copyright  MEN AT WORK 2016
 * @author     David Maack <david.maack@arcor.de>
 * @license    LGPL-3.0+
 */

use SemanticHTML5\Backend\Callbacks;
use SemanticHTML5\Elements\End;
use SemanticHTML5\Elements\Start;

/**
 *
 * Config
 */

$GLOBALS['TL_HTML5']['tags'] = [
    'tl_content' => ['article', 'aside', 'button', 'div', 'footer', 'header', 'section']
];

$GLOBALS['TL_HTML5']['copyFields'] = [
    'tl_content' => ['protected', 'groups', 'guests', 'start', 'stop']
];

/**
 * Content Element
 */
$GLOBALS['TL_CTE']['html5']['sHtml5Start'] = Start::class;
$GLOBALS['TL_CTE']['html5']['sHtml5End']   = End::class;

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getContentElement'][] = [Callbacks::class, 'addColorizeJs'];

/**
 * Wrapper
 */
$GLOBALS['TL_WRAPPERS']['start'][] = 'sHtml5Start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'sHtml5End';
