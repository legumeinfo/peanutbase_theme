<?php
  $sql = "SELECT COUNT(*) FROM {qtl_search}";
  if ($res = chado_query($sql, array())) {
    $row = $res->fetchObject();
    $num_qtl = $row->count;
  }
?>
<h3>Search Arachis QTL</h3>
<p>
  All fields are optional and partial names are accepted. 
  Click column headers to sort.
</p>

<?php 
  if ($num_qtl) {
    echo "Total QTL in PeanutBase: <b>$num_qtl</b><br>";
  }
  
  include_once("sites/all/modules/legume/legume_qtl/theme/templates/views-exposed-form--QTL.tpl.php"); 
?>
