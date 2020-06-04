<?php

namespace App\Http\Controllers\Users\Catalog;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Helpers\DatabaseConnection;


class UsuariosController extends Controller {
	
	public function index(){
		
		return view('alta_usuarios');
	}
	
	public function save(Request $request){
		
		DatabaseConnection::setConnection(session()->get('auth_fleet')[0]['auth']);
		
		$created_at = date('Y-m-d H:i:s');
		
		$datos = $request->input("datos");
		
		for($i = 0; $i < count($datos); $i++){
			
			//$datos = explode("|", $request->datos[$i]);
			//$Exist = DB::table('cat_employees')->select(DB::raw('count(*) as total'))->where("code_employee","=",$request->input("datos.".$i.".clave"))->get();
			
			$Exist = Employee::where('code_employee','=',$request->input("datos.".$i.".clave"))->first();
			
			//if($Exist == null || $Exist == "" || empty($Exist) ){
				
				DB::table('cat_employees')->insert(
							
							[
							'code_employee' => $request->input("datos.".$i.".clave"), 
							'id_master_account' => session()->get('id_master_account'),
							'id_branch_office' => $request->input("datos.".$i.".idSucursal"),
							'first_name' => $request->input("datos.".$i.".nombre"),
							'second_name' => $request->input("datos.".$i.".nombre2"),
							'paternal_surname' => $request->input("datos.".$i.".app"),
							'maternal_surname' => $request->input("datos.".$i.".apm"),
							'street' => $request->input("datos.".$i.".calle"),
							'number_int' => $request->input("datos.".$i.".noInterno"),
							'number_ext' => $request->input("datos.".$i.".noExterno"),
							'colony' => $request->input("datos.".$i.".colonia"),
							'zip_code' => $request->input("datos.".$i.".cp"),
							'telephone' => $request->input("datos.".$i.".telefono"),
							'cellphone' => $request->input("datos.".$i.".cel"),
							'date_birth' => $request->input("datos.".$i.".fechaNac"),
							'date_imss' => $request->input("datos.".$i.".fechaImss"),
							'number_imss' => $request->input("datos.".$i.".nss"),
							'id_status' => $request->input(1),
							//'estatus' =>$request->input("Activo"),
							'id_position' => $request->input("datos.".$i.".idCargo"),
							'id_department' => $request->input("datos.".$i.".idDepartamento"),
							'email' => $request->input("datos.".$i.".email"),
							'id_status' => '1',
							'created_at' => $created_at,
							'created_by_id_user' => session()->get('id_user'),
							'active' => '1'
							
							]
						);
			//}
			
		}
		return json_encode('');
  }
  
  public function getCatalogs(){
	  
	  DatabaseConnection::setConnection(session()->get('auth_fleet')[0]['auth']);
	  
	  $sql = "SELECT id_department,department
				FROM cat_department 
				WHERE id_master_account =".session()->get('id_master_account')." ";
	  
	  $arr=DB::select($sql);
	 
	  $position = "SELECT id_position,job_title
				FROM cat_positions 
				WHERE id_master_account =".session()->get('id_master_account')." ";
	  
	  $response=DB::select($position);
	  
	  $sucursal = "SELECT id_branch_office,branch_office
				FROM cat_branch_offices 
				WHERE status = 1";
	  
	  $response=DB::select($sucursal);
	  
	  //return $arr;
		return json_encode('');
	}
	
}