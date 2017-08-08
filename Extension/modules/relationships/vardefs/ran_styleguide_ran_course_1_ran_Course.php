<?php
// created: 2017-08-08 11:28:29
$dictionary["ran_Course"]["fields"]["ran_styleguide_ran_course_1"] = array (
  'name' => 'ran_styleguide_ran_course_1',
  'type' => 'link',
  'relationship' => 'ran_styleguide_ran_course_1',
  'source' => 'non-db',
  'module' => 'ran_StyleGuide',
  'bean_name' => 'ran_StyleGuide',
  'side' => 'right',
  'vname' => 'LBL_RAN_STYLEGUIDE_RAN_COURSE_1_FROM_RAN_COURSE_TITLE',
  'id_name' => 'ran_styleguide_ran_course_1ran_styleguide_ida',
  'link-type' => 'one',
);
$dictionary["ran_Course"]["fields"]["ran_styleguide_ran_course_1_name"] = array (
  'name' => 'ran_styleguide_ran_course_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RAN_STYLEGUIDE_RAN_COURSE_1_FROM_RAN_STYLEGUIDE_TITLE',
  'save' => true,
  'id_name' => 'ran_styleguide_ran_course_1ran_styleguide_ida',
  'link' => 'ran_styleguide_ran_course_1',
  'table' => 'ran_styleguide',
  'module' => 'ran_StyleGuide',
  'rname' => 'name',
);
$dictionary["ran_Course"]["fields"]["ran_styleguide_ran_course_1ran_styleguide_ida"] = array (
  'name' => 'ran_styleguide_ran_course_1ran_styleguide_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RAN_STYLEGUIDE_RAN_COURSE_1_FROM_RAN_COURSE_TITLE_ID',
  'id_name' => 'ran_styleguide_ran_course_1ran_styleguide_ida',
  'link' => 'ran_styleguide_ran_course_1',
  'table' => 'ran_styleguide',
  'module' => 'ran_StyleGuide',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
