window.slider = $('#slider').cardSlider({
    slideTag: 'div',
    slideClass: 'slide',
    current: 1,
    followingClass: 'slider-content-6',
    delay: 300,
    transition: 'ease',
    onBeforeMove: function(slider, onMove) {
        console.log('onBeforeMove')
        onMove()
    },
    onMove: function(slider, onAfterMove) {
        onAfterMove()
    },
    onAfterMove: function() {
        console.log('onAfterMove')
    },
    onAfterTransition: function() {
        console.log('onAfterTransition')
    },
    onCurrent: function() {
        console.log('onCurrent')
    }
})


var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();