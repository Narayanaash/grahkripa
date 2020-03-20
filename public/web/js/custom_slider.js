var currentBackground = 0;
var backgrounds = [];
backgrounds[0] = 'web/images/content/home_bg.jpg';
backgrounds[1] = 'web/images/content/home_bg_2.jpg';
backgrounds[2] = 'web/images/content/home_bg_3.jpg';
backgrounds[3] = 'web/images/content/home_bg_4.jpg';

function changeBackground() {
    currentBackground++;
    if(currentBackground > 3) currentBackground = 0;

     $('body').css({
            'background-image' : "url('" + backgrounds[currentBackground] + "')"
        });


    setTimeout(changeBackground, 14000);
}

$(document).ready(function() {
    setTimeout(changeBackground, 14000);        
});