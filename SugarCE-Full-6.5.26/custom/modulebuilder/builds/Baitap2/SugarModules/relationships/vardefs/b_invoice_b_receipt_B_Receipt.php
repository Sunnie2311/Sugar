<?php
// created: 2022-12-15 12:43:06
$dictionary["B_Receipt"]["fields"]["b_invoice_b_receipt"] = array (
  'name' => 'b_invoice_b_receipt',
  'type' => 'link',
  'relationship' => 'b_invoice_b_receipt',
  'source' => 'non-db',
  'module' => 'B_Invoice',
  'bean_name' => false,
  'vname' => 'LBL_B_INVOICE_B_RECEIPT_FROM_B_INVOICE_TITLE',
  'id_name' => 'b_invoice_b_receiptb_invoice_ida',
);
$dictionary["B_Receipt"]["fields"]["b_invoice_b_receipt_name"] = array (
  'name' => 'b_invoice_b_receipt_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_INVOICE_B_RECEIPT_FROM_B_INVOICE_TITLE',
  'save' => true,
  'id_name' => 'b_invoice_b_receiptb_invoice_ida',
  'link' => 'b_invoice_b_receipt',
  'table' => 'b_invoice',
  'module' => 'B_Invoice',
  'rname' => 'name',
);
$dictionary["B_Receipt"]["fields"]["b_invoice_b_receiptb_invoice_ida"] = array (
  'name' => 'b_invoice_b_receiptb_invoice_ida',
  'type' => 'link',
  'relationship' => 'b_invoice_b_receipt',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_B_INVOICE_B_RECEIPT_FROM_B_INVOICE_TITLE',
);
