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

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.7.1.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'ran',
  'author' => 'Taha',
  'description' => 'This is random package for custom API view',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Random',
  'published_date' => '2017-08-08 06:26:03',
  'type' => 'module',
  'version' => 1502173564,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Random',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ran_StyleGuide',
      'class' => 'ran_StyleGuide',
      'path' => 'modules/ran_StyleGuide/ran_StyleGuide.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'ran_Student',
      'class' => 'ran_Student',
      'path' => 'modules/ran_Student/ran_Student.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'ran_Course',
      'class' => 'ran_Course',
      'path' => 'modules/ran_Course/ran_Course.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'ran_Teacher',
      'class' => 'ran_Teacher',
      'path' => 'modules/ran_Teacher/ran_Teacher.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ran_StyleGuide',
      'to' => 'modules/ran_StyleGuide',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ran_Student',
      'to' => 'modules/ran_Student',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ran_Course',
      'to' => 'modules/ran_Course',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ran_Teacher',
      'to' => 'modules/ran_Teacher',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);