<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category_Iso37001;
use App\Models\Category_Iso45001;
use App\Models\Category_Iso9001;
use App\Models\Category_Ispo;
use App\Models\Category_Lspro;
use App\Models\Category_Lsup;
use App\Models\Category_PasarRakyat;
use App\Models\PopUp;
use App\Models\Schema_Iso37001;
use App\Models\Schema_Iso45001;
use App\Models\Schema_Iso9001;
use App\Models\Schema_Ispo;
use App\Models\Schema_Lspro;
use App\Models\Schema_Lsup;
use App\Models\Schema_PasarRakyat;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.pages.services.index');
    }

    public function sistemManajemen()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.services.sistemManajemen', compact('popup'));
    }

    public function iso9001()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $category9001 = Category_Iso9001::all();
        $schema = Schema_Iso9001::with('categories')->get();
        return view('client.pages.services.iso.iso9001', compact('popup', 'category9001', 'schema'));
    }

    public function iso45001()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $category45001 = Category_Iso45001::all();
        $schema = Schema_Iso45001::with('categories')->get();
        return view('client.pages.services.iso.iso45001', compact('popup', 'category45001', 'schema'));
    }

    public function iso37001()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $category37001 = Category_Iso37001::all();
        $schema = Schema_Iso37001::with('categories')->get();
        return view('client.pages.services.iso.iso37001', compact('popup', 'category37001', 'schema'));
    }

    public function sniProduk()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $categoryLspro = Category_Lspro::all();
        $schema = Schema_Lspro::with('categories')->get();
        return view('client.pages.services.sni.sniProduk', compact('popup', 'categoryLspro', 'schema'));
    }

    public function sniPasar()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $categoryPasar = Category_PasarRakyat::all();
        $schema = Schema_PasarRakyat::with('categories')->get();
        return view('client.pages.services.sni.jasa.sniPasar', compact('popup', 'categoryPasar', 'schema'));
    }

    public function sniRehab()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.services.sni.jasa.sniRehab', compact('popup'));
    }

    public function sniProses()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.services.sni.sniProses', compact('popup'));
    }


    public function sertifikasiPariwisata()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $categoryLsup = Category_Lsup::all();
        $schema = Schema_Lsup::with('categories')->get();
        return view('client.pages.services.pariwisata.sertifikasiPariwisata', compact('popup', 'categoryLsup', 'schema'));
    }

    public function sertifikasiChse()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.services.pariwisata.chse', compact('popup'));
    }

    public function sertifikasiBintang()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.services.pariwisata.sertifBintang', compact('popup'));
    }



    public function sertifikasiGreenIndustries()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.services.sertifikasiGreenIndustry', compact('popup'));
    }

    public function sertifikasiIspo()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $categoryIspo = Category_Ispo::all();
        $schema = Schema_Ispo::with('categories')->get();
        return view('client.pages.services.sertifikasiIspo', compact('popup', 'categoryIspo', 'schema'));
    }

    public function ujiLab()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.services.ujiLab', compact('popup'));
    }

    public function inspeksi()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.services.inspeksi', compact('popup'));
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
