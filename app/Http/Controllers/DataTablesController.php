<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Datatables;

class DataTablesController extends Controller
{
	/**
	 * Displays datatables front end view
	 *
	 * @return \Illuminate\View\View
	 */
	public function getIndex(UsersDataTable $dataTable)
	{
		//return $dataTable->render('dt');
		return view('datatables.index');
	}

	/**
	 * Process datatables ajax request.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyData()
	{
		return Datatables::of(User::query())->make(true);
	}
}
