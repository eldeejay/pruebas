$(function(){
    $(".accordion-titulo").click(function(e){
          e.preventDefault();
          var contenido=$(this).next(".accordion-content");
          if(contenido.css("display")=="none"){ //open		
            contenido.slideDown(350);			
            $(this).addClass("open");
          }
          else{ //close		
            contenido.slideUp(250);
            $(this).removeClass("open");	
          }
        });
  });


function ocultarAcordeon() {
    document.getElementsByClassName('accordion-content01').style.display="none";
}

function mostrarAcordeon() {
    document.getElementsByClassName('accordion-content01').style.display="block";
}

function showAcordeon(){
    var acordeon = document.getElementsByClassName('accordion-content01').item(0).innerHTML;
    alert(acordeon);
   
    if(acordeon.css("display")=="none"){ //open		
      acordeon.slideDown(350);			
      $(this).addClass("open");
    }
    else{ //close		
      acordeon.slideUp(250);
      $(this).removeClass("open");	
    }
}
