<?php 
 $GLOBALS["dictionary"]["B_List"]=array (
  'table' => 'b_list',
  'audited' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'b_list_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'b_list_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'b_list_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'b_product_id_c' => 
    array (
      'required' => false,
      'name' => 'b_product_id_c',
      'vname' => 'LBL_LIST_PRODUCT_B_PRODUCT_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'list_product' => 
    array (
      'required' => true,
      'source' => 'non-db',
      'name' => 'list_product',
      'vname' => 'LBL_LIST_PRODUCT',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'b_product_id_c',
      'ext2' => 'B_Product',
      'module' => 'B_Product',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'list_product_quantity' => 
    array (
      'required' => true,
      'name' => 'list_product_quantity',
      'vname' => 'LBL_LIST_PRODUCT_QUANTITY',
      'type' => 'int',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'b_customer_b_list_1' => 
    array (
      'name' => 'b_customer_b_list_1',
      'type' => 'link',
      'relationship' => 'b_customer_b_list_1',
      'source' => 'non-db',
      'module' => 'B_Customer',
      'bean_name' => 'B_Customer',
      'vname' => 'LBL_B_CUSTOMER_B_LIST_1_FROM_B_CUSTOMER_TITLE',
      'id_name' => 'b_customer_b_list_1b_customer_ida',
    ),
    'b_customer_b_list_1_name' => 
    array (
      'name' => 'b_customer_b_list_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_B_CUSTOMER_B_LIST_1_FROM_B_CUSTOMER_TITLE',
      'save' => true,
      'id_name' => 'b_customer_b_list_1b_customer_ida',
      'link' => 'b_customer_b_list_1',
      'table' => 'b_customer',
      'module' => 'B_Customer',
      'rname' => 'name',
    ),
    'b_customer_b_list_1b_customer_ida' => 
    array (
      'name' => 'b_customer_b_list_1b_customer_ida',
      'type' => 'link',
      'relationship' => 'b_customer_b_list_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_B_CUSTOMER_B_LIST_1_FROM_B_LIST_TITLE',
    ),
    'b_list_b_product' => 
    array (
      'name' => 'b_list_b_product',
      'type' => 'link',
      'relationship' => 'b_list_b_product',
      'source' => 'non-db',
      'module' => 'B_Product',
      'bean_name' => 'B_Product',
      'vname' => 'LBL_B_LIST_B_PRODUCT_FROM_B_PRODUCT_TITLE',
      'id_name' => 'b_list_b_productb_product_ida',
    ),
    'b_list_b_product_name' => 
    array (
      'name' => 'b_list_b_product_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_B_LIST_B_PRODUCT_FROM_B_PRODUCT_TITLE',
      'save' => true,
      'id_name' => 'b_list_b_productb_product_ida',
      'link' => 'b_list_b_product',
      'table' => 'b_product',
      'module' => 'B_Product',
      'rname' => 'name',
    ),
    'b_list_b_productb_product_ida' => 
    array (
      'name' => 'b_list_b_productb_product_ida',
      'type' => 'link',
      'relationship' => 'b_list_b_product',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_B_LIST_B_PRODUCT_FROM_B_LIST_TITLE',
    ),
    'b_list_b_receipt' => 
    array (
      'name' => 'b_list_b_receipt',
      'type' => 'link',
      'relationship' => 'b_list_b_receipt',
      'source' => 'non-db',
      'module' => 'B_Receipt',
      'bean_name' => 'B_Receipt',
      'vname' => 'LBL_B_LIST_B_RECEIPT_FROM_B_RECEIPT_TITLE',
      'id_name' => 'b_list_b_receiptb_receipt_ida',
    ),
    'b_list_b_receipt_name' => 
    array (
      'name' => 'b_list_b_receipt_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_B_LIST_B_RECEIPT_FROM_B_RECEIPT_TITLE',
      'save' => true,
      'id_name' => 'b_list_b_receiptb_receipt_ida',
      'link' => 'b_list_b_receipt',
      'table' => 'b_receipt',
      'module' => 'B_Receipt',
      'rname' => 'name',
    ),
    'b_list_b_receiptb_receipt_ida' => 
    array (
      'name' => 'b_list_b_receiptb_receipt_ida',
      'type' => 'link',
      'relationship' => 'b_list_b_receipt',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_B_LIST_B_RECEIPT_FROM_B_LIST_TITLE',
    ),
    'list_customer_name' => 
    array (
      'name' => 'list_customer_name',
      'vname' => 'LBL_LIST_CUSTOMER_NAME',
      'type' => 'varchar',
      'len' => 255,
      'size' => 20,
    ),
    'list_product_total_price' => 
    array (
      'name' => 'list_product_total_price',
      'vname' => 'LBL_LIST_PRODUCT_TOTAL_PRICE',
      'type' => 'int',
      'len' => 255,
      'size' => 20,
    ),
    'list_product_price' => 
    array (
      'name' => 'list_product_price',
      'vname' => 'LBL_LIST_PRODUCT_PRICE',
      'type' => 'int',
      'len' => 255,
      'size' => 20,
    ),
    'temp' => 
    array (
      'name' => 'temp',
      'vname' => 'LBL_TEMP',
      'type' => 'int',
      'len' => 255,
      'size' => 20,
    ),
  ),
  'relationships' => 
  array (
    'b_list_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'B_List',
      'rhs_table' => 'b_list',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'b_list_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'B_List',
      'rhs_table' => 'b_list',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'b_list_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'B_List',
      'rhs_table' => 'b_list',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'b_listpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);