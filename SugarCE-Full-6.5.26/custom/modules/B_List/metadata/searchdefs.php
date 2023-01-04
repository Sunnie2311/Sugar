<?php
$module_name = 'B_List';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'b_list_b_receipt_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_B_LIST_B_RECEIPT_FROM_B_RECEIPT_TITLE',
        'id' => 'B_LIST_B_RECEIPTB_RECEIPT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'b_list_b_receipt_name',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
