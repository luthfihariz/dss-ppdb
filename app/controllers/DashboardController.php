<?php

class DashboardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$peserta = Peserta::all();
		$num_of_peserta = $peserta->count();		
		$fullday = Peserta::where('fullday','=','1');
		$num_of_fullday = $fullday->count();
		
		$fullday = $fullday->orderBy('rank','asc')->paginate(10);		
		$reguler = Peserta::where('fullday','=','0')->orderBy('rank','asc')->paginate(10);
		$reguler->getFactory()->setPageName('reguler');
		return View::make('index')
			->with('num_of_peserta',$num_of_peserta)
			->with('num_of_fullday',$num_of_fullday)
			->with('reguler', $reguler)
			->with('fullday', $fullday);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
