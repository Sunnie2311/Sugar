<?php
// created: 2022-12-15 12:43:06
$dictionary["B_Invoice"]["fields"]["b_invoice_b_receipt"] = array (
  'name' => 'b_invoice_b_receipt',
  'type' => 'link',
  'relationship' => 'b_invoice_b_receipt',
  'source' => 'non-db',
  'module' => 'B_Receipt',
  'bean_name' => 'B_Receipt',
  'vname' => 'LBL_B_INVOICE_B_RECEIPT_FROM_B_RECEIPT_TITLE',
  'id_name' => 'b_invoice_b_receiptb_receipt_idb',
);
$dictionary["B_Invoice"]["fields"]["b_invoice_b_receipt_name"] = array (
  'name' => 'b_invoice_b_receipt_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_INVOICE_B_RECEIPT_FROM_B_RECEIPT_TITLE',
  'save' => true,
  'id_name' => 'b_invoice_b_receiptb_receipt_idb',
  'link' => 'b_invoice_b_receipt',
  'table' => 'b_receipt',
  'module' => 'B_Receipt',
  'rname' => 'name',
);
$dictionary["B_Invoice"]["fields"]["b_invoice_b_receiptb_receipt_idb"] = array (
  'name' => 'b_invoice_b_receiptb_receipt_idb',
  'type' => 'link',
  'relationship' => 'b_invoice_b_receipt',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_B_INVOICE_B_RECEIPT_FROM_B_RECEIPT_TITLE',
);
