 function leerArchivo(files) {
    obj_pg=null;
	console.log("->");
    
if (window.File && window.FileReader && window.FileList && window.Blob) {
  // Great success! All the File APIs are supported.
} else {
  alert('The File APIs are not fully supported in this browser.');
} 
	 var archivo = files[0];
  if (!archivo) {
    return;
  }
  var lector = new FileReader();
  lector.onload = function(e) {
    var contenido = e.target.result;
	var data = contenido.split(String.fromCharCode(10)); 
	
	console.log("Aqui datos"+data.length);
	console.log(data);
	$("#list-massive-employees").append("<tbody><tr></tr></tbody>");
	if(data.length > 0){
		console.log("Aqui datos if 0");
		for(i =0; i< data.length; i++){ 
			console.log("Aqui datos for"+i);
			//if(i>0){
				console.log("Aqui datos if 1");
				var datos = data[i].split(","); 
				if(datos[1] != undefined){
					console.log("Aqui datos if 2");
					datos[0] = datos[0].replace('"', "");
					datos[0] = datos[0].replace('"', "");
					
					j = i - 1;
					
					$("#list-massive-employees tbody >tr:last").after("<tr>" +
										"<td>" + datos[1] + "<input type=hidden name=datos["+i+"][nombre] value='"+datos[0]+"'></td>" +
										"<td>" + datos[18] + "<input type=hidden name=datos["+i+"][email] value='"+datos[1]+"'></td>" +
										"<td>" + datos[3] + "<input type=hidden name=datos["+i+"][codigo] value='"+datos[2]+"'></td>" +
									"</tr>");
				}
			//}
		}
	}
	
	$('#content-employees').show();
	$('#btn-enviar').show();

  };
  lector.readAsText(archivo);
  
  }
  
  $(document).ready(function(){

	 $.ajax({

            beforeSend:function () {
            },
            url:'getCatalogsEmployees',
            method:'get',
            async : false,
            dataType :'json',
            error: function (jqXHR, textStatus, errorThrown) {
                // body...
                alert('Se produjo un error : ' + errorThrown + ' '+ textStatus);                
            },
            success: function (data) {
		
				if(data.length > 0){
					
					for(i =0; i<data.length; i++){
						
						$("#catalogs-massive-employees tbody >tr:last").after("<tr>" +
									"<td>" + data[i].id_department + "</td>" +
									"<td>" + data[i].department + "</td>" +
									"<td>" + data[i].id_position + "</td>" +
									"<td>" + data[i].job_title + "</td>" +
									"<td>" + data[i].id_branch_office + "</td>" +
									"<td>" + data[i].branch_office + "</td>" +
								
								"</tr>");
					}
					
				}
               
                

            }

        });
		
	$('#btn-enviar').click(function(){
   
		$('#f_form').attr('action',"employeesMassiveSave");
   
		$('#f_form').submit(function(event){

			confirmSave($('#f_form').attr('action'), $('#f_form').serialize(), 'set()','f_form');
			return false;
		});

	});
  
  });



  
  function set(){
	  
	 if(resultGET.list!=''){
     console.log(resultGET.list,'llego2',resultGET.title);
   setTimeout(function () {
     swal({
       title: resultGET.title,
       text: ' \n \n'+resultGET.list,
       type: "warning",
       showCancelButton: false
   });
 }, 500);
   }
	$('#btn-enviar').hide();
	$('#content-users').hide();
	document.getElementById("form-file").reset();
	$('#list-massive-users tbody').remove();
	
	
  }