function HideContent(button){
    $(button).click(function(e) { 
        e.preventDefault();
        $('.central-section .col').remove();
    });
}

function ChangeColor(button){
    $(button).mouseover(function() {
        $('.left-section').css('background-color','#CCCCCC');
    }).mouseout(function() {
        $('.left-section').css('background-color','#f33827');
    });
}

function AddText(button){
    $(button).click(function(e) { 
        e.preventDefault();
        $('.left-section').html("<p>Hola Mundo!</p>");
    });
}

$(document).ready(function(){
    // Ocultar items de contenido
    HideContent($("#inicio"));
    // Cambiar color sidebar
    ChangeColor($("#compras"));
    // Agregar texto sidebar
    AddText($("#nosotros"));
});