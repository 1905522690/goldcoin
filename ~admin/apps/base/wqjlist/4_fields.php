<?php
 return array (
  0 => 
  array (
    'id' => '13',
    'appid' => '4',
    'xtype' => 'textfield',
    'fieldlabel' => '嘉宾名',
    'name' => 'title',
    'listwidth' => '150',
    'colspan' => '1',
    'rowspan' => '1',
    'height' => '0',
    'columns' => '0',
    'toolbar' => '',
    'datatype' => '',
    '_require' => '0',
    'defval' => '',
    'datefmt' => '',
    'fdplusfn' => '',
    'relationtable' => '',
    'relationfield' => '',
    'relationfieldsortfd' => '',
    'relationfieldsortinfo' => '',
    'relationfieldistype' => '0',
    'relationtypeid' => '',
    'relationfieldldgrade' => '0',
    'listsort' => '1',
    'abledit' => '1',
    'eqtypeval' => '',
    'rexlivid' => '0',
    'sort' => '1',
    'defsort' => '0',
    'displaytag' => '1',
    'datafilltype' => '',
    'issearch' => '0',
    'sitesearch' => '0',
    'onlyone' => '0',
  ),
  1 => 
  array (
    'id' => '14',
    'appid' => '4',
    'xtype' => 'simpleupload',
    'fieldlabel' => '列表照片（174px × 140px）',
    'name' => 'img',
    'listwidth' => '215',
    'colspan' => '1',
    'rowspan' => '1',
    'height' => '0',
    'columns' => '0',
    'toolbar' => '',
    'datatype' => '',
    '_require' => '0',
    'defval' => '',
    'datefmt' => '',
    'fdplusfn' => '',
    'relationtable' => '',
    'relationfield' => '',
    'relationfieldsortfd' => '',
    'relationfieldsortinfo' => '',
    'relationfieldistype' => '0',
    'relationtypeid' => '',
    'relationfieldldgrade' => '0',
    'listsort' => '0',
    'abledit' => '1',
    'eqtypeval' => '',
    'rexlivid' => '0',
    'sort' => '2',
    'defsort' => '0',
    'displaytag' => '1',
    'datafilltype' => '',
    'issearch' => '0',
    'sitesearch' => '0',
    'onlyone' => '0',
  ),
  2 => 
  array (
    'id' => '42',
    'appid' => '4',
    'xtype' => 'markfield',
    'fieldlabel' => '是否在左侧',
    'name' => 'isleft',
    'listwidth' => '50',
    'colspan' => '1',
    'rowspan' => '1',
    'height' => '0',
    'columns' => '0',
    'toolbar' => '',
    'datatype' => '',
    '_require' => '0',
    'defval' => '',
    'datefmt' => '',
    'fdplusfn' => '',
    'relationtable' => '',
    'relationfield' => '',
    'relationfieldsortfd' => '',
    'relationfieldsortinfo' => '',
    'relationfieldistype' => '0',
    'relationtypeid' => '',
    'relationfieldldgrade' => '0',
    'listsort' => '5',
    'abledit' => '1',
    'eqtypeval' => '',
    'rexlivid' => '0',
    'sort' => '3',
    'defsort' => '0',
    'displaytag' => '1',
    'datafilltype' => '',
    'issearch' => '0',
    'sitesearch' => '0',
    'onlyone' => '0',
  ),
  3 => 
  array (
    'id' => '15',
    'appid' => '4',
    'xtype' => 'simpleupload',
    'fieldlabel' => '详细页照片（530px × 393px）',
    'name' => 'imgbig',
    'listwidth' => '106',
    'colspan' => '1',
    'rowspan' => '1',
    'height' => '0',
    'columns' => '0',
    'toolbar' => '',
    'datatype' => '',
    '_require' => '0',
    'defval' => '',
    'datefmt' => '',
    'fdplusfn' => '',
    'relationtable' => '',
    'relationfield' => '',
    'relationfieldsortfd' => '',
    'relationfieldsortinfo' => '',
    'relationfieldistype' => '0',
    'relationtypeid' => '',
    'relationfieldldgrade' => '0',
    'listsort' => '0',
    'abledit' => '1',
    'eqtypeval' => '',
    'rexlivid' => '0',
    'sort' => '4',
    'defsort' => '0',
    'displaytag' => '1',
    'datafilltype' => '',
    'issearch' => '0',
    'sitesearch' => '0',
    'onlyone' => '0',
  ),
  4 => 
  array (
    'id' => '16',
    'appid' => '4',
    'xtype' => 'ewebeditor',
    'fieldlabel' => '嘉宾介绍',
    'name' => 'content',
    'listwidth' => '0',
    'colspan' => '1',
    'rowspan' => '1',
    'height' => '300',
    'columns' => '0',
    'toolbar' => '',
    'datatype' => '',
    '_require' => '0',
    'defval' => '',
    'datefmt' => '',
    'fdplusfn' => '',
    'relationtable' => '',
    'relationfield' => '',
    'relationfieldsortfd' => '',
    'relationfieldsortinfo' => '',
    'relationfieldistype' => '0',
    'relationtypeid' => '',
    'relationfieldldgrade' => '0',
    'listsort' => '4',
    'abledit' => '1',
    'eqtypeval' => '',
    'rexlivid' => '0',
    'sort' => '5',
    'defsort' => '0',
    'displaytag' => '1',
    'datafilltype' => '',
    'issearch' => '0',
    'sitesearch' => '0',
    'onlyone' => '0',
  ),
  5 => 
  array (
    'id' => '62',
    'appid' => '4',
    'xtype' => 'relationfield',
    'fieldlabel' => '所属请柬',
    'name' => 'class_type',
    'listwidth' => '0',
    'colspan' => '1',
    'rowspan' => '1',
    'height' => '0',
    'columns' => '1',
    'toolbar' => '',
    'datatype' => 'Require',
    '_require' => '1',
    'defval' => '',
    'datefmt' => '',
    'fdplusfn' => '',
    'relationtable' => 'cn_wqj_list',
    'relationfield' => 'title1',
    'relationfieldsortfd' => '',
    'relationfieldsortinfo' => '',
    'relationfieldistype' => '0',
    'relationtypeid' => '',
    'relationfieldldgrade' => '0',
    'listsort' => '6',
    'abledit' => '1',
    'eqtypeval' => '',
    'rexlivid' => '0',
    'sort' => '6',
    'defsort' => '0',
    'displaytag' => '1',
    'datafilltype' => '',
    'issearch' => '0',
    'sitesearch' => '0',
    'onlyone' => '0',
  ),
);
?>