(function($) {

  var viewButtons = $('#view-swap > button')
    , contentViews = $('.content-view')

    ;


  console.debug(viewButtons);


  /**
   * Swap content sections when clicked
   * @return {[type]}   [description]
   */
  viewButtons.on('click', function() {

    var $this = $(this);

    // Remove active states from both views
    viewButtons.removeClass('active');
    contentViews.removeClass('active');

    // Add active to the corresponding elements
    $this.addClass('active');
    $('.view-' + $this.text().toLowerCase()).addClass('active');

    return false;
  });


})(jQuery);
