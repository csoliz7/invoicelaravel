<?php namespace App\Http\Controllers;

use App\Http\Requests;
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

		return view('clients.clients')->with('clients', $this->client->all())->withTitle('Clients List');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		$user = $request->user();
		return view('clients.create')->with('user', $user)->withTitle('Create a New Client');
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
	public function edit(Clients $client , Request $request)
	{
		$user = $request->user();
		return view('clients.edit')->with(array('client'=>$client, 'user'=>$user))->withTitle('Edit Client Information');
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
	 * Model Binding
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
