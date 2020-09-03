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
             $('#name').focus(function() {
                    $(this).css('background', '#FFEEFF');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
             $('#address1').focus(function() {
                    $(this).css('background', '#FFEEFF');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
             $('#address2').focus(function() {
                    $(this).css('background', '#FFEEFF');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
             $('#introduction').focus(function() {
                    $(this).css('background', '#FFEEFF');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
             $('#child_age').focus(function() {
                    $(this).css('background', '#FFEEFF');
                }).blur(function() {
                    $(this).css('background', 'white');
                });
            
              $.fn.useSound = function (_event, _id) {
                 var se = $(_id);
                 this.on(_event, function(){
                 se[0].currentTime = 0;
                 se[0].play();
                });
                    return this;
                };
                
  });
})(jQuery, window);