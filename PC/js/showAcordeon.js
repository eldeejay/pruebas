
function ocultarAcordeon() {
    document.getElementsByClassName('accordion-content01').style.display="none";
}

function mostrarAcordeon() {
    document.getElementsByClassName('accordion-content01').style.display="block";
}

function showAcordeon(){
    
    var acordeon = document.getElementsByClassName('accordion-content01').item(0).innerHTML;
    alert(acordeon);
    if(acordeon.style.display=="none"){
        mostrarAcordeon();
        document.getElementsByClassName("accordion-content01").value = "ocultarAcordeon";
        alert("2");
    }
    else{
        ocultarAcordeon();
        document.getElementsByClassName("accordion-content01").value = "mostrarAcordeon";
        alert("3");
    }
}

