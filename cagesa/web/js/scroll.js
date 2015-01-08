/**
 * Created by Francisco Luis Mentado Manzanares on 17/12/2014.
 */

$(document).ready(function () {
    $('a[href*=#]:not([href=#])').click(function (event) {
        event.preventDefault();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            //The target has to be a div element
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').stop().animate({
                        scrollTop: target.offset().top - $(".fixed").height()//fixed is equal to navBar height
                    }, {
                        duration: 2000,
                        easing: "easeInOutQuart"
                    }
                )
            }
        }
    });
    (function () {
//obtained from JQuery UI.
// based on easing equations from Robert Penner (http://www.robertpenner.com/easing)
        var baseEasings = {};
        $.each(["Quad", "Cubic", "Quart", "Quint", "Expo"], function (i, name) {
            baseEasings[name] = function (p) {
                return Math.pow(p, i + 2);
            };
        });
        $.extend(baseEasings, {
            Sine: function (p) {
                return 1 - Math.cos(p * Math.PI / 2);
            },
            Circ: function (p) {
                return 1 - Math.sqrt(1 - p * p);
            },
            Elastic: function (p) {
                return p === 0 || p === 1 ? p :
                -Math.pow(2, 8 * (p - 1)) * Math.sin(( (p - 1) * 80 - 7.5 ) * Math.PI / 15);
            },
            Back: function (p) {
                return p * p * ( 3 * p - 2 );
            },
            Bounce: function (p) {
                var pow2,
                    bounce = 4;

                while (p < ( ( pow2 = Math.pow(2, --bounce) ) - 1 ) / 11) {
                }
                return 1 / Math.pow(4, 3 - bounce) - 7.5625 * Math.pow(( pow2 * 3 - 2 ) / 22 - p, 2);
            }
        });
        $.each(baseEasings, function (name, easeIn) {
            $.easing["easeIn" + name] = easeIn;
            $.easing["easeOut" + name] = function (p) {
                return 1 - easeIn(1 - p);
            };
            $.easing["easeInOut" + name] = function (p) {
                return p < 0.5 ?
                easeIn(p * 2) / 2 :
                1 - easeIn(p * -2 + 2) / 2;
            };
        });

    })();

});
