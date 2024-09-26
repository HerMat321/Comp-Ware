jQuery(function($)
{

    //reset Scrolla
    $.scrollTo(0);

    //przewijanie do góry strony
    $('.scrollUp').click(function() { $.scrollTo($('body'), 800); });


    //pojawienie się przycisku przewijania
    $(window).scroll(function(){
        if($(this).scrollTop() > 70)
            {
                $('.scrollUp').fadeIn();
            }
            else
            {
                $('.scrollUp').fadeOut();
            }
    })
});