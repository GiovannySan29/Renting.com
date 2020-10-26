$(document).on("ready",inicio);

 function inicio(){
	$("#msg-error").hide();
	mostrarDatos("");
	$("#buscar").keyup(function(){
		buscar = $("#buscar").val();
		mostrarDatos(buscar);
	});
	$("#btnbuscar").click(function(){
		mostrarDatos("");
		$("#buscar").val("");
	});
	$("#btnactualizar").click(actualizar);
	$("#form-create-empleado").submit(function (event){

		event.preventDefault();
		var formData = new FormData($("#form-create-empleado")[0]);
		$.ajax({
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			data:formData,
			cache:false,
			contentType:false,
			processData:false,
			
			success:function(respuesta){
				if (respuesta==="exito") {
					alert("Los datos han sido guardados correctamente");
					$("#msg-error").hide();
					$("#form-create-empleado")[0].reset();
				}
				else if(respuesta==="error"){
					alert("Los datos no se pudo guardar");
				}
				else{
					$("#msg-error").show();
					$(".list-errors").html(respuesta);
				}
			}
		});
	});
	$("body").on("click","#listaEmpleados a",function(event){
		event.preventDefault();
		idsele = $(this).attr("href");
		titlesele = $(this).parent().parent().children("td:eq(1)").text();
		typesele = $(this).parent().parent().children("td:eq(2)").text();
		addesssele = $(this).parent().parent().children("td:eq(3)").text();
		roomssele = $(this).parent().parent().children("td:eq(4)").text();
		areasele = $(this).parent().parent().children("td:eq(5)").text();
		price = $(this).parent().parent().children("td:eq(6)").text();

		$("#idsele").val(idsele);
		$("#titlesele").val(titlesele);
		$("#typesele").val(typesele);
		$("#addesssele").val(addesssele);
		$("#roomssele").val(roomssele);
		$("#areasele").val(areasele);
		$("#pricesele").val(pricesele);
		
	});
	$("body").on("click","#listaEmpleados button",function(event){
		idsele = $(this).attr("value");
		eliminar(idsele);
	});
}

function mostrarDatos(valor){
	$.ajax({
		url:"http://localhost/Renting.com/Admin_C/mostrar",
		type:"POST",
		data:{buscar:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class='table table-responsive table-bordered'><thead>";
 			html +="<tr><th>#</th><th>title</th><th>type</th><th>addess</th><th>rooms</th><th>area</th><th>price</th><th>Imagen</th><th>Usuario</th><th>Accion</th></tr>";
			html +="</thead><tbody>";
			for (var i = 0; i < registros.length; i++) {
				html +="<tr><td>"+registros[i]["id_accommodation"]+"</td><td>"+registros[i]["title"]+"</td><td>"+registros[i]["type"]+"</td><td>"+registros[i]["area"]+"</td><td>"+registros[i]["addess"]+"</td><td>"+registros[i]["rooms"]+"</td><td>"+registros[i]["price"]+"</td><td><img src='http://localhost/Renting.com/assets/images/uploads/"+registros[i]['foto_empleado']+"' style='width:100px; height:100px;'/></td><td>"+registros[i]["nombres"]+"</td><td><a href='"+registros[i]["id_empleado"]+"' class='btn btn-warning' data-toggle='modal' data-target='#myModal'>E</a> <button class='btn btn-danger' type='button' value='"+registros[i]["id_empleado"]+"'>X</button></td></tr>";
			};
			html +="</tbody></table>";
			$("#listaEmpleados").html(html);
		}
	});
}

function actualizar(){
	var formData = new FormData($("#form-actualizar")[0]);
	$.ajax({
		url:"http://localhost/Renting.com/Admin_C/actualizar",
		type:"POST",
		data:formData,
		cache:false,
		processData:false,
		contentType:false,
		success:function(respuesta){
			alert(respuesta);
			//mostrarDatos("");
		}
	});
}

function eliminar(idsele){
	$.ajax({
		url:"http://localhost/Renting.com/Admin_C/eliminar",
		type:"POST",
		data:{id:idsele},
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}
	});
}

