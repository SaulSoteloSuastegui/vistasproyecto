const botones = document.querySelectorAll(".btnEliminar");
const dir_urlhttp = document.getElementById("dir_url").value;

botones.forEach(boton =>{
    boton.addEventListener("click",function(){
        const id_aud = this.dataset.idbtn;
        const confirm = window.confirm("¿Deseas Elimnar la Audiencia? :"+id_aud+"> Esta Acción no se puede restablecer.. ");
        if(confirm){
            //solicitud ajax
            httpRequest(dir_urlhttp+"Consulta/eliminarAudiencia/"+id_aud,function(){
                console.log(this.responseText);
                const tbody= document.querySelector("#tbody-audiencias");
                const fila =document.querySelector("#fila-"+id_aud);
                tbody.removeChild(fila);
                var tbl = document.getElementById("tabla_"+id_aud);
                if (tbl){ 
                    tbl.parentNode.removeChild(tbl);
                    alert("Audiencia Eliminada Satisfactoriamente", "Audiencia " + id_aud+" Eliminada");
                }else{
                    alert("Ocurrio un ERROR Inesperado al Intentar Eliminar la Audiencia: " + id_aud,"Error");
                }

            });
        }else{
            alert("No se ha eliminado la Audiencia " + id_aud , "Sin Eliminar");
        }
    });
});



function httpRequest(url,callback){
    const http= new XMLHttpRequest();
    http.open("GET",url);
    http.send();
    http.onreadystatechange = function(){
        if(this.readyState==4 && this.status ==200){
            callback.apply(http);
        }
    }
}