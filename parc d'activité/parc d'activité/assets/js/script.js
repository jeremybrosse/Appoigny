  $( function() {
    $( "#accordion" ).accordion({
      heightStyle: "content",
      collapsible: true
    });
    
/*Pour la timeline de la page projet*/
    $().timelinr({
        autoPlay: 'true',        
        autoPlayDirection: 'forward'
        })

  } );
