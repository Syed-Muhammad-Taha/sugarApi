<?php
// created: 2017-08-08 11:28:29
$dictionary["ran_styleguide_ran_course_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ran_styleguide_ran_course_1' => 
    array (
      'lhs_module' => 'ran_StyleGuide',
      'lhs_table' => 'ran_styleguide',
      'lhs_key' => 'id',
      'rhs_module' => 'ran_Course',
      'rhs_table' => 'ran_course',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ran_styleguide_ran_course_1_c',
      'join_key_lhs' => 'ran_styleguide_ran_course_1ran_styleguide_ida',
      'join_key_rhs' => 'ran_styleguide_ran_course_1ran_course_idb',
    ),
  ),
  'table' => 'ran_styleguide_ran_course_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'ran_styleguide_ran_course_1ran_styleguide_ida' => 
    array (
      'name' => 'ran_styleguide_ran_course_1ran_styleguide_ida',
      'type' => 'id',
    ),
    'ran_styleguide_ran_course_1ran_course_idb' => 
    array (
      'name' => 'ran_styleguide_ran_course_1ran_course_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ran_styleguide_ran_course_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ran_styleguide_ran_course_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ran_styleguide_ran_course_1ran_styleguide_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ran_styleguide_ran_course_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ran_styleguide_ran_course_1ran_course_idb',
      ),
    ),
  ),
);