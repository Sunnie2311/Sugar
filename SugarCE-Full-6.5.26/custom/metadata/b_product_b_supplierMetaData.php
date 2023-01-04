<?php
// created: 2022-12-13 17:02:28
$dictionary["b_product_b_supplier"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'b_product_b_supplier' => 
    array (
      'lhs_module' => 'B_Supplier',
      'lhs_table' => 'b_supplier',
      'lhs_key' => 'id',
      'rhs_module' => 'B_Product',
      'rhs_table' => 'b_product',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'b_product_b_supplier_c',
      'join_key_lhs' => 'b_product_b_supplierb_supplier_ida',
      'join_key_rhs' => 'b_product_b_supplierb_product_idb',
    ),
  ),
  'table' => 'b_product_b_supplier_c',
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
      'name' => 'b_product_b_supplierb_supplier_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'b_product_b_supplierb_product_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'b_product_b_supplierspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'b_product_b_supplier_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b_product_b_supplierb_supplier_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'b_product_b_supplier_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'b_product_b_supplierb_product_idb',
      ),
    ),
  ),
);