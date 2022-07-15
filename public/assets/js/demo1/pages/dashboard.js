"use strict";

// Class definition
var KTDashboard = function() {


    return {
        // Init demos
        init: function() {

            $('.kt-selectpicker').selectpicker();
            
            // demo loading
            var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': 'Loading ...'});
            loading.show();

            setTimeout(function() {
                loading.hide();
            }, 3000);
        }
    };
}();

// Class initialization on page load
jQuery(document).ready(function() {
    KTDashboard.init();
});