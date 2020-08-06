(function($, window) {
  $(function() {
           $('#content').focus(function() {
                    $(this).css('background', 'red');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
            $('#train_id').change(function() {
                alert('changed!');
            });
  });
})(jQuery, window);