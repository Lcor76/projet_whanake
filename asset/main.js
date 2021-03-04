$(document).ready(function () {

  console.log('ok DOM chargé avec jquery')



  $('#burger').on('click', function(){


    $(".logo3").animate({
      left: '10%',
      height: '+=15%',
      width: '+=15%'
    });

    $('#burger').fadeOut(1000)
    $('#menuBurger').fadeIn(1000).css('display','block')
    $('#croix').fadeIn(1000).css('display','block')
    $('#menu').fadeOut(500).css('display','none')
  })

  $('#croix').on('click', function(){
    $(this).fadeOut(200)  

    $(".logo3").animate({
      left: '-10%',
      height: '-=15%',
      width: '-=15%'
    });
    $('#menu').fadeIn(1000).css('display','block')
    $('#menuBurger').fadeOut(800).css('display','none')
    $('#burger').fadeIn(800).css('display','block')
  })

  $('#espace').on('click', function(){
    $('#espace2').fadeIn(500).css({
      'position':'fixed',
      'z-index':'999999999'
    })
    
  })

  $('#envoyer').on('click',function(){
    $('#espace2').fadeOut(1000).css('display','none')
  })

  $('#haut').on('click', function(){
    window.location.href = "index.php";
  })

})
