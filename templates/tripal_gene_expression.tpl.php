<?php
  $feature = $variables['node']->feature;
  
  $options = array('return_array' => true);
  $feature = chado_expand_var($feature, 'table', 'feature_relationship', $options);
//  $feature = chado_expand_var($feature, 'table', 'feature_relationshipprop', $options);
  $feature_relationships = $feature->feature_relationship;
  foreach ($feature_relationships as $fr) {
    $fr = chado_expand_var($fr, 'table', 'feature_relationshipprop', $options);
    $frp = $fr[0]->feature_relationshipprop;
    if ($frp->value == 'Tissue expression atlas transcripts mapping') {
//echo "<pre>";var_dump($fr[0]->object_id);echo "</pre>";
      $gene_model = $fr[0]->subject_id->name;
      $transcript = $fr[0]->object_id->name;
    }
  }//each feature_relationship

  if ($transcript) {
    $url  = 'http://bar.utoronto.ca/efp_arachis/cgi-bin/efpWeb.cgi';
    $url .= '?dataSource=Arachis_Atlas&modeInput=Absolute';
    $url .= "&primaryGene=$transcript";
    
    $img  = 'http://bar.utoronto.ca/webservices/efp_webservices/cgi-bin/get_arachisefp_image.cgi';
    $img .= "?request={\"geneid\":\"$transcript\"}";
?>
    <div>
      <p>
        Gene expression for <b><?php echo $gene_model?></b> has been determined by its associated
        transcript, <b><?php echo $transcript?></b> in the transcript assemblies 
        from
        <a href="http://journal.frontiersin.org/article/10.3389/fpls.2016.01446/full">Clevenger 
        et al. 2016</a>. 
        Visualization of expression is provided by the eFP browser 
         (<a href="http://dx.doi.org/10.1371/journal.pone.0000718">Winter et al. 2007</a>). 
         Click the image to explore gene expression data for peanut.
      </p>
      <a href='<?php echo $url ?>'>
        <img src='<?php echo $img ?>'>
      </a>
    </div>
<?php }


