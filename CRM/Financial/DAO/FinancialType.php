<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Financial/FinancialType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:760550280aaa0da48232ebdfb11170f9)
 */

/**
 * Database access object for the FinancialType entity.
 */
class CRM_Financial_DAO_FinancialType extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_financial_type';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * ID of original financial_type so you can search this table by the financial_type.id and then select the relevant version based on the timestamp
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Financial Type Name.
   *
   * @var string
   */
  public $name;

  /**
   * Financial Type Description.
   *
   * @var string
   */
  public $description;

  /**
   * Is this financial type tax-deductible? If true, contributions of this type may be fully OR partially deductible - non-deductible amount is stored in the Contribution record.
   *
   * @var boolean
   */
  public $is_deductible;

  /**
   * Is this a predefined system object?
   *
   * @var boolean
   */
  public $is_reserved;

  /**
   * Is this property active?
   *
   * @var boolean
   */
  public $is_active;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_financial_type';
    parent::__construct();
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type ID'),
          'description' => ts('ID of original financial_type so you can search this table by the financial_type.id and then select the relevant version based on the timestamp'),
          'required' => TRUE,
          'table_name' => 'civicrm_financial_type',
          'entity' => 'FinancialType',
          'bao' => 'CRM_Financial_BAO_FinancialType',
          'localizable' => 0,
        ],
        'financial_type' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Financial Type'),
          'description' => ts('Financial Type Name.'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'import' => TRUE,
          'where' => 'civicrm_financial_type.name',
          'headerPattern' => '/(finan(cial)?)?type/i',
          'dataPattern' => '/donation|member|campaign/i',
          'export' => TRUE,
          'table_name' => 'civicrm_financial_type',
          'entity' => 'FinancialType',
          'bao' => 'CRM_Financial_BAO_FinancialType',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
            'label' => ts("Name"),
          ],
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Description'),
          'description' => ts('Financial Type Description.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_financial_type',
          'entity' => 'FinancialType',
          'bao' => 'CRM_Financial_BAO_FinancialType',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
            'label' => ts("Description"),
          ],
        ],
        'is_deductible' => [
          'name' => 'is_deductible',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Tax Deductible?'),
          'description' => ts('Is this financial type tax-deductible? If true, contributions of this type may be fully OR partially deductible - non-deductible amount is stored in the Contribution record.'),
          'default' => '1',
          'table_name' => 'civicrm_financial_type',
          'entity' => 'FinancialType',
          'bao' => 'CRM_Financial_BAO_FinancialType',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
            'label' => ts("Tax-Deductible?"),
          ],
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Financial Type is Reserved?'),
          'description' => ts('Is this a predefined system object?'),
          'table_name' => 'civicrm_financial_type',
          'entity' => 'FinancialType',
          'bao' => 'CRM_Financial_BAO_FinancialType',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
            'label' => ts("Reserved?"),
          ],
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Financial Type Is Active?'),
          'description' => ts('Is this property active?'),
          'table_name' => 'civicrm_financial_type',
          'entity' => 'FinancialType',
          'bao' => 'CRM_Financial_BAO_FinancialType',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
            'label' => ts("Enabled?"),
          ],
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'financial_type', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'financial_type', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_id' => [
        'name' => 'UI_id',
        'field' => [
          0 => 'id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_financial_type::1::id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
