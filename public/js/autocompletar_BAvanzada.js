$(document).ready(function(){

function autocompletar(tipodato,nombre_campo){
    let indexFocus = -1;
    const tipo_input = document.querySelector('#'+nombre_campo);
    var url = document.getElementById("dir_url").value;
    tipo_input.addEventListener('input',function(){
        
        //valor_campo = this.value.toUpperCase();
        valor_campo = this.value;
        if(!valor_campo) return false;
        indexFocus=cerrarLista();
        //crear lista de sugerencias
        divList = document.createElement('div');
        divList.setAttribute('id', this.id + '-lista-autocompletar');
        divList.setAttribute('class','lista-autocompletar-items');
        this.parentNode.appendChild(divList);
        valor_campo = valor_campo.toUpperCase();
        //conexion a Base de datos
        httpRequest(url+'public/busquedaavanzada/ctrllerautocompletar.php?textobuscado='+valor_campo+'&tipodato='+tipodato, function(){
            //console.log(this.responseText);
            arreglo = JSON.parse(this.responseText);
        
                    //validar el arreglo vs input
                if(arreglo.length ==0) return false;
                    
                arreglo.forEach(item => {
                    if(item.substr(0,valor_campo.length)== valor_campo){
                        console.log(item);
                        elementoLista = document.createElement('div');
                        elementoLista.innerHTML =`<strong>${item.substr(0, valor_campo.length)}</strong>${item.substr(valor_campo.length)}`;
                        elementoLista.addEventListener('click',function(){
                            tipo_input.value = this.innerText;
                            console.log(tipo_input);
                            indexFocus=cerrarLista();
                            return false;
                        });
                        divList.appendChild(elementoLista);
                    }
                });
                
        });

    });

    tipo_input.addEventListener('keydown',function(e){
        divList = document.querySelector('#' + this.id + '-lista-autocompletar');
        let items;
        if(divList){
            items = divList.querySelectorAll('div');
            switch(e.keyCode){
                case 40:
                    indexFocus++;
                    if(indexFocus> items.length-1)
                        indexFocus = items.length-1;
                    break;
                case 38:
                    indexFocus--;
                    if(indexFocus<0)
                        indexFocus=0;
                    break;
                case 13:
                    e.preventDefault();
                    items[indexFocus].click();
                    indexFocus = -1;
                    break;
                default:
                    break;
            }

            seleccionar(items,indexFocus);
            return false;
        }
    });

    document.addEventListener('click',function(){
        indexFocus=cerrarLista();
    });

}

function seleccionar(items, indexFocus){
    if(!items || indexFocus==-1) return false;
    items.forEach(x => {x.classList.remove('autocompletar-active');});
    items[indexFocus].classList.add('autocompletar-active');
}


function cerrarLista(){
    items = document.querySelectorAll('.lista-autocompletar-items');
    items.forEach(item=>{
        item.parentNode.removeChild(item);
    });
    //indexFocus=-1;
    return -1;
}


function httpRequest(url,callback){
    http = new XMLHttpRequest();
    http.open('GET',url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            callback.apply(http);
        }
    }
}


autocompletar('nombrecarpeta','tipo-nombrecarpeta');
autocompletar('defensa','tipo-defensa');
autocompletar('asesor','tipo-asesor');
autocompletar('fiscalia','tipo-fiscalia');


});