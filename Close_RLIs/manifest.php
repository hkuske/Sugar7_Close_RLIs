<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    '7.*.*',
    '8.*.*',
    '9.*.*',
    '10.*.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    'ENT',
    'ULT',
  ),
  'readme' => '',
  'key' => '',
  'author' => 'kuske',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Close_RLIs',
  'published_date' => '2020-05-04 00:00:00',
  'type' => 'module',
  'version' => 2020050400,
  'remove_tables' => 'false',
);

$installdefs = array (
  'id' => 'Close_RLIs',
  'language' => 
  array (
    0=> 
    array (
      'from' => '<basepath>/SugarModules/include/language/en_us.record_close.php',
      'to_module' => 'Opportunities',
      'language' => 'en_us',
    ),
    1=> 
    array (
      'from' => '<basepath>/SugarModules/include/language/de_DE.record_close.php',
      'to_module' => 'Opportunities',
      'language' => 'de_DE',
    ),
  ),

  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/custom/',
      'to' => 'custom/',
    ),
  ),
);