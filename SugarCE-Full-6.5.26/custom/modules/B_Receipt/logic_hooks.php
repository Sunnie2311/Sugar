<?php
$hook_version = 1;


$hook_array['before_save'][] = array(1, "increase_id_receipt", 'custom/modules/B_Receipt/increase_id_receipt.php', 'id_receipt', 'increase_id_receipt');
$hook_array['before_save'][] = array(1, "display_invoice", 'custom/modules/B_Receipt/display_invoice.php', 'display', 'display_invoice');
?>
