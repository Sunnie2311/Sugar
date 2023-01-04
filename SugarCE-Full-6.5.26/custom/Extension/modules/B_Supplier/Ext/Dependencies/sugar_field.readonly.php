<?php

/*  This will make a field readonly. Create this file here:
    /custom/Extension/modules/MODULE/Ext/Dependencies/
    and then Quick Repair/Rebuild */

$dependencies['B_Supplier']['supplier_id_readonly'] = array(
    'hooks' => array('edit'),
    'trigger' => 'true',
    'triggerFields' => array('supplier_id'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'supplier_id',
                'value' => 'false',
            ),
        ),
    ),
);