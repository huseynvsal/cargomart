$(".address_tabs li").on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");
    var country = $(this).attr('id');
    $('.clearfix .pricing-block').each(function(){
        if ($(this).attr('id') == country){
            $(this).css('display','block');
        }
        else{
            $(this).css('display','none');
        }
    });
});



if($('.tabs-box').length){
    $('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('data-tab'));

        if ($(target).is(':visible')){
            return false;
        }else{
            target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
            $(this).addClass('active-btn');
            target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
            target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
            $(target).fadeIn(300);
            $(target).addClass('active-tab');
        }
    });
}


if($('.tabs-box').length){
  $('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
    e.preventDefault();
    var target = $($(this).attr('data-tab'));
    
    if ($(target).is(':visible')){
      return false;
    }else{
      target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
      $(this).addClass('active-btn');
      target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
      target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
      $(target).fadeIn(300);
      $(target).addClass('active-tab');
    }
  });
}

$(document).ready(function(){
    $('.customer-logos').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
    });
  });

  var btn = $('#button');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });



  $('#series a').click(function () {
    $('.seria-button').text($(this).text());
  });

  $('#cities a').click(function () {
    $('.city-button').text($(this).text());
  });

  function isNumberKey(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

     return true;
  }


  if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			
			/*var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			
			if($(this).hasClass('active')!==true){
				$(outerBox).find('.accordion .acc-btn').removeClass('active');
			}
			
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);	
			}*/

			$('.acc-content').slideUp(300);
			$('.accordion').removeClass('active-block');
			$(".accordion-box").find('.acc-btn').removeClass('active');
			$(this).parents('.accordion').find('.acc-content').stop().slideToggle(300);
			$(this).parents('.accordion').addClass('active-block');
			if($(this).hasClass('active') !==true){
				$(this).addClass('active');
			} else {
				$(this).removeClass('active');
			}
			
		});	
	} 