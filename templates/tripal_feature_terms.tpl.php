<?php
$feature = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'QTL') == 0 ) {
//eksc- trait tab is redundant
//  include_once('sites/all/modules/legume/legume_qtl/theme/templates/tripal_feature_QTL_trait.tpl.php');
}
else if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  // don't load
}
else {
  include_once(drupal_get_path('module', 'tripal_feature') . '/theme/templates/tripal_feature_terms.tpl.php');
}
