<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2022-12-13 17:02:28
$dictionary["B_Supplier"]["fields"]["b_product_b_supplier"] = array (
  'name' => 'b_product_b_supplier',
  'type' => 'link',
  'relationship' => 'b_product_b_supplier',
  'source' => 'non-db',
  'module' => 'B_Product',
  'bean_name' => 'B_Product',
  'side' => 'right',
  'vname' => 'LBL_B_PRODUCT_B_SUPPLIER_FROM_B_PRODUCT_TITLE',
);


 // created: 2022-12-13 22:45:12
$dictionary['B_Supplier']['fields']['supplier_id']['default']='SLR0000';

 


$dictionary['B_Supplier']['fields']['supplier_id']['displayParams'] = [
    //make sure this field is readonly
    'readonly' => true,
    //hide the id on create views
    'dependency' => 'greaterThan(strlen($supplier_id),0)'
];

?>