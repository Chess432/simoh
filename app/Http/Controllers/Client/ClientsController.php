<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('created_at','desc')->paginate(10);
        return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'client_name' => 'required',
            'phone' => 'required',
            'order' => 'required',
            'status' => 'required',
            'USD' => 'required',
            'ZWD' => 'required',
            'txtMessage' => 'required'
         ]);

        $client = new Client;
        $client->date = $request->input('date');
        $client->client_name = $request->input('client_name');
        $client->phone = $request->input('phone');
        $client->order = $request->input('order');
        $client->status = $request->input('status');
        $client->USD = $request->input('USD');
        $client->ZWD = $request->input('ZWD');
        $client->txtMessage = $request->input('txtMessage');
        $client->save();

        $request->session()->flash('success', 'Details have been entered.');

        return redirect()->route('client.client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {
        $client = Client::find($id);
        return view('clients.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $client = Client::find($id);
        return view('clients.edit')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        $this->validate($request, [
            'date' => 'required',
            'client_name' => 'required',
            'phone' => 'required',
            'order' => 'required',
            'status' => 'required',
            'USD' => 'required',
            'ZWD' => 'required',
            'txtMessage' => 'required'
         ]);
        $client = Client::find($id);
        $client->date = $request->input('date');
        $client->client_name = $request->input('client_name');
        $client->phone = $request->input('phone');
        $client->order = $request->input('order');
        $client->status = $request->input('status');
        $client->USD = $request->input('USD');
        $client->ZWD = $request->input('ZWD');
        $client->txtMessage = $request->input('txtMessage');
        $client->save();

        $request->session()->flash('success', 'Details have been updated.');

        return redirect()->route('client.client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
