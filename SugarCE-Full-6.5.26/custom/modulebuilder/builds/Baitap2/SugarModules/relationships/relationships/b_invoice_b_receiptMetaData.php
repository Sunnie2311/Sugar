<?php
// created: 2022-12-15 12:43:06
$dictionary["b_invoice_b_receipt"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'b_invoice_b_receipt' => 
    array (
      'lhs_module' => 'B_Invoice',
      'lhs_table' => 'b_invoice',
      'lhs_key' => 'id',
      'rhs_module' => 'B_Receipt',
      'rhs_table' => 'b_receipt',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'b_invoice_b_receipt_c',
      'join_key_lhs' => 'b_invoice_b_receiptb_invoice_ida',
      'join_key_rhs' => 'b_invoice_b_receiptb_receipt_idb',
    ),
  ),
  'table' => 'b_invoice_b_receipt_c',
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
      'name' => 'b_invoice_b_receiptb_invoice_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'b_invoice_b_receiptb_receipt_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'b_invoice_b_receiptspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'b_invoice_b_receipt_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b_invoice_b_receiptb_invoice_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'b_invoice_b_receipt_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b_invoice_b_receiptb_receipt_idb',
      ),
    ),
  ),
);