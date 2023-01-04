<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$relationships = array (
  'b_receipt_modified_user' => 
  array (
    'id' => '5e746178-b2bf-6ad1-1ca0-6399659df6e4',
    'relationship_name' => 'b_receipt_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'B_Receipt',
    'rhs_table' => 'b_receipt',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'b_receipt_created_by' => 
  array (
    'id' => '5fbfbab1-7298-de71-34b2-6399653b9b9a',
    'relationship_name' => 'b_receipt_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'B_Receipt',
    'rhs_table' => 'b_receipt',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'b_receipt_assigned_user' => 
  array (
    'id' => '60c9625a-837c-0b69-4d53-639965299a4d',
    'relationship_name' => 'b_receipt_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'B_Receipt',
    'rhs_table' => 'b_receipt',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'b_list_b_receipt' => 
  array (
    'id' => 'd6abeb2d-07a3-7822-6c0b-639965cdaaff',
    'relationship_name' => 'b_list_b_receipt',
    'lhs_module' => 'B_Receipt',
    'lhs_table' => 'b_receipt',
    'lhs_key' => 'id',
    'rhs_module' => 'B_List',
    'rhs_table' => 'b_list',
    'rhs_key' => 'id',
    'join_table' => 'b_list_b_receipt_c',
    'join_key_lhs' => 'b_list_b_receiptb_receipt_ida',
    'join_key_rhs' => 'b_list_b_receiptb_list_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'b_receipt_b_customer' => 
  array (
    'id' => 'da1004c3-b096-c58b-6763-6399659b5578',
    'relationship_name' => 'b_receipt_b_customer',
    'lhs_module' => 'B_Customer',
    'lhs_table' => 'b_customer',
    'lhs_key' => 'id',
    'rhs_module' => 'B_Receipt',
    'rhs_table' => 'b_receipt',
    'rhs_key' => 'id',
    'join_table' => 'b_receipt_b_customer_c',
    'join_key_lhs' => 'b_receipt_b_customerb_customer_ida',
    'join_key_rhs' => 'b_receipt_b_customerb_receipt_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
);