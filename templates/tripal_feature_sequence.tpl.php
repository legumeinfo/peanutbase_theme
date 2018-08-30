<?php
$feature = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  // don't load
}
else if (strcmp($feature->type_id->name, 'gene') == 0 ) {
  include_once(drupal_get_path('module', 'tripal_gene') . '/theme/templates/tripal_gene_sequence.tpl.php');
}
else {
  include_once(drupal_get_path('module', 'tripal_feature') . '/theme/templates/tripal_feature_sequence.tpl.php');
}
