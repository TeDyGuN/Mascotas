<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Mascota;
use App\Rfid;
use App\Veterinaria;
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

class VeterinariaController extends Controller {

//	public function getViewBuscar()
//	{
//
//		return view('Mascota/buscarMascota');
//	}
	public function viewListVeterinaria()
	{
		$vet = Veterinaria::get();
		return view('Veterinaria/listarVeterinaria', compact('vet'));
	}
	public function viewRegistroVeterinaria()
	{
		return view('Veterinaria/registro');
	}
//	public function buscarMascota()
//	{
//		return view('Mascota/buscarMascotaAdmin');
//	}
	public function saveVeterinaria(Request $request)
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


		$veterinaria = new Veterinaria();
		$veterinaria->nombre = $request->nombres;
		$veterinaria->descripcion = $request->otros;
		$veterinaria->imagen = $nombre;
		$veterinaria->direccion = $request->direccion;
		$veterinaria->telefono = $request->telefono;
		$veterinaria->save();

		return Redirect::back()->with(['success' => ' ']);
	}
//	public function ServiceBuscar(Request $request)
//	{
//		$codigo = Rfid::where('codigo',  $request->rfid)
//		              ->get();
//		if(count($codigo) > 0)
//		{
//			if($codigo[0]['uso'] == "Si"){
//				$mascota = Mascota::where('id_rfid', $codigo[0]['id'])
//				                  ->get();
//
//				return \view('Mascota/resultado', compact('mascota'));
//			}
//			else{
//				return \view('Mascota/disponibleAdmin');
//			}
//		}
//		else{
//			return \view('Mascota/inexistenteAdmin');
//		}
//	}
//	public function ServiceBuscarU(Request $request)
//	{
//		$codigo = Rfid::where('codigo',  $request->rfid)
//		              ->get();
//		if(count($codigo) > 0)
//		{
//			if($codigo[0]['uso'] == "Si"){
//				$mascota = Mascota::where('id_rfid', $codigo[0]['id'])
//				                  ->get();
//
//				return \view('Mascota/resultadoMascota', compact('mascota'));
//			}
//			else{
//				return \view('Mascota/disponible');
//			}
//		}
//		else{
//			return \view('Mascota/inexistente');
//		}
//	}
}