/* 
 * @Author Venkatesh Javaji
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    // Add scrollspy to <body>
    $('body').scrollspy({target: ".navbar", offset: 50});
    $('.departuredate').datepicker(
            {
                showButtonPanel: true, minDate: 0, maxDate: "+12M",
                beforeShow: function () {
                    $(this).datepicker('option', 'maxDate', $('.departuredate').val());
                }
            });
    $('.returndate').datepicker(
            {
                showButtonPanel: true, defaultDate: "+1w", maxDate: "+12M",
                beforeShow: function () {
                    $(this).datepicker('option', 'minDate', $('.departuredate').val());
                    if ($('.departuredate').val() === '')
                        $(this).datepicker('option', 'minDate', 0);
                }
            });

    // Add smooth scrolling on all links inside the navbar
    $("#myNavbar div").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        }  // End if
    });

    $("#oneway").on('click', function (event) {
        $(".multitr").hide();
        $(".oner").show();
        $("#returndate").val("");
        $("#returndate").attr("disabled", "disabled");

    });
    $("#twoway").on('click', function (event) {
        $(".multitr").hide();
        $(".oner").show();

        $("#returndate").removeAttr("disabled");
    });

    /**
     * multi - city option Start
     */
    $("#multiway").on("click", function () {
        $(".oner").hide();
        $(".multitr").show();
    });

    /**
     * multi - city option End
     */
    $('#quotation').on('click', function (event) {
        $('input').removeClass('checkvalid');
        $("#servicetype").removeClass("checkvalid");
        $('.wardiv').fadeOut();
    });
    $('#quotformsub').on('click', function (event) {
        returnval = true;
        firstname = $("#firstname").val();
        email = $("#email").val();
        phone = $("#phone").val();
        service = $("#servicetype").val();
        fromcity = $("#fromcity").val();
        tocity = $("#tocity").val();
        departuredate = $("#departuredate").val();
        returndate = $("#returndate").val();

        if (firstname == "" || firstname.length <= 0) {
            returnval = false;
            $("#firstname").addClass("checkvalid");
        }
        if (!validateEmail(email)) {
            returnval = false;
            $("#email").addClass("checkvalid");
        }
        if (phone == "" || phone.length <= 0) {
            returnval = false;
            $("#phone").addClass("checkvalid");
        }
        if (service == "" || service.length <= 0) {
            returnval = false;
            $("#servicetype").addClass("checkvalid");
        }


        if ($("#oneway").is(":checked")) {
            if (departuredate == "" || departuredate.length <= 0) {
                returnval = false;
                $("#departuredate").addClass("checkvalid");
            }
            returnval = checkFromToCity(fromcity, tocity);
        }

        if ($("#twoway").is(":checked")) {
            returnval = checkFromToCity(fromcity, tocity);
            if (departuredate == "" || departuredate.length <= 0) {
                returnval = false;
                $("#departuredate").addClass("checkvalid");
            }
            if (returndate < departuredate) {
                returnval = false;
                $("#departuredate").addClass("checkvalid");
                $("#returndate").addClass("checkvalid");
            }

            if (returndate == "" || returndate.length <= 0) {
                returnval = false;
                $("#returndate").addClass("checkvalid");
            }
        }

        if ($("#multiway").is(":checked")) {
            fromcity1 = $("#fromcity1").val();
            tocity1 = $("#tocity1").val();
            departuredate1 = $("#departuredate1").val();

            if (fromcity1 == "" || fromcity1.length <= 0) {
                returnval = false;
                $("#fromcity1").addClass("checkvalid");
            }
            if (tocity1 == "" || tocity1.length <= 0) {
                returnval = false;
                $("#tocity1").addClass("checkvalid");
            }
            if (departuredate1 == "" || departuredate1.length <= 0) {
                returnval = false;
                $("#departuredate1").addClass("checkvalid");
            }
        }


        if (returnval == false) {
            $(".wardiv").fadeIn();
        }
        return returnval;

    });

    checkFromToCity = function (fromc, toc) {
        if (fromc == "" || fromc.length <= 0) {
            returnval = false;
            $("#fromcity").addClass("checkvalid");
        }
        if (toc === "" || toc.length <= 0) {
            returnval = false;
            $("#tocity").addClass("checkvalid");
        }
        return returnval;
    }

    var $radios = $('input:radio[name=optradio]');
    if ($radios.is(':checked') === false) {
        $radios.filter('[value=one]').prop('checked', true);
    }
    $("#returndate").attr("disabled", "disabled");
    
    //horizontal scroll function
    (function slide() {
        $('#clientsSlider').animate({backgroundPosition: '-=2px'}, 70, 'linear', slide);
    })();

});

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


$(function () {
    $(".autocomplete").autocomplete({
        //cityCountryAirportCode value should be fetched from airportList.js file
        source: function (request, response) {
            var results = $.ui.autocomplete.filter(cityCountryAirportCode, request.term);
            response(results.slice(0, 10));
        }

    });

});

$(window).load(function () {

});