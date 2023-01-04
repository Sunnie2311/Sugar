<?php
$module_name = 'B_Invoice';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'INVOICE_RECEIPT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_INVOICE_RECEIPT',
    'id' => 'B_RECEIPT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
?>
