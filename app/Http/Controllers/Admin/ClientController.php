<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('created_at', 'DESC')->get();
        return view("admin.pages.client.index", compact("clients"));
    }

    public function store(Request $request)
    {
        $clientName = ucwords($request->name);

        if ($request->hasFile("logo")) {
            $clientLogo = $request->file('logo');
            $fileName = $clientLogo->getClientOriginalName();
            $clientLogo->move(Storage::disk('public')->path('images/clients'), $fileName);
            // $clientLogo->move(storage_path('images/clients'), $fileName);
        } else {
            $fileName = "avatar.png";
        }



        $clientProduk = $request->produk;
        $clientSkema = $request->skema;
        $clientSertifikasi = $request->sertifikasi;
        $clientJenis = $request->jenis;

        $client = new Client();
        $client->name = strtoupper($clientName);
        $client->logo = $fileName;
        $client->jenis = $clientJenis;
        $client->produk = $clientProduk;
        $client->skema = $clientSkema;
        $client->sertifikasi = $clientSertifikasi;
        $client->save();

        if ($client->save()) {
            Alert::success('Success', 'Client has been added');
        } else {
            Alert::error('Failed', 'Client failed to add');
        }

        return redirect()->back();

    }

    public function showJsonClient($id) {
        $clients = Client::find($id);
        return response()->json($clients);
    }

    public function update(Request $request, $id)
    {
        $clientName = $request->name;

        $client = Client::find($id);
        $client->name = strtoupper($clientName);
        $client->jenis = $request->jenis;
        $client->produk = $request->produk;
        $client->skema = $request->skema;
        $client->sertifikasi = $request->sertifikasi;

        if($request->hasFile("logo")){
            $clientLogo = $request->file('logo');
            $fileName = $clientLogo->getClientOriginalName();
            $clientLogo->move(Storage::disk('public')->path('images/clients'), $fileName);
            $client->logo = $fileName;
        }

        $client->save();

        if ($client->save()) {
            Alert::success('Success', 'Client has been updated');
        } else {
            Alert::error('Failed', 'Client failed to update');
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Client::find($id);
            $delete->delete();

            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Category has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    public function show($id)
    {
        $clients = Client::find($id);
        return view("client.page.services.iso.iso-manajemen", compact("clients"));
    }

    public function changeClientStatus($id)
    {
        $clients = Client::find($id);
        if ($clients != null) {
            $clients->status = !$clients->status;
            $clients->save();
        }

        if ($clients->status == 1) {
            Alert::success('Success', 'Client has been activated');
        } else {
            Alert::success('Success', 'Client has been deactivated');
        }

        return redirect()->back();
    }
}
