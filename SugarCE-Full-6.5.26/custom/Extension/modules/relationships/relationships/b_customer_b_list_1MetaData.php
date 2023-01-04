<?php
// created: 2022-12-15 02:28:41
$dictionary["b_customer_b_list_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'b_customer_b_list_1' => 
    array (
      'lhs_module' => 'B_Customer',
      'lhs_table' => 'b_customer',
      'lhs_key' => 'id',
      'rhs_module' => 'B_List',
      'rhs_table' => 'b_list',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'b_customer_b_list_1_c',
      'join_key_lhs' => 'b_customer_b_list_1b_customer_ida',
      'join_key_rhs' => 'b_customer_b_list_1b_list_idb',
    ),
  ),
  'table' => 'b_customer_b_list_1_c',
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
      'name' => 'b_customer_b_list_1b_customer_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'b_customer_b_list_1b_list_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'b_customer_b_list_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'b_customer_b_list_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b_customer_b_list_1b_customer_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'b_customer_b_list_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'b_customer_b_list_1b_list_idb',
      ),
    ),
  ),
);