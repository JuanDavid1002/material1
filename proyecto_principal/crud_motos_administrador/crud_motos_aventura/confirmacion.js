function confirmacion(e){
   if (confirm("¡Esta seguro que desea eliminar este registro")) {
     return true;
   } else {
     e.preventDefault();
   }
}

let linkDelete = document.getElementById('borrar');

for (var i=0; i<linkDelete.length; i++){
  linkDelete[i].addEventListener('click',confirmacion);
}