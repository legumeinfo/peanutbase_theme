$(document).ready(function(){
  $(".tripal_toc a").click(
    function(e) {
      var selected_li = $(this).parent();
      var loc = $(this).attr('href');
      var all_tabs = $(".tripal_toc_list > li");
      all_tabs.each(function() {
        $(this).removeClass('tripal_toc_selected');
        $(this).children("a").removeClass('tripal_toc_selected');
      });
      selected_li.addClass('tripal_toc_selected');
//      $(".tripal-info-box").each(function(){$(this).css('display', 'none');});
      $(loc).css('display', 'block');
//      window.location.href = loc;
    });
    
    // Mark first tab as selected
    var first_tab = $(".tripal_toc_list > li:first-child");
    first_tab.addClass('tripal_toc_selected');
  });


/* works
$(document).ready(function(){
  $(".tripal_toc a").click(
    function(e) {
      var selected_li = $(this).parent();
      var loc = $(this).attr('href');
      var all_tabs = $(".tripal_toc_list > li");
      all_tabs.each(function() {
        $(this).removeClass('tripal_toc_selected');
        $(this).children("a").removeClass('tripal_toc_selected');
      });
      selected_li.addClass('tripal_toc_selected');
      window.location.href = loc;
    });
    
    // Mark first tab as selected
    var first_tab = $(".tripal_toc_list > li:first-child");
    first_tab.addClass('tripal_toc_selected');
  });
*/

/*failed attempt at tabs: not picking up any class set initially for li's,
  but working for a's.
  
$(document).ready(function(){
  $(".tripal_toc a").click(
    function(e) {
      var selected_li = $(this);
      var loc = $(this).attr('href');
      var all_tabs = $(".tripal_toc_list > li");
      all_tabs.each(function() {
        $(this).addClass('tripal_toc_unselected');
        $(this).removeClass('tripal_toc_selected');
        $(this).children("a").removeClass('tripal_toc_selected');
      });
      selected_li.addClass('tripal_toc_selected');
      $(document).location.href = loc;
    });
    
    // Set all tabs as unselected
    var all_tabs = $(".tripal_toc_list > li");
    all_tabs.each(function() {
      $(this).addClass('tripal_toc_unselected');
    });
    
    // Mark first tab as selected
    var first_tab = $(".tripal_toc_list > li:first-child");
    var first_tab_a = $(".tripal_toc_list > li:first-child > a");
    first_tab.addClass('tripal_toc_selected');
    first_tab_a.addClass('tripal_toc_selected');
  });
*/