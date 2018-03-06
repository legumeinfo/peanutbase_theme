<?php

/**
 * @file
 *
 * Override blast_ui entry page for PeanutBase.
 */

?>

<h1> BLAST Search </h1>
<p>
  Search for one or more of your sequences (using BLAST) against the
  genome sequences for cultivated peanut v. Tifrunner (<i>A. hypogaea</i>),
  or its two wild progenitor species, <i>A. duranensis</i> and <i>A. ipaensis</i>.
</p>
<p> 
  Select the program for your query and target types below, then set search parameters on the next page.
</p>

<table>
  <tr>
    <th>Query Type</th>
    <th>Database Type</th>
    <th>BLAST Program</th>
  </tr>
  <tr>
    <td rowspan = "2">Nucleotide</td> 
    <td>Nucleotide</td> 
    <td><?php print l('blastn', './blast/nucleotide/nucleotide');?>:
      Search a nucleotide database using a nucleotide query.</td>
  </tr>
  <tr>
    <td>Protein</td>
    <td><?php print l('blastx', './blast/nucleotide/protein');?>:
      Search protein database using a translated nucleotide query.</td>
  </tr>
  <tr>
    <td rowspan="2">Protein</td>
    <td>Nucleotide</td> 
    <td><?php print l('tblastn', './blast/protein/nucleotide');?>:
      Search translated nucleotide database using a protein query.</td>
  </tr>
  <tr>
    <td>Protein</td>
    <td><?php print l('blastp', './blast/protein/protein');?>:
      Search protein database using a protein query.</td>
  </tr> 
</table>

<?php print theme('blast_recent_jobs', array()); ?>
