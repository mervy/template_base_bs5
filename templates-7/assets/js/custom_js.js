/*back to top */
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#totop').fadeIn();
            } else {
                $('#totop').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#totop').click(function () {
            $('#totop').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#totop').tooltip('show');

});
/* end back to top */


