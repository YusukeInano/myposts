(function($, window) {
  $(function() {
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