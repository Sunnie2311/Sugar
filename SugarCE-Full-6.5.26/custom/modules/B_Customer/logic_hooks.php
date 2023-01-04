<?php
$hook_version = 1;

$hook = array();
$hook_array['before_save'][] = array(1, "increase_id_customer", 'custom/modules/B_Customer/increase_id_customer.php', 'id_customer', 'increase_id_customer');


?>
