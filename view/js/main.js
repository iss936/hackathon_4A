// For more information about "use strict",
// Please go to http://stackoverflow.com/questions/1335851/what-does-use-strict-do-in-javascript-and-what-is-the-reasoning-behind-it
"use strict";

$(document).ready(function() {
    // Checkboxes and Radio Buttons
    $('.fa').click(function() {
        if ($(this).hasClass('radio-type')) { // Radio Button
            if ($(this).hasClass('fa-circle-o')) {
                $('.radio-type').each(function() {
                    $(this).removeClass('fa-dot-circle-o').css('color', '#333').addClass('fa-circle-o');
                });
                $(this).removeClass('fa-circle-o').css('color', '#34C78A').addClass('fa-dot-circle-o');
            }
        } else { // Checkbox
            if ($(this).hasClass('fa-check-circle-o'))
                $(this).removeClass('fa-check-circle-o').css('color', '#333').addClass('fa-circle-o');
            else if ($(this).hasClass('fa-circle-o'))
                $(this).removeClass('fa-circle-o').css('color', '#34C78A').addClass('fa-check-circle-o');
        }
    });

    // Checkbox and Radio Button Label
    $('.checkbox-label, .radio-label').click(function(event) {
        event.preventDefault();
        $(this).prev().trigger('click');
    });

    // Edit Ticket
    $('.edit-ticket').click(function(){
        $('.edit-form').slideToggle();
        $(this).toggleClass('fa-pencil fa-pencil-square');
    });

    // Filter Section
    $('.filter button').click(function() {
        $('.filter button').each(function() { $(this).removeClass('active'); });
        $(this).addClass('active');
    });

    // Sort Section
    $('.sort button').click(function() {
        if ($(this).hasClass('active')) { // ASC, DESC
            if ($(this).children().hasClass('fa-sort-asc'))
                $(this).children().removeClass('fa-sort-asc').addClass('fa-sort-desc');
            else
                $(this).children().removeClass('fa-sort-desc').addClass('fa-sort-asc');
        } else { // Active this
            $('.sort button').each(function() { $(this).removeClass('active'); });
            $(this).addClass('active');
        }
    });

    // Pagination
    $('.pagination a').click(function(event) {
        event.preventDefault();
        if ($(this).parent().hasClass('disabled'))
            return;

        if ($(this).html() == '«') {
            $('.pagination li.active').removeClass('active').prev().addClass('active');
            $('.pagination li:last-child').removeClass('disabled');
            if ($('.pagination li.active').children().html() == 1)
                $(this).parent().addClass('disabled');
            return;
        }

        if ($(this).html() == '»') {
            $('.pagination li.active').removeClass('active').next().addClass('active');
            $('.pagination li:first-child').removeClass('disabled');
            if ($('.pagination li.active').children().html() == 5)
                $(this).parent().addClass('disabled');
            return;
        }

        $('.pagination li:first-child').toggleClass('disabled', $(this).html() == 1);
        $('.pagination li:last-child').toggleClass('disabled', $(this).html() == 5);

        $('.pagination li').each(function() { $(this).removeClass('active'); });
        $(this).parent().addClass('active');
    });

    // Rating
    if ( $('.stars').length ) {
        var rate = 3; // Initialize Value
        // Color Stars Point to Rate
        var init = function(rate) {
            // Empty All Stars
            $('.stars').children().removeClass('fa-star').addClass('fa-star-o');

            // Set All Stars to Array
            var stars = [];
            var star = $('.stars').children(':first-child');
            stars[0] = star;
            while(star.next().length != 0) {
                stars.push( star.next() );
                star = star.next();
            }

            // Color Stars Point to Rate
            for (var i = 0; i < rate; i++) {
                stars[i].removeClass('fa-star-o').addClass('fa-star');
            }
        }

        init(rate);

        $('.stars').hover(function() {
            init(rate);
        });

        $('.stars i').hover(function() {
            // Color All Stars
            $('.stars').children().removeClass('fa-star-o').addClass('fa-star');

            // Empty from this Star until End
            var star = $(this);
            while(star.next().length != 0) {
                star = star.next();
                star.removeClass('fa-star').addClass('fa-star-o');
            }
        });

        $('.stars i').click(function() {
            // Change Rate
            rate = $('.stars').find('i.fa-star').length;
            init(rate);
        });
    }

    // Accordion
    $('.accordion h4.panel-title a').click(function() {
        $(this).parents('.accordion').find('h4.panel-title i').removeClass('fa-minus').addClass('fa-plus');
        $(this).prev().addClass('fa-minus');
    });

    // Google Map
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
            center: new google.maps.LatLng(38.0000,-90.0000),
            zoom: 4,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        new google.maps.Marker({ position: new google.maps.LatLng(40.6700,-73.9400), map: map, title: 'New York Office' });
        new google.maps.Marker({ position: new google.maps.LatLng(40.0000,-74.5000), map: map, title: 'New Jersey Office' });
        new google.maps.Marker({ position: new google.maps.LatLng(37.0000,-120.0000), map: map, title: 'California Office' });
        new google.maps.Marker({ position: new google.maps.LatLng(39.0000,-117.0000), map: map, title: 'Nevada Office' });
    }

    if ( $('.map-canvas').length ) {
        google.maps.event.addDomListener(window, 'load', initialize);
    }

    // Login
    $('#login').click(function(event) {
        event.preventDefault();
        window.location = 'tickets.html';
    });

    // New Tickets
    $('#new-ticket').click(function() {
        window.location = 'tickets_register.html';
    });

    // Edit Tickets
    $('#edit-tickets').click(function() {
        window.location = 'tickets_edit.html';
    });

    // Up
    $('.up').click(function() {
        $('html,body').animate({ scrollTop: 0 });
    });

    // Newsletter
    $('.newsletter').click(function(event) {
        event.preventDefault();
        $.post("newsletter.php", { email :  $('.newsletter').prev().val() },
            function(data, status) {
                alert(status == "success" ? "Your email added to our list successfully." : "ERROR: " + status);
            }
        );
    });

    // Drop Down
    if ( $('.selectpicker').length )
        $('.selectpicker').selectpicker();
});