$(function() {

//hight the current nav
$("#home a:contains('Home')").parent().addClass('active');

//make menus drop automatically
$('ul.nav li.dropdown').hover(function() {
    $('.dropdown-menu', this).fadeIn();
}, function() {
    $('.dropdown-menu', this).fadeOut('fast');
});//hover

}); //jQuery is loaded
