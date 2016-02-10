(function ($, Drupal, drupalSettings) {

  $('.columns-25-25-slideOut').prepend('<div class="columns-slideOut-open-btn">&nbsp;</div><div class="columns-slideOut-close-btn">X Close</div>');
  $('.columns-25-25-slideOut .section .block').each(function() {
    var blockTitle = $(this).find('h2').text();
    console.log(this);
    $('<div class="pane-slideOut-tab"><div class="pane-slideOut-tab-title">'+blockTitle+' <span class="open-carrot">&lt;</span></div></div>').insertBefore(this);
  });
  $('.columns-slideOut-open-btn, .pane-slideOut-tab-title').click(function() {
    if($(window).width() < 430) {
      $(".columns-slideOut").toggleClass("columns-slideOut-open");
    }
  });
  $(".columns-slideOut-close-btn").click(function() {
    if($(window).width() < 430){
      $(".columns-slideOut").toggleClass("columns-slideOut-open");
    }
  });
})(jQuery, Drupal, drupalSettings);
