$(document).ready(function(){
	$(".eliminar").click(function(){
		$(this).parent('td').parent('tr').remove();
		$.post('./ejecuta.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
		},function(e){
			window.location.href="clientes.php";
		});
	});
	// $(".modificar").click(function(){
	// 	var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
	// 	var descripcion=$(this).parent('td').parent('tr').find('.descripcion').val();
	// 	var precio=$(this).parent('td').parent('tr').find('.precio').val();
	// 	$.post('./ejecuta.php',{
	// 		Caso:'Modificar',
	// 		Id:$(this).attr('data-id'),
	// 		Nombre:nombre,
	// 		Descripcion:descripcion,
	// 		Precio:precio
	// 	},function(e){
	// 		alert(e);
	// 	});
	// });
});