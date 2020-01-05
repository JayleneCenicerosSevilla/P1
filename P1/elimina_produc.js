//<script src ="js/jquery-3.3.1.min.js"></script>
//<script>
   function eliminarFilas(fila,id) {
	   //alert('XdXdxDXdXD ' + id);
	   
	   
//      if  (confirm('borrar registroo '+fila+'?')){
		//$id = $fila+1;
		  //alert($id);
	
		if  (confirm('borrar registro?')){
		  $('#Fila'+fila).hide();
		  
		  
		  $.ajax({
				url		: 'elimina_producto.php',
				type	: 'post',
				dataType : 'text',
				data 	: 'id='+id,
				success :function(res){
				//					if (res == 1){
						
				//				if (opcion == true) {
				//         var i = r.parentNode.parentNode.rowIndex;
				//         document.getElementById("tabla1").deleteRow(i);

				//alert("Se ha eliminado la fila con el id " + r.parentNode.parentNode.id);
				//aqui cambiar el estado en la bse de datos
				alert("El registro a sido eliminado");},
			error: function(){
				alert('Error al eliminar...')
			}
		});
//      } else {
//      mensaje = "Has clickado Cancelar";
      }
   }
//</script>