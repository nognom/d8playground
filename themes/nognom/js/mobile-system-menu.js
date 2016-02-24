(function ($, Drupal, drupalSettings) {
  $('#mobileMenuButton').click(function() {
    $(this).find('.icon').toggleClass('open');
    $(this).parent().find('ul').toggleClass('show');
  });

})(jQuery, Drupal, drupalSettings);
