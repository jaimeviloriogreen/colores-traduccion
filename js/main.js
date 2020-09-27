'use strict'

const colores = document.querySelector("#colores");

colores.addEventListener('change', function(e){
    let color = e.target.selectedOptions[0];
    let id = color.dataset.id;
    let dataCell = document.querySelector('.dataCell');
    let formulario = document.querySelector('form');
    let datos = new FormData(formulario);
        datos.append('id', id);
    if(id !== undefined){
        fetch('conexion.php', {
            method:'POST', 
            body:datos
        })
        .then(res=>res.json())
        .then(data=>{
            dataCell.innerHTML = `${data.traduccion}`;
        })
        .catch(e=>console.error(e));
    }else{
        dataCell.innerHTML = '';
    };
    
});

