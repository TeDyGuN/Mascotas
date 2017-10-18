<?php namespace App\Http\Controllers\Mascotas;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Mascota;
use App\Rfid;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
//use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
//use Barryvdh\DomPDF\PDF;
//use Barryvdh\DomPDF;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MascotaController extends Controller {

	public function getViewBuscar()
	{

		return view('Mascota/buscarMascota');
	}
	public function viewMascota()
	{
		$codigo = Rfid::where('uso',  "No")
	               ->take(1)
	               ->get();
		return view('Mascota/mascota', compact("codigo"));
	}
	public function buscarMascota()
	{
		return view('Mascota/buscarMascotaAdmin');
	}
	public function saveMascota(Request $request)
	{
		set_time_limit(5000);
		//obtenemos el campo file definido en el formulario
		$file = $request->file('archivo');
		//obtenemos el nombre del archivo
		$nombre = $file->getClientOriginalName();
		$url = storage_path('app/').$nombre;
		$messages = [
			'mimes' => 'Solo se permiten Archivos .bmp, .jpg, .png',
		];
		$validator = Validator::make(
			[
				'file' => $file,
				'nombre' => $nombre
			],
			[
				'file' => 'mimes:jpeg,jpg,png'
			],
			$messages);
		$message = 'f';
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		\Storage::disk('local')->put($nombre,  \File::get($file));


		$idc = Rfid::select('id', 'codigo')
		             ->where('codigo', $request->codigo)
		             ->take(1)
		             ->get();
		$mascota = new Mascota();
		$mascota->nombre = $request->nombrem;
		$mascota->raza = $request->raza;
		$mascota->color = $request->color;
		$mascota->peso = $request->peso;
		$mascota->id_rfid = $idc[0]['id'];
		$mascota->esterilizado = $request->esterilizado;
		$mascota->descripcion = $request->otros;
		$mascota->imagen = $nombre;
		$mascota->dnombre = $request->nombres;
		$mascota->dapellido = $request->father;
		$mascota->demail = $request->email;
		$mascota->dci = $request->ci;
		$mascota->direccion = $request->direccion;
		$mascota->dtelefono = $request->telefono;

		$mascota->save();
		$codigo = Rfid::find($idc[0]['id']);
		$codigo->uso = "Si";
		$codigo->save();
		return Redirect::back()->with(['success' => ' ']);
	}
	public function ServiceBuscar(Request $request)
	{
		$codigo = Rfid::where('codigo',  $request->rfid)
		              ->get();
		if(count($codigo) > 0)
		{
			if($codigo[0]['uso'] == "Si"){
				$mascota = Mascota::where('id_rfid', $codigo[0]['id'])
					->get();

				return \view('Mascota/resultado', compact('mascota'));
			}
			else{
				return \view('Mascota/disponibleAdmin');
			}
		}
		else{
			return \view('Mascota/inexistenteAdmin');
		}
	}
	public function ServiceBuscarU(Request $request)
	{
		$codigo = Rfid::where('codigo',  $request->rfid)
		              ->get();
		if(count($codigo) > 0)
		{
			if($codigo[0]['uso'] == "Si"){
				$mascota = Mascota::where('id_rfid', $codigo[0]['id'])
				                  ->get();

				return \view('Mascota/resultadoMascota', compact('mascota'));
			}
			else{
				return \view('Mascota/disponible');
			}
		}
		else{
			return \view('Mascota/inexistente');
		}
	}
}