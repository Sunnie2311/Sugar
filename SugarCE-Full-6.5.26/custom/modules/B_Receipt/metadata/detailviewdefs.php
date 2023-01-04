<?php
$module_name = 'B_Receipt';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input id="SyncButton" title="Sync Button" class="button" type="button" name="SyncButton" value="Sync Button" onclick="myButtonFunt();">',
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'receipt_id',
            'label' => 'LBL_RECEIPT_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'customer_relate_receipt',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMER_RELATE_RECEIPT',
          ),
          1 => 
          array (
            'name' => 'receipt_status',
            'studio' => 'visible',
            'label' => 'LBL_RECEIPT_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'receipt_address',
            'label' => 'LBL_RECEIPT_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'receipt_detail',
            'label' => 'LBL_RECEIPT_DETAIL',
            'customCode' => '
            {include file="custom/modules/B_Receipt/tpls/customDetail.tpl"}
            ',
          ),
        ),
      ),
    ),
  ),
);
?>
