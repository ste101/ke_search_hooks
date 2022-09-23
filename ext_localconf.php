<?php
/***************************************************************
 *  Copyright notice
 *  (c) 2012 Christian Bülter
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

if (!defined("TYPO3")) {
    die("Access denied.");
}
(function () {
    // Register custom indexer.
    // Adjust this to your namespace and class name.
    // Adjust the autoloading information in composer.json, too!
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
        \Tpwd\KeSearchHooks\ExampleIndexer::class;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
        \Tpwd\KeSearchHooks\ExampleIndexer::class;

    // Register hooks for indexing additional fields.
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['modifyPageContentFields'][] =
        \Tpwd\KeSearchHooks\AdditionalContentFields::class;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['modifyContentFromContentElement'][] =
        \Tpwd\KeSearchHooks\AdditionalContentFields::class;

    // Register hook to check if a content element should be indexed
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['contentElementShouldBeIndexed'][] =
        \Tpwd\KeSearchHooks\AdditionalContentFields::class;

    // Register hook to add a custom autosuggest provider (ke_search_premium feature)
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search_premium']['modifyAutocompleWordList'][] =
        \Tpwd\KeSearchHooks\AutosuggestProvider::class;

    // Register hook to add custom values to the result row partial
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['additionalResultMarker'][] =
        \Tpwd\KeSearchHooks\AdditionalResultMarker::class;

    // Register hook to change the sorting
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['getOrdering'][] =
        \Tpwd\KeSearchHooks\Ordering::class;

    // Register hook to modify the values of the record which will be stored in the index
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['modifyFieldValuesBeforeStoring'][] =
        \Tpwd\KeSearchHooks\modifyFieldValuesBeforeStoring::class;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customFilterRenderer'][] =
        \Tpwd\KeSearchHooks\ExampleFilterRenderer::class;

    // Register hook to register additional fields in the index table
    // Make sure to set the values for the additional fields in *every indexer* you use
    //$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerAdditionalFields'][] =
    //\Tpwd\KeSearchHooks\AdditionalIndexerFields::class;

    // Example for showing images of fe_users if you have implemented a fe_users indexer
    //$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['fileReferenceTypes']['fe_users']['table'] = 'fe_users';
    //$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['fileReferenceTypes']['fe_users']['field'] = 'image';
})();