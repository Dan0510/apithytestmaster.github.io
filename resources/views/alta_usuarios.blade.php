@extends('layout.master')
@section('title_page')
Alta Masiva Empleados
@endsection

@section('content')

<br><br><br><br>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>ALTA USUARIOS</h2>
                <ul class="header-dropdown m-r--5">
                  <li class="dropdown">
                    <button type="button" id='btn-template' class=" waves-effect wave-black btn btn-primary btn-sm" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="glyphicon glyphicon-cloud-download"></i>
                         </button>
                  </li>
                </ul>
            </div>
			<br><br><br>
			<div class="body" style="margin-left:15px;"  >
				<form class="form-inline" id="form-file" method='post' enctype="multipart/form-data">
					<table id='list'  class="table  table-striped table-bordered table-hover table-condensed" cellspacing="0" width="50%" border="0" data-page-length='100' data-search="1" align="center">
						<tr>
							<td align="center" colspan="2" width="100%"><span style="font-size:14px;font-weight:bold;color:red;">Nombre completo, E-mail, Código

						</tr>
						<tr>
							<td align="right" width="50%"><br>Seleccione el archivo:&nbsp; &nbsp; &nbsp;<br> </td>
							<td width="50%"><br><input type='file' name='files' size='20'   id="files" onchange="leerArchivo(this.files);"><br></td>
						</tr>
						<tr>

						</tr>
					</table>
				</form>
			</div>
			<form id='f_form' class="form-horizontal" role="form" method="POST">
			{{ csrf_field() }}
				<input type="hidden" name="_method" value="POST">
            <input type="hidden" name="id_module" id='id_module'>
			<br>
			<div class="body" id="btn-enviar" style="width:100%;text-align:center;display:none;"><button type="submit" class="btn btn-primary" >Enviar</button></div>
			<br>
            <div class="body" id="content-employees" style="display:none;margin-left:15px;">

              <table id='list-massive-employees' class="table  table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%" data-page-length='100' data-search="1">
                <thead>
                  <tr>
                    <th>Nombre</th>
					<th>E-mail</th>
					<th>Código</th>
                  </tr>
                </thead>
				<tbody>

				</tbody>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
					<th>E-mail</th>
					<th>Código</th>
                  </tr>
                </tfoot>
              </table>
			 </form>
            </div>
        </div>
    </div>
</div>


@section('js_content')
<script src="public/js/usuarios/usuarios.js"></script>
<script>

</script>

@endsection
