<?php
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
$dictionary['ExitInterviews'] = array(
    'table' => 'exitinterviews',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'date_start' =>
        array(
            'required' => false,
            'name' => 'date_start',
            'vname' => 'LBL_DATE_START',
            'type' => 'datetimecombo',
            'massupdate' => '1',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'inline_edit' => '',
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
            'dbType' => 'datetime',
            'validation' => array('type' => 'isbefore', 'compareto' => 'date_end'),
        ),
        'date_end' =>
        array(
            'required' => false,
            'name' => 'date_end',
            'vname' => 'LBL_DATE_END',
            'type' => 'datetimecombo',
            'massupdate' => '1',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'inline_edit' => '',
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
            'dbType' => 'datetime',
        ),
        'status' =>
        array(
            'required' => false,
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'type' => 'ColoredEnum',
            'dbType' => 'varchar',
            'massupdate' => '1',
            'default' => 'planned',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'inline_edit' => '',
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => 100,
            'size' => '20',
            'options' => 'exit_interview_status_list',
            'options_colors' => 'exit_interview_status_list_colored',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'meetings' =>
        array(
            'name' => 'meetings',
            'type' => 'link',
            'relationship' => 'exitinterviews_meetings',
            'source' => 'non-db',
            'module' => 'Meetings',
            'bean_name' => 'Meeting',
            'vname' => 'LBL_MEETINGS',
        ),
        'documents' =>
        array(
            'name' => 'documents',
            'type' => 'link',
            'relationship' => 'exitinterviews_documents',
            'source' => 'non-db',
            'module' => 'Documents',
            'bean_name' => 'Document',
            'vname' => 'LBL_DOCUMENTS',
        ),
        'offboarding' =>
        array(
            'name' => 'offboarding',
            'type' => 'link',
            'relationship' => 'exitinterviews_offboardings',
            'source' => 'non-db',
            'module' => 'Offboardings',
            'bean_name' => 'Offboardings',
            'vname' => 'LBL_OFFBOARDINGS',
            'id_name' => 'offboarding_id',
        ),
        'offboarding_name' =>
        array(
            'name' => 'offboarding_name',
            'type' => 'relate',
            'source' => 'non-db',
            'vname' => 'LBL_OFFBOARDING_NAME',
            'save' => true,
            'id_name' => 'offboarding_id',
            'link' => 'offboarding',
            'table' => 'offboardings',
            'module' => 'Offboardings',
            'rname' => 'name',
            'required' => false,
        ),
        'offboarding_id' =>
        array(
            'name' => 'offboarding_id',
            'type' => 'link',
            'relationship' => 'exitinterviews_offboardings',
            'reportable' => false,
            'vname' => 'LBL_OFFBOARDING_ID',
            'dbType' => 'id',
        ),
    ),
    'relationships' => array(
        'exitinterviews_offboardings' =>
        array(
            'lhs_module' => 'Offboardings',
            'lhs_table' => 'offboardings',
            'lhs_key' => 'id',
            'rhs_module' => 'ExitInterviews',
            'rhs_table' => 'exitinterviews',
            'rhs_key' => 'offboarding_id',
            'relationship_type' => 'one-to-many',
        ),
    ),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('ExitInterviews', 'ExitInterviews',
    array(
    'basic',
    'assignable',
    'employee_related',
    'security_groups'
    )
);
