/*! 
 * jQuery Steps v1.1.0 - 09/04/2014
 * Copyright (c) 2014 Rafael Staib (http://www.jquery-steps.com)
 * Licensed under MIT http://www.opensource.org/licenses/MIT
 */
function resizeJquerySteps() {
    $('.wizard .content').animate({
       height: $('.body.current').outerHeight()
   }, 'slow');
}

$(window).resize($.debounce(250, resizeJquerySteps));