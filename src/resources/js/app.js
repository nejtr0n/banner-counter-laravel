require('./bootstrap');

$(document).ready(function(){
    $( ".counter" ).click(function(e) {
        e.preventDefault();
        $.get( "/api/increment").done(function() {
            $(location).attr('href', $(e.currentTarget).attr("href"));
        });
    });

    (function getCounter() {
        $.get( "/api/getCounter").done(function(data) {
            $(".navbar-brand.abs b").text(data.counter)
        })
        setTimeout(getCounter, 5000);
    })();
});

