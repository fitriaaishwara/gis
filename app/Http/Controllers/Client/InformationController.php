<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleKeywords;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Certificate_37001;
use App\Models\Certificate_45001;
use App\Models\Certificate_9001;
use App\Models\Certificate_Chse;
use App\Models\Certificate_Ispo;
use App\Models\Certificate_Lspro;
use App\Models\Certificate_Lsup;
use App\Models\Certificate_Management;
use App\Models\Certificate_pasarRakyat;
use App\Models\Gallery;
use App\Models\PopUp;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.pages.information.index');
    }

    public function keluhandanbanding()
    {
        $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.information.prosesSertifikasi.keluhandanbanding', compact('popup'));
    }

    public function tanggungGugatLS()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.information.prosesSertifikasi.tanggungGugatLS', compact('popup'));
    }

    public function flowchartSertifikasi()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.information.prosesSertifikasi.flowchartSertfifikasi', compact('popup'));
    }

    public function InformasiProsesSertifikasi()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        return view('client.pages.information.infoProses', compact('popup'));
    }

    // public function prosesSertifikasiPariwisata()
    // {
    //             $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
    //     return view('client.pages.information.pariwisata', compact('popup'));
    // }

    // public function prosesUjiLab()
    // {
    //             $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
    //     return view('client.pages.information.ujilab', compact('popup'));
    // }

    public function artikel()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $articles = Article::with('articleHeaders', 'articleKeywords','categories')->where('publish_status', '1')->orderBy('created_at', 'DESC')->simplePaginate(2);
        if(request('search')) {
            $articles = Article::with('articleHeaders', 'articleKeywords','categories')->where('publish_status', '1')->where('title', 'like', '%'.request('search').'%')->orWhere('content', 'like', '%' . request('search') . '%')->orderBy('created_at', 'DESC')->simplePaginate(2);
        }


        // show article where publish status is 1 and count the article per category
        $articleCat = Category::withCount(['articles' => function ($query) {
            $query->where('publish_status', '1');
        }])->get();

        $articlesRecent = Article::with('articleHeaders', 'articleKeywords')->where('publish_status', '1')->orderBy('created_at', 'ASC')->limit(5)->get();
        $keywords = ArticleKeywords::all();
        return view('client.pages.information.artikel.artikel', compact('articles', 'articleCat', 'articlesRecent', 'keywords', compact('popup')));
    }


    public function detailArtikel($slug)
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $articles = Article::with('articleHeaders', 'articleKeywords')->where('slug', $slug)->get();
         // show article where publish status is 1 and count the article per category
        $articleCat = Category::withCount(['articles' => function ($query) {
            $query->where('publish_status', '1');
        }])->get();

        $articlesRecent = Article::with('articleHeaders', 'articleKeywords')->where('publish_status', '1')->orderBy('created_at', 'ASC')->limit(5)->get();
        return view('client.pages.information.artikel.detailArtikel', compact('articles', 'articleCat', 'articlesRecent', compact('popup')));
    }

    public function articlecategory($nama)
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $articles = Article::with('articleHeaders', 'articleKeywords', 'categories')->whereHas('categories', function ($query) use ($nama) {
            $query->where('name', $nama);
        })->where('publish_status', '1')->orderBy('created_at', 'DESC')->simplePaginate(10);
        return view('client.pages.information.artikel.artikelCategory', compact('articles', compact('popup')));
    }

    public function gallery()
    {
                $popup = PopUp::where('status', true)->orderByDesc('created_at')->first();
        $gallery = Gallery::all();
        return view('client.pages.information.gallery', compact('gallery', compact('popup')));
    }

    public function verifikasiSertifikat()
    {

        return view('client.pages.information.verifikasiSertifikat');
    }

    // function verifikasiSearch(Request $request) {
    //     $company_name = $request->get('company_name');
    //     $agreement_number = $request->get('agreement_number');

    //     // search data by participant name and certificate number
    //     // if data not available please give a alert back to previous page

    //     $verifikasi = Certificate_Lsup::where('company_name', $company_name)
    //         ->where('agreement_number', $agreement_number)
    //         ->first();

    //         dd($verifikasi);

    //     if ($verifikasi) {
    //         return redirect()->route('detailverifikasi', $verifikasi->id);
    //     } else {
    //         toast('Data tidak ditemukan', 'error');
    //         return redirect()->back();
    //     }
    // }

    public function verifikasiSearch(Request $request) {
        if (Certificate_Lsup::where('company_name', $request->get('company_name'))->where('agreement_number', $request->get('agreement_number'))->exists()) {
            $certificateLsup = Certificate_Lsup::where('company_name', $request->get('company_name'))->where('agreement_number', $request->get('agreement_number'))->first();
            return redirect()->route('detailverifikasiLsup', $certificateLsup->id);
        } elseif (Certificate_Chse::where('company_name', $request->get('company_name'))->where('agreement_number', $request->get('agreement_number'))->exists()) {
            $certificateChse = Certificate_Chse::where('company_name', $request->get('company_name'))->where('agreement_number', $request->get('agreement_number'))->first();
            return redirect()->route('detailverifikasiChse', $certificateChse->id);
        } elseif (Certificate_Lspro::where('company_name', $request->get('company_name'))->where('sni_number', $request->get('sni_number'))->exists()) {
            $certificateLspro = Certificate_Lspro::where('company_name', $request->get('company_name'))->where('sni_number', $request->get('sni_number'))->first();
            return redirect()->route('detailverifikasiLspro', $certificateLspro->id);
        } elseif (Certificate_pasarRakyat::where('namaPasar', $request->get('namaPasar'))->where('nomorSNI', $request->get('nomorSNI'))->exists()) {
            $certificatepasarRakyat = Certificate_pasarRakyat::where('namaPasar', $request->get('namaPasar'))->where('nomorSNI', $request->get('nomorSNI'))->first();
            return redirect()->route('detailverifikasipasarRakyat', $certificatepasarRakyat->id);
        } elseif (Certificate_9001::where('company_name', $request->get('company_name'))->where('scope', $request->get('scope'))->exists()) {
            $certificate9001 = Certificate_9001::where('scope', $request->get('scope'))->first();
            return redirect()->route('detailverifikasi9001', $certificate9001->id);
        } elseif (Certificate_45001::where('company_name', $request->get('company_name'))->where('scope', $request->get('scope'))->exists()) {
            $certificate45001 = Certificate_45001::where('scope', $request->get('scope'))->first();
            return redirect()->route('detailverifikasi45001', $certificate45001->id);
        } elseif (Certificate_37001::where('company_name', $request->get('company_name'))->where('scope', $request->get('scope'))->exists()) {
            $certificate37001 = Certificate_37001::where('scope', $request->get('scope'))->first();
            return redirect()->route('detailverifikasi37001', $certificate37001->id);
        } elseif (Certificate_Ispo::where('nama_perusahaan', $request->get('nama_perusahaan'))->where('no_sertifikat', $request->get('no_sertifikat'))->exists()) {
            $certificateispo = Certificate_Ispo::where('no_sertifikat', $request->get('no_sertifikat'))->first();
            return redirect()->route('detailverifikasiIspo', $certificateispo->id);
        } else {
            alert()->error('Data tidak ditemukan');
            return redirect()->back();
        }
    }

    public function detail($id) {

        if ($verifikasi=Certificate_Lsup::find($id)) {
            return view("client.pages.information.certificate.detailverifikasiLsup", compact("verifikasi"));
        } elseif ($verifikasi=Certificate_Chse::find($id)) {
            return view("client.pages.information.certificate.detailverifikasiChse", compact("verifikasi"));
        } elseif ($verifikasi=Certificate_Lspro::find($id)) {
            return view("client.pages.information.certificate.detailverifikasiLspro", compact("verifikasi"));
        } elseif ($verifikasi=Certificate_pasarRakyat::find($id)) {
            return view("client.pages.information.certificate.detailverifikasipasarRakyat", compact("verifikasi"));
        } elseif ($verifikasi=Certificate_9001::find($id)) {
            return view("client.pages.information.certificate.detailverifikasi9001", compact("verifikasi"));
        } elseif ($verifikasi=Certificate_45001::find($id)) {
            return view("client.pages.information.certificate.detailverifikasi45001", compact("verifikasi"));
        } elseif ($verifikasi=Certificate_37001::find($id)) {
            return view("client.pages.information.certificate.detailverifikasi37001", compact("verifikasi"));
        } elseif ($verifikasi=Certificate_Ispo::find($id)) {
            return view("client.pages.information.certificate.detailverifikasiIspo", compact("verifikasi"));
        } else {
            toast('Data tidak ditemukan', 'error');
            return redirect()->back();
        }

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
