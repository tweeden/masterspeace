$(function() {

//hight the current nav
$("#home a:contains('Home')").parent().addClass('active');

//make menus drop automatically
$('ul.nav li.dropdown').hover(function() {
    $('.dropdown-menu', this).fadeIn();
}, function() {
    $('.dropdown-menu', this).fadeOut('fast');
});//hover

//show tooltips
$("[data-toggle='tooltip']").tooltip({ animation: true});

//show modals

$('.modalphotos img').on('click', function() {
    $('#modal').modal ( {
        show: true,
    })

    var mysrc = this.src.substr(0, this.src.lenfth-7) + '.jpg';
    $('#modalimage').attr('src', mysrc);
    $('#modalimage').on('click', function(){
        $('#modal').modal('hode');
    })

});
}); //jQuery is loaded
