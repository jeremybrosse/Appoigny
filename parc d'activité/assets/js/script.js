$(function(){
  $(".owl-carousel").owlCarousel({
  	margin:10,
    rewind:true,
    slideBy:2,
    items:4,
    nav:true,
    autoplay:true,
    responsive:{
    	0:{
    		items:1
    	},
    	400:{
    		items:2
    	},
    	800:{
    		items:3
    	},
    	1000:{
    		items:10
    	}
    }
  });

    $().timelinr({
        autoPlay: 'true',        
        autoPlayDirection: 'forward'
        });
     
});