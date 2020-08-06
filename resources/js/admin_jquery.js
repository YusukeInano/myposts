(function($, window) {
  $(function() {
           $('#content').focus(function() {
                    $(this).css('background', '#FFEEFF');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
            $('#title').focus(function() {
                    $(this).css('background', '#FFEEFF');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
            $('#search_results').focus(function() {
                    $(this).css('background', '#FFEEFF');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
             $('#address').focus(function() {
                    $(this).css('background', '#FFEEFF');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
                
  });
})(jQuery, window);