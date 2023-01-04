<?php
$popupMeta = array (
    'moduleMain' => 'B_Customer',
    'varName' => 'B_Customer',
    'orderBy' => 'b_customer.name',
    'whereClauses' => array (
  'name' => 'b_customer.name',
),
    'searchInputs' => array (
  0 => 'b_customer_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'CUSTOMER_ID' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CUSTOMER_ID',
    'width' => '10%',
  ),
  'CUSTOMER_PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_CUSTOMER_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'CUSTOMER_EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CUSTOMER_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
),
);
