<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class kuecontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	}
	public function home()
	{
		return view('home');
	}
	public function data()
	{
		return view ('pesan/data');
	}
	public function detail()
	{
		return view ('detail');
	}
	public function edit()
	{
		return view ('edit');
	}
	public function masukkan()
	{
		return view ('pesan/masukkan');
	}
	public function pesan()
	{
		return view ('pesan/pesan');
	}
	public function theme()
	{
		return view ('pesan/theme');
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}
}