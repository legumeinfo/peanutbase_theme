<?php
// CUSTOMIZATIONS:
//  - list only linkage groups
//  - no pager
//  - assumes linkage groups, so gets all featurepos records for 
//      map_feature_id=linkage group, then calculates start/stop positions
//  - add CMap link to linkage group table

include_once(drupal_get_path('module', 'legume_featuremap') . '/theme/templates/tripal_featuremap_featurepos.tpl.php');


