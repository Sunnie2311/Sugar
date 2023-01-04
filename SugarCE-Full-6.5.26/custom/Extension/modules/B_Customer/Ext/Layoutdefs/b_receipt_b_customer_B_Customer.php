<?php
 // created: 2022-12-13 17:02:28
$layout_defs["B_Customer"]["subpanel_setup"]['b_receipt_b_customer'] = array (
  'order' => 100,
  'module' => 'B_Receipt',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_B_RECEIPT_B_CUSTOMER_FROM_B_RECEIPT_TITLE',
  'get_subpanel_data' => 'b_receipt_b_customer',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
