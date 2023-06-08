<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Certificate_37001;
use App\Models\Certificate_Lspro;
use App\Models\Certificate_Lsup;
use App\Models\Certificate_45001;
use App\Models\Certificate_9001;
use App\Models\Certificate_Chse;
use App\Models\Certificate_Ispo;
use App\Models\Certificate_pasarRakyat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $art = Article::with('categories', 'user','articleHeaders')->orderBy('date', 'DESC')->latest()->get();

        $lsup = Certificate_Lsup::count();
        $chse = Certificate_Chse::count();
        $lspro = Certificate_Lspro::count();
        $pasarRakyat = Certificate_pasarRakyat::count();
        $jml_9001 = Certificate_9001::count();
        $jml_45001 = Certificate_45001::count();
        $jml_37001 = Certificate_37001::count();
        $ispo = Certificate_Ispo::count();

        $management = $jml_9001 + $jml_45001 + $jml_37001;
        $sni = $lspro + $pasarRakyat;
        $pariwisata = $lsup + $chse;

        $articles = Article::count();

        // dd($total_artikel);

        $article_january = Article::whereMonth('date', '1')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_february = Article::whereMonth('date', '2')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_march = Article::whereMonth('date', '3')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_april = Article::whereMonth('date', '4')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_may = Article::whereMonth('date', '5')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_june = Article::whereMonth('date', '6')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_july = Article::whereMonth('date', '7')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_august = Article::whereMonth('date', '8')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_september = Article::whereMonth('date', '9')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_october = Article::whereMonth('date', '10')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_november = Article::whereMonth('date', '11')->whereYear('date', date('Y'))->where('status', '1')->count();
        $article_december = Article::whereMonth('date', '12')->whereYear('date', date('Y'))->where('status', '1')->count();

        // $total_certificateLsup = DB::table('certificate_lsup')->where('status', '1')
        //     ->select(DB::raw('count(*) as total_certificateLsup, MONTHNAME(created_at) as bulan'))
        //     ->groupBy('bulan')
        //     ->get();

        // $total_certificateLspro = DB::table('certificate_lspro')->where('status', '1')
        //     ->select(DB::raw('count(*) as total_certificateLspro, MONTHNAME(created_at) as bulan'))
        //     ->groupBy('bulan')
        //     ->get();

        // $total_certificate9001= DB::table('certificate_9001')->where('status', '1')
        //     ->select(DB::raw('count(*) as total_certificate9001, MONTHNAME(created_at) as bulan'))
        //     ->groupBy('bulan')
        //     ->get();

        // $total_certificate45001 = DB::table('certificate_45001')->where('status', '1')
        //     ->select(DB::raw('count(*) as total_certificate45001, MONTHNAME(created_at) as bulan'))
        //     ->groupBy('bulan')
        //     ->get();

        // $total_certificateIspo = DB::table('certificate_ispo')->where('status', '1')
        //     ->select(DB::raw('count(*) as total_certificateIspo, MONTHNAME(created_at) as bulan'))
        //     ->groupBy('bulan')
        //     ->get();

        $lsup_january = Certificate_Lsup::whereMonth('created_at', '1')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_february = Certificate_Lsup::whereMonth('created_at', '2')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_march = Certificate_Lsup::whereMonth('created_at', '3')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_april = Certificate_Lsup::whereMonth('created_at', '4')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_may = Certificate_Lsup::whereMonth('created_at', '5')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_june = Certificate_Lsup::whereMonth('created_at', '6')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_july = Certificate_Lsup::whereMonth('created_at', '7')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_august = Certificate_Lsup::whereMonth('created_at', '8')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_september = Certificate_Lsup::whereMonth('created_at', '9')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_october = Certificate_Lsup::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_november = Certificate_Lsup::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lsup_december = Certificate_Lsup::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->where('status', '1')->count();

        $lspro_january = Certificate_Lspro::whereMonth('created_at', '1')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_february = Certificate_Lspro::whereMonth('created_at', '2')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_march = Certificate_Lspro::whereMonth('created_at', '3')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_april = Certificate_Lspro::whereMonth('created_at', '4')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_may = Certificate_Lspro::whereMonth('created_at', '5')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_june = Certificate_Lspro::whereMonth('created_at', '6')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_july = Certificate_Lspro::whereMonth('created_at', '7')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_august = Certificate_Lspro::whereMonth('created_at', '8')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_september = Certificate_Lspro::whereMonth('created_at', '9')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_october = Certificate_Lspro::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_november = Certificate_Lspro::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $lspro_december = Certificate_Lspro::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->where('status', '1')->count();

        $ispo_january = Certificate_Ispo::whereMonth('created_at', '1')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_february = Certificate_Ispo::whereMonth('created_at', '2')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_march = Certificate_Ispo::whereMonth('created_at', '3')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_april = Certificate_Ispo::whereMonth('created_at', '4')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_may = Certificate_Ispo::whereMonth('created_at', '5')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_june = Certificate_Ispo::whereMonth('created_at', '6')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_july = Certificate_Ispo::whereMonth('created_at', '7')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_august = Certificate_Ispo::whereMonth('created_at', '8')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_september = Certificate_Ispo::whereMonth('created_at', '9')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_october = Certificate_Ispo::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_november = Certificate_Ispo::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $ispo_december = Certificate_Ispo::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->where('status', '1')->count();

        $iso9001_january = Certificate_9001::whereMonth('created_at', '1')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_february = Certificate_9001::whereMonth('created_at', '2')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_march = Certificate_9001::whereMonth('created_at', '3')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_april = Certificate_9001::whereMonth('created_at', '4')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_may = Certificate_9001::whereMonth('created_at', '5')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_june = Certificate_9001::whereMonth('created_at', '6')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_july = Certificate_9001::whereMonth('created_at', '7')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_august = Certificate_9001::whereMonth('created_at', '8')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_september = Certificate_9001::whereMonth('created_at', '9')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_october = Certificate_9001::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_november = Certificate_9001::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso9001_december = Certificate_9001::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->where('status', '1')->count();

        $iso45001_january = Certificate_45001::whereMonth('created_at', '1')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_february = Certificate_45001::whereMonth('created_at', '2')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_march = Certificate_45001::whereMonth('created_at', '3')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_april = Certificate_45001::whereMonth('created_at', '4')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_may = Certificate_45001::whereMonth('created_at', '5')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_june = Certificate_45001::whereMonth('created_at', '6')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_july = Certificate_45001::whereMonth('created_at', '7')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_august = Certificate_45001::whereMonth('created_at', '8')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_september = Certificate_45001::whereMonth('created_at', '9')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_october = Certificate_45001::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_november = Certificate_45001::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso45001_december = Certificate_45001::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->where('status', '1')->count();

        $iso37001_january = Certificate_37001::whereMonth('created_at', '1')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_february = Certificate_37001::whereMonth('created_at', '2')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_march = Certificate_37001::whereMonth('created_at', '3')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_april = Certificate_37001::whereMonth('created_at', '4')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_may = Certificate_37001::whereMonth('created_at', '5')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_june = Certificate_37001::whereMonth('created_at', '6')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_july = Certificate_37001::whereMonth('created_at', '7')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_august = Certificate_37001::whereMonth('created_at', '8')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_september = Certificate_37001::whereMonth('created_at', '9')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_october = Certificate_37001::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_november = Certificate_37001::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $iso37001_december = Certificate_37001::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->where('status', '1')->count();

        $pasarRakyat_january = Certificate_pasarRakyat::whereMonth('created_at', '1')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_february = Certificate_pasarRakyat::whereMonth('created_at', '2')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_march = Certificate_pasarRakyat::whereMonth('created_at', '3')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_april = Certificate_pasarRakyat::whereMonth('created_at', '4')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_may = Certificate_pasarRakyat::whereMonth('created_at', '5')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_june = Certificate_pasarRakyat::whereMonth('created_at', '6')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_july = Certificate_pasarRakyat::whereMonth('created_at', '7')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_august = Certificate_pasarRakyat::whereMonth('created_at', '8')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_september = Certificate_pasarRakyat::whereMonth('created_at', '9')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_october = Certificate_pasarRakyat::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_november = Certificate_pasarRakyat::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $pasarRakyat_december = Certificate_pasarRakyat::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->where('status', '1')->count();

        $chse_january = Certificate_Chse::whereMonth('created_at', '1')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_february = Certificate_Chse::whereMonth('created_at', '2')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_march = Certificate_Chse::whereMonth('created_at', '3')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_april = Certificate_Chse::whereMonth('created_at', '4')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_may = Certificate_Chse::whereMonth('created_at', '5')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_june = Certificate_Chse::whereMonth('created_at', '6')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_july = Certificate_Chse::whereMonth('created_at', '7')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_august = Certificate_Chse::whereMonth('created_at', '8')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_september = Certificate_Chse::whereMonth('created_at', '9')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_october = Certificate_Chse::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_november = Certificate_Chse::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->where('status', '1')->count();
        $chse_december = Certificate_Chse::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->where('status', '1')->count();

        return view("admin.pages.dashboard.dashboard", compact('user', 'articles', 'art', 'lsup', 'lspro', 'management', 'ispo',
        'article_january', 'article_february', 'article_march', 'article_april', 'article_may', 'article_june', 'article_july', 'article_august', 'article_september', 'article_october', 'article_november', 'article_december',
        'pasarRakyat_january', 'pasarRakyat_february', 'pasarRakyat_march', 'pasarRakyat_april', 'pasarRakyat_may', 'pasarRakyat_june', 'pasarRakyat_july', 'pasarRakyat_august', 'pasarRakyat_september', 'pasarRakyat_october', 'pasarRakyat_november', 'pasarRakyat_december',
        'ispo_january', 'ispo_february', 'ispo_march', 'ispo_april', 'ispo_may', 'ispo_june', 'ispo_july', 'ispo_august', 'ispo_september', 'ispo_october', 'ispo_november', 'ispo_december',
        'chse_january', 'chse_february', 'chse_march', 'chse_april', 'chse_may', 'chse_june', 'chse_july', 'chse_august', 'chse_september', 'chse_october', 'chse_november', 'chse_december',
        'lsup_january', 'lsup_february', 'lsup_march', 'lsup_april', 'lsup_may', 'lsup_june', 'lsup_july', 'lsup_august', 'lsup_september', 'lsup_october', 'lsup_november', 'lsup_december',
        'lspro_january', 'lspro_february', 'lspro_march', 'lspro_april', 'lspro_may', 'lspro_june', 'lspro_july', 'lspro_august', 'lspro_september', 'lspro_october', 'lspro_november', 'lspro_december',
        'iso9001_january', 'iso9001_february', 'iso9001_march', 'iso9001_april', 'iso9001_may', 'iso9001_june', 'iso9001_july', 'iso9001_august', 'iso9001_september', 'iso9001_october', 'iso9001_november', 'iso9001_december',
        'iso37001_january', 'iso37001_february', 'iso37001_march', 'iso37001_april', 'iso37001_may', 'iso37001_june', 'iso37001_july', 'iso37001_august', 'iso37001_september', 'iso37001_october', 'iso37001_november', 'iso37001_december',
        'iso45001_january', 'iso45001_february', 'iso45001_march', 'iso45001_april', 'iso45001_may', 'iso45001_june', 'iso45001_july', 'iso45001_august', 'iso45001_september', 'iso45001_october', 'iso45001_november', 'iso45001_december',
        'sni', 'pariwisata'
        ));
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
