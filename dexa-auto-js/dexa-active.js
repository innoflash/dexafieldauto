/**
 * Created by Mr Flash on 10/16/2017.
 */
$(document).ready(function () {
    var page_name = $('#page_data #page_name').text();
    var page_img = $('#page_data #page_img').text();
    $('*#page_name').text(page_name);
    $('.page-header').css('background', 'linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2) url(' + page_img + ') no-repeat center');
});
