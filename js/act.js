// JavaScript Document
$(function(){
$('#_container').imagesLoaded(function () {
        $('#_container').masonry({        
            itemSelector: '.content_box',
            columnWidth: 290,
            animate:true
        });
});
});