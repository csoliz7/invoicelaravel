<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clients;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ClientRequest;


class ClientController extends Controller {


	private $client;

	/**
	 * ClientController constructor.
	 * @param $client
	 */
	public function __construct(Clients $client)
	{
		$this->client = $client;

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = $this->client->all();
		return view('clients.clients')->with('clients', $clients)->withTitle('Clients List');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clients.create')->withTitle('Create a New Client');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ClientRequest $request)
	{
		$this->client->create($request->all());
		session()->flash('flash_message', 'New Client has been Added');

		return redirect('/client');
	}

	/**
/
		$client =	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Clients $client)
	{

		return view('clients.show')->withTitle('Client Summary')->with('client', $client);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Clients $client)
	{
		return view('clients.edit')->with('client',$client)->withTitle('Edit Client Information');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ClientRequest $request, Clients $client)
	{

		$client->update($request->all());

		return redirect('client');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Clients $client)
	{
		$client->delete();

		return redirect('/client');
	}

}
