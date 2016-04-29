<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class akuecontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(){
		$this->middleware('auth');
	}
	public function index()
	{
		
	}
	public function mulai()
	{
		return view('admin/mulai');
	}
	public function adminh()
	{
		return view('admin/adminh');
	}
	public function laporan()
	{
		return view('admin/laporan');
	}
	public function cirik()
	{
		return view('admin/cirik');
	}
	public function dataa()
	{
		return view('admin/dataa');
	}
	public function masuk()
	{
		return view('admin/masuk');
	}
	public function inputk()
	{
		return view('admin/inputk');
	}

}
