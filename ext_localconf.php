<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Christian Bülter (kennziffer.com) <buelter@kennziffer.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

if (!defined ("TYPO3_MODE")) die ("Access denied.");

	// register custom indexer hook
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] 
	= 'EXT:ke_search_hooks/class.user_kesearchhooks.php:user_kesearchhooks';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][]
	= 'EXT:ke_search_hooks/class.user_kesearchhooks.php:user_kesearchhooks';

	// register custom filter renderer hook
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customFilterRenderer'][]
	= 'EXT:ke_search_hooks/class.user_kesearchhooks.php:user_kesearchhooks';

	// register additional markers for search results
	// (displays images of tt_news in this example)
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['additionalResultMarker'][]
	= 'EXT:ke_search_hooks/class.user_kesearchhooks.php:user_kesearchhooks';
?>
