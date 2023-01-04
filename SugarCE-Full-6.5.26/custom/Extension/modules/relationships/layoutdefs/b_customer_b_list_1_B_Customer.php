<?php
 // created: 2022-12-15 02:28:41
$layout_defs["B_Customer"]["subpanel_setup"]['b_customer_b_list_1'] = array (
  'order' => 100,
  'module' => 'B_List',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_B_CUSTOMER_B_LIST_1_FROM_B_LIST_TITLE',
  'get_subpanel_data' => 'b_customer_b_list_1',
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
