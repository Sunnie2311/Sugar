<?php
// created: 2022-12-13 17:02:28
$dictionary["b_list_b_product"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'b_list_b_product' => 
    array (
      'lhs_module' => 'B_Product',
      'lhs_table' => 'b_product',
      'lhs_key' => 'id',
      'rhs_module' => 'B_List',
      'rhs_table' => 'b_list',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'b_list_b_product_c',
      'join_key_lhs' => 'b_list_b_productb_product_ida',
      'join_key_rhs' => 'b_list_b_productb_list_idb',
    ),
  ),
  'table' => 'b_list_b_product_c',
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
      'name' => 'b_list_b_productb_product_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'b_list_b_productb_list_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'b_list_b_productspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'b_list_b_product_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b_list_b_productb_product_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'b_list_b_product_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'b_list_b_productb_list_idb',
      ),
    ),
  ),
);