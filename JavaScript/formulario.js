

function setDeleteId(id) {
    document.getElementById('delete-id').value = id;
}


  function alertseleASDAct(){
    
    let linea = document.getElementById('idLinea').value;  
    let nombreEstacion = document.getElementById('nombreEstacion').value;  
    let lateralidad = document.getElementById('idLateralidad').value;  
    
    if(linea !='Seleccione una linea' && nombreEstacion !='' && lateralidad != 'Seleccione una lateralidad' ){
     let boton = document.getElementById('agregar');
     boton.removeAttribute('disabled');
    }

} 
