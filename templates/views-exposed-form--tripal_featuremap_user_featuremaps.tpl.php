<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
 
  // collapsable div support
  drupal_add_library('system', 'drupal.collapse');
?>
<script type="text/javascript" src="https://peanutbase-dev.usda.iastate.edu/misc/collapse.js?v=7.59"></script>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>
<h2>Map Search</h2>
Please enter text for the name and/or description for a map and click "Search". 
For example, search for "SunOleic" or "duranensis".
<fieldset class=" collapsible collapsed">
  <legend>
    <span class="fieldset-legend"><a href="#" class="fieldset-title">About the map names...</a></span> 
  </legend>
  <div  class="fieldset-wrapper">
    <p> 
      Most maps are renamed differently from their published names. This is to make them
      more easily identifiable by ploidy, genome, and parents. 
    </p>
    <p>The Map names are 
      constructed from: [ploidy/genome]_[parent1]_x_[parent2]_[a..z], for example, 
      TT_Tifrunner_x_GT-C20_a has ploidy/genome T (tetraploid) in both parents, 
      Tifrunner is parent 1, and GT-C20 is parent 2. The a indicates that this is the 
      first map loaded derived from the parents used to produce this mapping population.
      Another example is AA_A.duranensis_x_A.duranensis_a. This indicates that the map
      includes the A genome, and both parents are from the species <i>A. duranensis</i>.
    </p>
  </div>
</fieldset>
Leave both fields empty and click search to see a list of all maps.
<div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
    <?php foreach ($widgets as $id => $widget): ?>
      <div id="<?php print $widget->id; ?>-wrapper" class="views-exposed-widget views-widget-<?php print $id; ?>">
        <?php if (!empty($widget->label)): ?>
          <label for="<?php print $widget->id; ?>">
            <?php print $widget->label; ?>
          </label>
        <?php endif; ?>
        <?php if (!empty($widget->operator)): ?>
          <div class="views-operator">
            <?php print $widget->operator; ?>
          </div>
        <?php endif; ?>
        <div class="views-widget">
          <?php print $widget->widget; ?>
        </div>
        <?php if (!empty($widget->description)): ?>
          <div class="description">
            <?php print $widget->description; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
    <?php if (!empty($sort_by)): ?>
      <div class="views-exposed-widget views-widget-sort-by">
        <?php print $sort_by; ?>
      </div>
      <div class="views-exposed-widget views-widget-sort-order">
        <?php print $sort_order; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($items_per_page)): ?>
      <div class="views-exposed-widget views-widget-per-page">
        <?php print $items_per_page; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($offset)): ?>
      <div class="views-exposed-widget views-widget-offset">
        <?php print $offset; ?>
      </div>
    <?php endif; ?>
    <div class="views-exposed-widget views-submit-button">
      <?php print $button; ?>
    </div>
    <?php if (!empty($reset_button)): ?>
      <div class="views-exposed-widget views-reset-button">
        <?php print $reset_button; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
