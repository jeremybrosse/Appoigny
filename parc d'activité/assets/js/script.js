var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

$(function(){
   $("#submit").on("click", toggleText);    
   $("#newsletter>form").on("submit", validForm);

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

function toggleText(){
  $("#feedback").toggle();

}

  function validForm(event){
    event.preventDefault();
    $("#newsletter>form").fadeOut(1000, showMessage);
}

function showMessage(){
    $("#feedback").html("Votre inscription est prise en compte");
    $("#feedback").fadeIn(1000);
}
