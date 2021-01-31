(function ($) {

	"use strict";


	/*filter activation*/
	var filtercontiner = document.querySelector('[data-ref="filtercontiner"]');
            var minSizeRangeInput = document.querySelector('[name="minSize"]');
            var maxSizeRangeInput = document.querySelector('[name="maxSize"]');

            var mixer = mixitup(filtercontiner, {
                animation: {
                    duration: 350
                },
                selectors: {
				   control: 'li.control'
				}
            });

})(jQuery);