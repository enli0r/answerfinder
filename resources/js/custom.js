$(function(){
    $('.post-container').on('click', function(event){
        $unclickable = ['p', 'img', 'i', 'button'];

        $clicked = event.target.tagName.toLowerCase();

        if(jQuery.inArray($clicked, $unclickable) == -1){
            $(event.target.closest('.post-container')).find('a')[0].click();
        }
    });
});

$(function(){
    $('.search-form').on('click', function(){
        var id= $(this).attr('id');
        
        $('#'+id+'-input').focus();
    })
})