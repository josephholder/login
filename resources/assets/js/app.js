
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//toggle function for mobile
$(document).ready(function () {
    $('#dropdownMobile').click(function (){
        console.log('it works');
        $('#menuDropdown').toggle();
    });
});

$(document).ready(function() {
    $('#photoimg').on('change', function() {
        $("#preview").html('');
        $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
        $("#imageform").ajaxForm({
            target: '#preview'
        }).submit();
        setTimeout(function(){
            window.location.reload(false);
        }, 1000);
    });
});


$(document).ready(function() {
    $(function() {
        $('#activator').click(function(){
            $('#overlay').fadeIn('fast',function(){
                $('#box').animate({'top':'160px'},500);
            });
        });
        $('#activator_image').click(function(){
            $('#overlay_2').fadeIn('fast',function(){
                $('#box_image').animate({'top':'160px'},500);
            });
        });
        $('#boxclose').click(function(){
            $('#box').animate({'top':'-700px'},500,function(){
                $('#overlay').fadeOut('fast');
            });
        });
        $('#boxclose_2').click(function(){
            $('#box_image').animate({'top':'-700px'},500,function(){
                $('#overlay_2').fadeOut('fast');
            });
        });
        $('.edit').click(function(e) {
            e.preventDefault();
            var note = $(this).data('note-url');
            console.log(note);
            $('#editForm').attr('action', note);

            $('#overlay').fadeIn('fast',function(){
                $('#box_edit').animate({'top':'160px'},500);
            });
        });
        $('#boxclose_3').click(function(){
            $('#box_edit').animate({'top':'-700px'},500,function(){
                $('#overlay').fadeOut('fast');
            });
        });
    });

    $('.ui.dropdown').dropdown();
});