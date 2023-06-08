<?php

namespace App\Http\Controllers\Client;

use DataTables;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\PopUp;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customerList()
    {
        $clientLsup = Client::where('jenis','3')->orderBy('created_at', 'ASC')->get();
        $clientLspro = Client::where('jenis','4')->orderBy('created_at', 'ASC')->get();
        $clientManagement = Client::where('jenis','5')->orderBy('created_at', 'ASC')->get();
        $clientIspo = Client::where('jenis','14')->orderBy('created_at', 'ASC')->get();
        $clientChse = Client::where('jenis','15')->orderBy('created_at', 'ASC')->get();

        $client = Client::all();

        $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.customers.customerList', compact('clientLsup','clientLspro','clientManagement','client', 'popup', 'clientIspo', 'clientChse'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
