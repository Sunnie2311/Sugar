<?php
$module_name = 'B_Customer';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CUSTOMER_ID' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CUSTOMER_ID',
    'width' => '10%',
  ),
  'CUSTOMER_PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_CUSTOMER_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);
?>
