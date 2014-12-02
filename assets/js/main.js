(function($) {
    Drupal.behaviors.parallax = {
        attach: function(context, settings) {


            $(".foo").click(function(e) {
                event.preventDefault();
                $('.bar').toggleClass('baz')
            });

        }
    };
})(jQuery);