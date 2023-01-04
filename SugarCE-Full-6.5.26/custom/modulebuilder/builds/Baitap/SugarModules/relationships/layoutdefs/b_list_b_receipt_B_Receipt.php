<?php
 // created: 2022-12-13 17:02:28
$layout_defs["B_Receipt"]["subpanel_setup"]['b_list_b_receipt'] = array (
  'order' => 100,
  'module' => 'B_List',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_B_LIST_B_RECEIPT_FROM_B_LIST_TITLE',
  'get_subpanel_data' => 'b_list_b_receipt',
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
