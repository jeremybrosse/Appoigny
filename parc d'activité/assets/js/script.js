var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

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

    $('.timeLine').timeLine({
        mainColor: '#4DB7AA',
        opacity: '0.85',
        lineColor: '#fafafa'
    });

    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
     
});



  
