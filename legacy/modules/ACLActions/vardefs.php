<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * MintHCM is a Human Capital Management software based on SuiteCRM developed by MintHCM, 
 * Copyright (C) 2018-2023 MintHCM
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
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
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
 * these Appropriate Legal Notices must retain the display of the "Powered by SugarCRM" 
 * logo and "Supercharged by SuiteCRM" logo and "Reinvented by MintHCM" logo. 
 * If the display of the logos is not reasonably feasible for technical reasons, the 
 * Appropriate Legal Notices must display the words "Powered by SugarCRM" and 
 * "Supercharged by SuiteCRM" and "Reinvented by MintHCM".
 */




$dictionary['ACLAction'] = array('table' => 'acl_actions', 'comment' => 'Determine the allowable actions available to users'
                               ,'fields' => array(
  'id' =>
  array(
    'name' => 'id',
    'vname' => 'LBL_ID',
    'required'=>true,
    'type' => 'id',
    'reportable'=>false,
    'comment' => 'Unique identifier'
  ),
   'date_entered' =>
  array(
    'name' => 'date_entered',
    'vname' => 'LBL_DATE_ENTERED',
    'type' => 'datetime',
    'required'=>true,
    'comment' => 'Date record created'
  ),
  'date_modified' =>
  array(
    'name' => 'date_modified',
    'vname' => 'LBL_DATE_MODIFIED',
    'type' => 'datetime',
    'required'=>true,
    'comment' => 'Date record last modified'
  ),
    'modified_user_id' =>
  array(
    'name' => 'modified_user_id',
    'rname' => 'user_name',
    'id_name' => 'modified_user_id',
    'vname' => 'LBL_MODIFIED',
    'type' => 'assigned_user_name',
    'table' => 'modified_user_id_users',
    'isnull' => 'false',
    'dbType' => 'id',
    'required'=> false,
    'len' => 36,
    'reportable'=>true,
    'comment' => 'User who last modified record'
  ),
    'created_by' =>
  array(
    'name' => 'created_by',
    'rname' => 'user_name',
    'id_name' => 'created_by',
    'vname' => 'LBL_CREATED',
    'type' => 'assigned_user_name',
    'table' => 'created_by_users',
    'isnull' => 'false',
    'dbType' => 'id',
    'len' => 36,
    'comment' => 'User ID who created record'
  ),
   'name' =>
  array(
    'name' => 'name',
    'type' => 'varchar',
    'vname' => 'LBL_NAME',
    'len' => 150,
    'comment' => 'Name of the allowable action (view, list, delete, edit)'
  ),
   'category' =>
  array(
    'name' => 'category',
    'vname' => 'LBL_CATEGORY',
    'type' => 'varchar',
    'len' =>100,
    'reportable'=>true,
    'comment' => 'Category of the allowable action (usually the name of a module)'
  ),
    'acltype' =>
  array(
    'name' => 'acltype',
    'vname' => 'LBL_TYPE',
    'type' => 'varchar',
    'len' =>100,
    'reportable'=>true,
    'comment' => 'Specifier for Category, usually "module"'
  ),
  'aclaccess' =>
  array(
    'name' => 'aclaccess',
    'vname' => 'LBL_ACCESS',
    'type' => 'int',
    'len'=>3,
    'reportable'=>true,
    'comment' => 'Number specifying access priority; highest access "wins"'
  ),
  'deleted' =>
  array(
    'name' => 'deleted',
    'vname' => 'LBL_DELETED',
    'type' => 'bool',
    'reportable'=>false,
    'comment' => 'Record deletion indicator'
  ),
  'roles' =>
  array(
    'name' => 'roles',
    'type' => 'link',
    'relationship' => 'acl_roles_actions',
    'source'=>'non-db',
    'vname'=>'LBL_USERS',
  ),
),
'indices' => array(
       array('name' =>'aclactionid', 'type' =>'primary', 'fields'=>array('id')),
       array('name' =>'idx_aclaction_id_del', 'type' =>'index', 'fields'=>array('id', 'deleted')),
       array('name' =>'idx_category_name', 'type' =>'index', 'fields'=>array('category', 'name')),                                                   )

                            );
