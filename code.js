$('.mouse-parallax').on('mousemove', (e)=> {
    const x = e.pageX / $(window).width()-2;
    const y = e.pageY / $(window).height()-2;

    $('.mouse-parallax_content').css(
        'transform', 'translate(' + x * (-40) + 'px, '+ y * (-40) + 'px)'
    );
    
});