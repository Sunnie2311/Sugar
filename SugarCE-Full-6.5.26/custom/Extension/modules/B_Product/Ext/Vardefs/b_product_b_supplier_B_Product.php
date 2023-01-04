<?php
// created: 2022-12-13 17:02:28
$dictionary["B_Product"]["fields"]["b_product_b_supplier"] = array (
  'name' => 'b_product_b_supplier',
  'type' => 'link',
  'relationship' => 'b_product_b_supplier',
  'source' => 'non-db',
  'module' => 'B_Supplier',
  'bean_name' => 'B_Supplier',
  'vname' => 'LBL_B_PRODUCT_B_SUPPLIER_FROM_B_SUPPLIER_TITLE',
  'id_name' => 'b_product_b_supplierb_supplier_ida',
);
$dictionary["B_Product"]["fields"]["b_product_b_supplier_name"] = array (
  'name' => 'b_product_b_supplier_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_PRODUCT_B_SUPPLIER_FROM_B_SUPPLIER_TITLE',
  'save' => true,
  'id_name' => 'b_product_b_supplierb_supplier_ida',
  'link' => 'b_product_b_supplier',
  'table' => 'b_supplier',
  'module' => 'B_Supplier',
  'rname' => 'name',
);
$dictionary["B_Product"]["fields"]["b_product_b_supplierb_supplier_ida"] = array (
  'name' => 'b_product_b_supplierb_supplier_ida',
  'type' => 'link',
  'relationship' => 'b_product_b_supplier',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_B_PRODUCT_B_SUPPLIER_FROM_B_PRODUCT_TITLE',
);
