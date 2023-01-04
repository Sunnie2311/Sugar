<?php
// created: 2022-12-13 17:02:28
$dictionary["b_receipt_b_customer"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'b_receipt_b_customer' => 
    array (
      'lhs_module' => 'B_Customer',
      'lhs_table' => 'b_customer',
      'lhs_key' => 'id',
      'rhs_module' => 'B_Receipt',
      'rhs_table' => 'b_receipt',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'b_receipt_b_customer_c',
      'join_key_lhs' => 'b_receipt_b_customerb_customer_ida',
      'join_key_rhs' => 'b_receipt_b_customerb_receipt_idb',
    ),
  ),
  'table' => 'b_receipt_b_customer_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'b_receipt_b_customerb_customer_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'b_receipt_b_customerb_receipt_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'b_receipt_b_customerspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'b_receipt_b_customer_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b_receipt_b_customerb_customer_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'b_receipt_b_customer_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'b_receipt_b_customerb_receipt_idb',
      ),
    ),
  ),
);