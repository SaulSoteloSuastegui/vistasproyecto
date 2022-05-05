$(document).ready(function(){

    var fecha = new Date("2020/12/23");
    var options = { day: 'numeric', month: 'long',  year: 'numeric'};
    
    console.log(
      fecha.toLocaleDateString("es-ES", options)
    );


});