<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_extMgm::addPageTSConfig('mod.SHARED.colPos_list = 0,1,2,3');

t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';
//Rename backend columns to avoid naming annoyances in page-module with "oldStyleColumns"
$TCA['tt_content']['columns']['colPos']['config']['items']['0']['0'] = 'main';
$TCA['tt_content']['columns']['colPos']['config']['items']['0']['1'] = 0;
$TCA['tt_content']['columns']['colPos']['config']['items']['1']['0'] = 'side';
$TCA['tt_content']['columns']['colPos']['config']['items']['1']['1'] = 1;
$TCA['tt_content']['columns']['colPos']['config']['items']['2']['0'] = 'menu';
$TCA['tt_content']['columns']['colPos']['config']['items']['2']['1'] = 2;
$TCA['tt_content']['columns']['colPos']['config']['items']['3']['0'] = 'extended';
$TCA['tt_content']['columns']['colPos']['config']['items']['3']['1'] = 3;
$TCA['tt_content']['columns']['colPos']['config']['items']['4']['0'] = 'TV-SP-4';
$TCA['tt_content']['columns']['colPos']['config']['items']['4']['1'] = 4;
$TCA['tt_content']['columns']['colPos']['config']['items']['5']['0'] = 'TV-SP-5';
$TCA['tt_content']['columns']['colPos']['config']['items']['5']['1'] = 5;
$TCA['tt_content']['columns']['colPos']['config']['items']['6']['0'] = 'TV-SP-6';
$TCA['tt_content']['columns']['colPos']['config']['items']['6']['1'] = 6;
$TCA['tt_content']['columns']['colPos']['config']['items']['7']['0'] = 'TV-SP-7';
$TCA['tt_content']['columns']['colPos']['config']['items']['7']['1'] = 7;
//Show "media" on pages of type shortcut
t3lib_div::loadTCA('pages');

t3lib_extMgm::addPlugin(array('LLL:EXT:if_yaml/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY.'_pi1'),'list_type');

t3lib_extMgm::addStaticFile($_EXTKEY,"pi1/static/","if20 if_yaml");
?>