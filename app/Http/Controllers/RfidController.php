<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Rfid;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class RfidController extends Controller{

	public function viewRfid()
	{
		return view('Rfid/rfid');
	}
	public function viewRfids()
	{
		return view('Rfid/rfids');
	}
	public function saveRfid(Request $request)
	{
		$codigo = new Rfid();
		$codigo->codigo = $request->codigo;
		$codigo->uso = "No";

		$codigo->save();

		return Redirect::back()->with(['success' => ' ']);
	}
	public function saveRfids(Request $request)
	{
		set_time_limit(5000);
		$this->subir = $request;
		//obtenemos el campo file definido en el formulario
		$file = $request->file('archivo');
		//obtenemos el nombre del archivo
		$nombre = $file->getClientOriginalName();
		$url = storage_path('app/').$nombre;
		$messages = [
			'mimes' => 'Solo se permiten Archivos Excel .xls, .xlsx, .csv',
		];
		$validator = Validator::make(
			[
				'file' => $file,
				'nombre' => $nombre
			],
			[
				'file' => 'mimes:csv,txt,xls,xlsx'
			],
			$messages);
		$message = 'f';
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		\Storage::disk('local')->put($nombre,  \File::get($file));
		Excel::load($url, function($reader) {
			$results = $reader->get();
			//dd($results);
			for ($i = 0; $i < $this->subir->numero; $i++) {
				$k = new Rfid();
				$textoLimpio = preg_replace('([^A-Za-z0-9])', '', $results[$i]);
				$k->codigo  = $textoLimpio;
				$k->uso = "No";
				$k->save();
			}
		});
		return Redirect::back()->with(['success' => ' ']);
	}

}