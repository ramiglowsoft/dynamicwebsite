$(document).ready(function() {
	
	
	$('.team_slick').slick({
  dots: false,
  infinite: true,
  speed: 100,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: false,
   autoplay: true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite:true,
        dots: false,
      }
    },
    {
      breakpoint:767 ,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
   {
      breakpoint:480 ,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
  ]
});



$('.events_slick').slick({
  dots: false,
  infinite: false,
  speed: 200,
  slidesToShow: 3,
  slidesToScroll: 1,
  vertical:true,
  arrows: false,
   autoplay: true,
   
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite:false,
        dots: false,
		       }
    },
    {
      breakpoint:767 ,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1.
		  
      }
    },
   {
      breakpoint:480 ,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		       }
    }
    
  ]
});












	
});
	
	
	
	
	
	

	
	