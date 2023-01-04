<?php

$dictionary['B_Supplier']['fields']['supplier_id']['displayParams'] = [
    //make sure this field is readonly
    'readonly' => true,
    //hide the id on create views
    'dependency' => 'greaterThan(strlen($supplier_id),0)'
];
