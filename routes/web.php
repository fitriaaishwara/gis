<?php

use App\Constant;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\categorySchema_Controller;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\AboutUsController;
use App\Http\Controllers\Client\ContactUsController;
use App\Http\Controllers\Client\CustomersController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\InformationController;
use App\Http\Controllers\Client\ServicesController;
use App\Http\Controllers\Admin\PopUpController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\Service_Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing Page
// home
Route::get('/', [HomeController::class, 'index'])->name('home');
// about us
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about');
// services
Route::get('/sertifikasi-iso/9001', [ServicesController::class, 'iso9001'])->name('iso9001');
Route::get('/sertifikasi-iso/45001', [ServicesController::class, 'iso45001'])->name('iso45001');
Route::get('/sertifikasi-iso/37001', [ServicesController::class, 'iso37001'])->name('iso37001');

Route::get('/sertifikasi-sni/produk', [ServicesController::class, 'sniProduk'])->name('sniProduk');
Route::get('/sertifikasi-sni/proses', [ServicesController::class, 'sniProses'])->name('sniProses');
Route::get('/sertifikasi-sni/produk/jasa/pasar-rakyat', [ServicesController::class, 'sniPasar'])->name('sniPasar');
Route::get('/sertifikasi-sni/produk/jasa/layanan-rehabilitasi', [ServicesController::class, 'sniRehab'])->name('sniRehab');

Route::get('/sertifikasi-pariwisata/usaha-pariwisata', [ServicesController::class, 'sertifikasiPariwisata'])->name('sertifikasiPariwisata');
Route::get('/sertifikasi-pariwisata/chse', [ServicesController::class, 'sertifikasiChse'])->name('sertifikasiChse');
Route::get('/sertifikasi-pariwisata/sertifikasi-bintang', [ServicesController::class, 'sertifikasiBintang'])->name('sertifikasiBintang');

Route::get('/sertifikasi-ispo', [ServicesController::class, 'sertifikasiIspo'])->name('sertifikasiIspo');
Route::get('/uji-laboratorium', [ServicesController::class, 'ujiLab'])->name('ujiLab');
Route::get('/inspeksi', [ServicesController::class, 'inspeksi'])->name('inspeksi');

//information
Route::get('/proses-sertifikasi/flowchart-sertifikasi', [InformationController::class, 'flowchartSertifikasi'])->name('flowchartSertifikasi');
Route::get('/proses-sertifikasi/keluhan-dan-banding', [InformationController::class, 'keluhandanbanding'])->name('keluhandanbanding');
// Route::get('/proses-sertifikasi/tanggung-gugat-ls', [InformationController::class, 'tanggungGugatLS'])->name('tanggungGugatLS');

Route::get('/artikel', [InformationController::class, 'artikel'])->name('artikel');
Route::get('detail/{slug}', [InformationController::class, 'detailArtikel'])->name('detailArtikel');
Route::get('/article/category/{name}', [InformationController::class, 'articlecategory'])->name('articlecategory');

Route::get('/gallery', [InformationController::class, 'gallery'])->name('gallery');
Route::get('/verifikasi-sertifikat', [InformationController::class, 'verifikasiSertifikat'])->name('verifikasiSertifikat');
Route::post('/verifikasi-sertifikat', [InformationController::class, 'verifikasiSearch']);
Route::get('/detail-sertifikat/lsup/{id}', [InformationController::class, 'detail'])->name('detailverifikasiLsup');
Route::get('/detail-sertifikat/chse/{id}', [InformationController::class, 'detail'])->name('detailverifikasiChse');
Route::get('/detail-sertifikat/lspro/{id}', [InformationController::class, 'detail'])->name('detailverifikasiLspro');
Route::get('/detail-sertifikat/pasarRakyat/{id}', [InformationController::class, 'detail'])->name('detailverifikasipasarRakyat');
Route::get('/detail-sertifikat/sistem-9001/{id}', [InformationController::class, 'detail'])->name('detailverifikasi9001');
Route::get('/detail-sertifikat/sistem-45001/{id}', [InformationController::class, 'detail'])->name('detailverifikasi45001');
Route::get('/detail-sertifikat/sistem-37001/{id}', [InformationController::class, 'detail'])->name('detailverifikasi37001');
Route::get('/detail-sertifikat/ispo/{id}', [InformationController::class, 'detail'])->name('detailverifikasiIspo');

Route::get('/informasi-proses-sertifikasi', [InformationController::class, 'InformasiProsesSertifikasi'])->name('InformasiProsesSertifikasi');

//customer
Route::get('/customer-list', [CustomersController::class, 'customerList'])->name('customerList');


//contact us
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');
Route::post('/sendMail', [MessageController::class, 'sendMail']);
Route::post('/kirimEmail', [MessageController::class, 'kirimEmail']);


// admin side
Route::get('/dashboard', [DashboardController::class, "index"])->middleware(['auth'])->name('dashboard');

Route::group(["middleware" => ["auth"]], function () {
    Route::group(["middleware" => ["role:" . Constant::ROLE_SUPER_ADMIN], "prefix" => "admin"], function () {
        Route::group(["prefix" => "users"], function () {
            Route::get("/", [UserController::class, "index"]);
            Route::get("/{id}/edit", [UserController::class, "showJsonUser"]);
            Route::post("/", [UserController::class, "store"]);
            Route::post("/edit/update/{id}", [UserController::class, "update"]);
            Route::post("/delete/{id}", [UserController::class, "delete"]);
            Route::get("/update/toggle/{id}", [UserController::class, "changeUserStatus"]);
        });

        Route::group(["prefix"=>"settings"], function(){
            Route::get("/", [SettingsController::class, "index"]);
        });
    });

    Route::group(["middleware" => ["role:" . Constant::ROLE_ADMIN . "," . Constant::ROLE_SUPER_ADMIN], "prefix" => "admin"], function () {

        Route::group(["prefix"=>"certificates"], function () {
            Route::get("/", [CertificateController::class, "index"]);
            Route::get("/add", [CertificateController::class, "create"]);
            Route::post("/create", [CertificateController::class, "store"]);
            Route::get("/edit/{id}", [CertificateController::class, "edit"]);
            Route::post("/update/{id}", [CertificateController::class, "update"]);
            Route::get("/delete/{id}", [CertificateController::class, "delete"]);
            Route::get("generateCode/{id}", [CertificateController::class, "generateQrCode"]);

            Route::get("/lsup", [CertificateController::class, "indexLsup"]);
            Route::get("/lsup/add", [CertificateController::class, "createLsup"]);
            Route::post("/lsup/create", [CertificateController::class, "storeLsup"]);
            Route::get("/lsup/edit/{id}", [CertificateController::class, "editLsup"]);
            Route::post("/lsup/update/{id}", [CertificateController::class, "updateLsup"]);
            Route::post("/lsup/delete/{id}", [CertificateController::class, "deleteLsup"]);
            Route::get("lsup/generateCode/{id}", [CertificateController::class, "generateQrCodeLsup"]);

            Route::get("/chse", [CertificateController::class, "indexChse"]);
            Route::get("/chse/add", [CertificateController::class, "createChse"]);
            Route::post("/chse/create", [CertificateController::class, "storeChse"]);
            Route::get("/chse/edit/{id}", [CertificateController::class, "editChse"]);
            Route::post("/chse/update/{id}", [CertificateController::class, "updateChse"]);
            Route::post("/chse/delete/{id}", [CertificateController::class, "deleteChse"]);
            Route::get("chse/generateCode/{id}", [CertificateController::class, "generateQrCodeChse"]);

            Route::get("/lspro", [CertificateController::class, "indexLspro"]);
            Route::get("/lspro/add", [CertificateController::class, "createLspro"]);
            Route::post("/lspro/create", [CertificateController::class, "storeLspro"]);
            Route::get("/lspro/edit/{id}", [CertificateController::class, "editLspro"]);
            Route::post("/lspro/update/{id}", [CertificateController::class, "updateLspro"]);
            Route::post("/lspro/delete/{id}", [CertificateController::class, "deleteLspro"]);
            Route::get("lspro/generateCode/{id}", [CertificateController::class, "generateQrCodeLspro"]);

            Route::get("/pasarRakyat", [CertificateController::class, "indexpasarRakyat"]);
            Route::get("/pasarRakyat/add", [CertificateController::class, "createpasarRakyat"]);
            Route::post("/pasarRakyat/create", [CertificateController::class, "storepasarRakyat"]);
            Route::get("/pasarRakyat/edit/{id}", [CertificateController::class, "editpasarRakyat"]);
            Route::post("/pasarRakyat/update/{id}", [CertificateController::class, "updatepasarRakyat"]);
            Route::post("/pasarRakyat/delete/{id}", [CertificateController::class, "deletepasarRakyat"]);
            Route::get("pasarRakyat/generateCode/{id}", [CertificateController::class, "generateQrCodepasarRakyat"]);

            Route::get("/9001", [CertificateController::class, "index9001"]);
            Route::get("/9001/add", [CertificateController::class, "create9001"]);
            Route::post("/9001/create", [CertificateController::class, "store9001"]);
            Route::get("/9001/edit/{id}", [CertificateController::class, "edit9001"]);
            Route::post("/9001/update/{id}", [CertificateController::class, "update9001"]);
            Route::post("/9001/delete/{id}", [CertificateController::class, "delete9001"]);
            Route::get("9001/generateCode/{id}", [CertificateController::class, "generateQrCode9001"]);

            Route::get("/45001", [CertificateController::class, "index45001"]);
            Route::get("/45001/add", [CertificateController::class, "create45001"]);
            Route::post("/45001/create", [CertificateController::class, "store45001"]);
            Route::get("/45001/edit/{id}", [CertificateController::class, "edit45001"]);
            Route::post("/45001/update/{id}", [CertificateController::class, "update45001"]);
            Route::post("/45001/delete/{id}", [CertificateController::class, "delete45001"]);
            Route::get("45001/generateCode/{id}", [CertificateController::class, "generateQrCode45001"]);

            Route::get("/37001", [CertificateController::class, "index37001"]);
            Route::get("/37001/add", [CertificateController::class, "create37001"]);
            Route::post("/37001/create", [CertificateController::class, "store37001"]);
            Route::get("/37001/edit/{id}", [CertificateController::class, "edit37001"]);
            Route::post("/37001/update/{id}", [CertificateController::class, "update37001"]);
            Route::post("/37001/delete/{id}", [CertificateController::class, "delete37001"]);
            Route::get("37001/generateCode/{id}", [CertificateController::class, "generateQrCode37001"]);

            Route::get("/ispo", [CertificateController::class, "indexispo"]);
            Route::get("/ispo/add", [CertificateController::class, "createispo"]);
            Route::post("/ispo/create", [CertificateController::class, "storeispo"]);
            Route::get("/ispo/edit/{id}", [CertificateController::class, "editispo"]);
            Route::post("/ispo/update/{id}", [CertificateController::class, "updateispo"]);
            Route::post("/ispo/delete/{id}", [CertificateController::class, "deleteispo"]);
            Route::get("ispo/generateCode/{id}", [CertificateController::class, "generateQrCodeispo"]);
        });
        Route::group(["prefix" => "clients"], function () {
            Route::get("/", [ClientController::class, "index"]);
            Route::get("/{id}/edit", [ClientController::class, "showJsonClient"]);
            Route::post("/", [ClientController::class, "store"]);
            Route::post("/edit/update/{id}", [ClientController::class, "update"]);
            Route::post("/delete/{id}", [ClientController::class, "delete"]);
            Route::get("/update/toggle/{id}", [ClientController::class, "changeClientStatus"]);
        });

        Route::group(["prefix" => "services"], function () {
            Route::get("/schema/iso/9001", [Service_Controller::class, "index9001"]);
            Route::get("/schema/iso/9001/{id}/edit", [Service_Controller::class, "showJson9001"]);
            Route::post("/schema/iso/9001/", [Service_Controller::class, "store9001"]);
            Route::post("/schema/iso/9001/edit/update/{id}", [Service_Controller::class, "update9001"]);
            Route::post("/schema/iso/9001/delete/{id}", [Service_Controller::class, "delete9001"]);

            Route::get("/schema/iso/45001", [Service_Controller::class, "index45001"]);
            Route::get("/schema/iso/45001/{id}/edit", [Service_Controller::class, "showjson45001"]);
            Route::post("/schema/iso/45001/", [Service_Controller::class, "store45001"]);
            Route::post("/schema/iso/45001/edit/update/{id}", [Service_Controller::class, "update45001"]);
            Route::post("/schema/iso/45001/delete/{id}", [Service_Controller::class, "delete45001"]);


            Route::get("/schema/iso/37001", [Service_Controller::class, "index37001"]);
            Route::get("/schema/iso/37001/{id}/edit", [Service_Controller::class, "showjson37001"]);
            Route::post("/schema/iso/37001/", [Service_Controller::class, "store37001"]);
            Route::post("/schema/iso/37001/edit/update/{id}", [Service_Controller::class, "update37001"]);
            Route::post("/schema/iso/37001/delete/{id}", [Service_Controller::class, "delete37001"]);


            Route::get("/schema/sni/lspro", [Service_Controller::class, "indexLspro"]);
            Route::get("/schema/sni/lspro/{id}/edit", [Service_Controller::class, "showJsonLspro"]);
            Route::post("/schema/sni/lspro/", [Service_Controller::class, "storeLspro"]);
            Route::post("/schema/sni/lspro/edit/update/{id}", [Service_Controller::class, "updateLspro"]);
            Route::post("/schema/sni/lspro/delete/{id}", [Service_Controller::class, "deleteLspro"]);

            // Route::get("/schema/sni/jasa/pasar-rakyat", [Service_Controller::class, "indexPasarRakyat"]);
            // Route::get("/schema/sni/jasa/pasar-rakyat/{id}/edit", [Service_Controller::class, "showJsonPasarRakyat"]);
            // Route::post("/schema/sni/jasa/pasar-rakyat/", [Service_Controller::class, "storePasarRakyat"]);
            // Route::post("/schema/sni/jasa/pasar-rakyat/edit/update/{id}", [Service_Controller::class, "updatePasarRakyat"]);
            // Route::post("/schema/sni/jasa/pasar-rakyat/delete/{id}", [Service_Controller::class, "deletePasarRakyat"]);

            // Route::get("/schema/sni/jasa/jasa-rehabilitasi", [Service_Controller::class, "indexJasaRehab"]);
            // Route::get("/schema/sni/jasa/jasa-rehabilitasi/{id}/edit", [Service_Controller::class, "showJsonJasaRehab"]);
            // Route::post("/schema/sni/jasa/jasa-rehabilitasi/", [Service_Controller::class, "storeJasaRehab"]);
            // Route::post("/schema/sni/jasa/jasa-rehabilitasi/edit/update/{id}", [Service_Controller::class, "updateJasaRehab"]);
            // Route::post("/schema/sni/jasa/jasa-rehabilitasi/delete/{id}", [Service_Controller::class, "deleteJasaRehab"]);

            Route::get("/schema/pariwisata/lsup", [Service_Controller::class, "indexLsup"]);
            Route::get("/schema/pariwisata/lsup/{id}/edit", [Service_Controller::class, "showJsonLsup"]);
            Route::post("/schema/pariwisata/lsup/", [Service_Controller::class, "storeLsup"]);
            Route::post("/schema/pariwisata/lsup/edit/update/{id}", [Service_Controller::class, "updateLsup"]);
            Route::post("/schema/pariwisata/lsup/delete/{id}", [Service_Controller::class, "deleteLsup"]);

            // Route::get("/schema/pariwisata/chse", [Service_Controller::class, "indexChse"]);
            // Route::get("/schema/pariwisata/chse/{id}/edit", [Service_Controller::class, "showJsonChse"]);
            // Route::post("/schema/pariwisata/chse/", [Service_Controller::class, "storeChse"]);
            // Route::post("/schema/pariwisata/chse/edit/update/{id}", [Service_Controller::class, "updateChse"]);
            // Route::post("/schema/pariwisata/chse/delete/{id}", [Service_Controller::class, "deleteChse"]);

            // Route::get("/schema/pariwisata/sertifikasi-bintang", [Service_Controller::class, "indexSertifikasiBintang"]);
            // Route::get("/schema/pariwisata/sertifikasi-bintang/{id}/edit", [Service_Controller::class, "showJsonSertifikasiBintang"]);
            // Route::post("/schema/pariwisata/sertifikasi-bintang/", [Service_Controller::class, "storeSertifikasiBintang"]);
            // Route::post("/schema/pariwisata/sertifikasi-bintang/edit/update/{id}", [Service_Controller::class, "updateSertifikasiBintang"]);
            // Route::post("/schema/pariwisata/sertifikasi-bintang/delete/{id}", [Service_Controller::class, "deleteSertifikasiBintang"]);

            Route::get("/schema/ispo", [Service_Controller::class, "indexIspo"]);
            Route::get("/schema/ispo/{id}/edit", [Service_Controller::class, "showJsonIspo"]);
            Route::post("/schema/ispo/", [Service_Controller::class, "storeIspo"]);
            Route::post("/schema/ispo/edit/update/{id}", [Service_Controller::class, "updateIspo"]);
            Route::post("/schema/ispo/delete/{id}", [Service_Controller::class, "deleteIspo"]);

            // Route::get("/schema/uji-laboratorium", [Service_Controller::class, "indexUjiLab"]);
            // Route::get("/schema/uji-laboratorium/{id}/edit", [Service_Controller::class, "showJsonUjiLab"]);
            // Route::post("/schema/uji-laboratorium/", [Service_Controller::class, "storeUjiLab"]);
            // Route::post("/schema/uji-laboratorium/edit/update/{id}", [Service_Controller::class, "updateUjiLab"]);
            // Route::post("/schema/uji-laboratorium/delete/{id}", [Service_Controller::class, "deleteUjiLab"]);

            // Route::get("/schema/inspeksi", [Service_Controller::class, "indexInspeksi"]);
            // Route::get("/schema/inspeksi/{id}/edit", [Service_Controller::class, "showJsonInspeksi"]);
            // Route::post("/schema/inspeksi/", [Service_Controller::class, "storeInspeksi"]);
            // Route::post("/schema/inspeksi/edit/update/{id}", [Service_Controller::class, "updateInspeksi"]);
            // Route::post("/schema/inspeksi/delete/{id}", [Service_Controller::class, "deleteInspeksi"]);

            Route::get("/category/iso/9001", [categorySchema_Controller::class, "index9001"]);
            Route::get("/category/iso/9001/{id}/edit", [categorySchema_Controller::class, "showJson9001"]);
            Route::post("/category/iso/9001/", [categorySchema_Controller::class, "store9001"]);
            Route::post("/category/iso/9001/edit/update/{id}", [categorySchema_Controller::class, "update9001"]);
            Route::post("/category/iso/9001/delete/{id}", [categorySchema_Controller::class, "delete9001"]);

            Route::get("/category/iso/45001", [categorySchema_Controller::class, "index45001"]);
            Route::get("/category/iso/45001/{id}/edit", [categorySchema_Controller::class, "showJson45001"]);
            Route::post("/category/iso/45001/", [categorySchema_Controller::class, "store45001"]);
            Route::post("/category/iso/45001/edit/update/{id}", [categorySchema_Controller::class, "update45001"]);
            Route::post("/category/iso/45001/delete/{id}", [categorySchema_Controller::class, "delete45001"]);

            Route::get("/category/iso/37001", [categorySchema_Controller::class, "index37001"]);
            Route::get("/category/iso/37001/{id}/edit", [categorySchema_Controller::class, "showJson37001"]);
            Route::post("/category/iso/37001/", [categorySchema_Controller::class, "store37001"]);
            Route::post("/category/iso/37001/edit/update/{id}", [categorySchema_Controller::class, "update37001"]);
            Route::post("/category/iso/37001/delete/{id}", [categorySchema_Controller::class, "delete37001"]);

            Route::get("/category/sni/lspro", [categorySchema_Controller::class, "indexLspro"]);
            Route::get("/category/sni/lspro/{id}/edit", [categorySchema_Controller::class, "showJsonLspro"]);
            Route::post("/category/sni/lspro/", [categorySchema_Controller::class, "storeLspro"]);
            Route::post("/category/sni/lspro/edit/update/{id}", [categorySchema_Controller::class, "updateLspro"]);
            Route::post("/category/sni/lspro/delete/{id}", [categorySchema_Controller::class, "deleteLspro"]);

            // Route::get("/category/sni/pasar-rakyat", [categorySchema_Controller::class, "indexPasar"]);
            // Route::get("/category/sni/pasar-rakyat/{id}/edit", [categorySchema_Controller::class, "showJsonPasar"]);
            // Route::post("/category/sni/pasar-rakyat/", [categorySchema_Controller::class, "storePasar"]);
            // Route::post("/category/sni/pasar-rakyat/edit/update/{id}", [categorySchema_Controller::class, "updatePasar"]);
            // Route::post("/category/sni/pasar-rakyat/delete/{id}", [categorySchema_Controller::class, "deletePasar"]);

            // Route::get("/category/sni/jasa-rehabilitasi", [categorySchema_Controller::class, "indexRehab"]);
            // Route::get("/category/sni/jasa-rehabilitasi/{id}/edit", [categorySchema_Controller::class, "showJsonRehab"]);
            // Route::post("/category/sni/jasa-rehabilitasi/", [categorySchema_Controller::class, "storeRehab"]);
            // Route::post("/category/sni/jasa-rehabilitasi/edit/update/{id}", [categorySchema_Controller::class, "updateRehab"]);
            // Route::post("/category/sni/jasa-rehabilitasi/delete/{id}", [categorySchema_Controller::class, "deleteRehab"]);

            // Route::get("/category/pariwisata/chse", [categorySchema_Controller::class, "indexChse"]);
            // Route::get("/category/pariwisata/chse/{id}/edit", [categorySchema_Controller::class, "showJsonChse"]);
            // Route::post("/category/pariwisata/chse/", [categorySchema_Controller::class, "storeChse"]);
            // Route::post("/category/pariwisata/chse/edit/update/{id}", [categorySchema_Controller::class, "updateChse"]);
            // Route::post("/category/pariwisata/chse/delete/{id}", [categorySchema_Controller::class, "deleteChse"]);

            Route::get("/category/pariwisata/lsup", [categorySchema_Controller::class, "indexLsup"]);
            Route::get("/category/pariwisata/lsup/{id}/edit", [categorySchema_Controller::class, "showJsonLsup"]);
            Route::post("/category/pariwisata/lsup/", [categorySchema_Controller::class, "storeLsup"]);
            Route::post("/category/pariwisata/lsup/edit/update/{id}", [categorySchema_Controller::class, "updateLsup"]);
            Route::post("/category/pariwisata/lsup/delete/{id}", [categorySchema_Controller::class, "deleteLsup"]);

            // Route::get("/category/pariwisata/sertifikasi-bintang", [categorySchema_Controller::class, "indexSertifBintang"]);
            // Route::get("/category/pariwisata/sertifikasi-bintang/{id}/edit", [categorySchema_Controller::class, "showJsonSertifBintang"]);
            // Route::post("/category/pariwisata/sertifikasi-bintang/", [categorySchema_Controller::class, "storeSertifBintang"]);
            // Route::post("/category/pariwisata/sertifikasi-bintang/edit/update/{id}", [categorySchema_Controller::class, "updateSertifBintang"]);
            // Route::post("/category/pariwisata/sertifikasi-bintang/delete/{id}", [categorySchema_Controller::class, "deleteSertifBintang"]);

            Route::get("/category/ispo", [categorySchema_Controller::class, "indexIspo"]);
            Route::get("/category/ispo/{id}/edit", [categorySchema_Controller::class, "showJsonIspo"]);
            Route::post("/category/ispo/", [categorySchema_Controller::class, "storeIspo"]);
            Route::post("/category/ispo/edit/update/{id}", [categorySchema_Controller::class, "updateIspo"]);
            Route::post("/category/ispo/delete/{id}", [categorySchema_Controller::class, "deleteIspo"]);

            // Route::get("/category/uji-laboratorium", [categorySchema_Controller::class, "indexUjiLab"]);
            // Route::get("/category/uji-laboratorium/{id}/edit", [categorySchema_Controller::class, "showJsonUjiLab"]);
            // Route::post("/category/uji-laboratorium/", [categorySchema_Controller::class, "storeUjiLab"]);
            // Route::post("/category/uji-laboratorium/edit/update/{id}", [categorySchema_Controller::class, "updateUjiLab"]);
            // Route::post("/category/uji-laboratorium/delete/{id}", [categorySchema_Controller::class, "deleteUjiLab"]);

            // Route::get("/category/inspeksi", [categorySchema_Controller::class, "indexInspeksi"]);
            // Route::get("/category/inspeksi/{id}/edit", [categorySchema_Controller::class, "showJsonInspeksi"]);
            // Route::post("/category/inspeksi/", [categorySchema_Controller::class, "storeInspeksi"]);
            // Route::post("/category/inspeksi/edit/update/{id}", [categorySchema_Controller::class, "updateInspeksi"]);
            // Route::post("/category/inspeksi/delete/{id}", [categorySchema_Controller::class, "deleteInspeksi"]);
        });
    });

    Route::group(["middleware" => ["role:" . Constant::ROLE_AUTHOR . "," . Constant::ROLE_SUPER_ADMIN], "prefix" => "admin"], function () {
        Route::group(["prefix" => "articles"], function () {
            // Route::get("/all-article", [ArticleController::class, "showAllArticle"]);
            Route::get("/", [ArticleController::class, "index"]);
            Route::get("/add-article", [ArticleController::class, "create"]);
            Route::post("/add-article", [ArticleController::class, "store"]);
            Route::get("/edit/{id}", [ArticleController::class, "edit"]);
            Route::post("/edit/update/{id}", [ArticleController::class, "update"]);
            Route::get("/delete/{id}", [ArticleController::class, "delete"]);
            Route::get("/update/toggle/{id}", [ArticleController::class, "changeArticleStatus"]);
            Route::get('/restore/{id}', [ArticleController::class, "restore"]);
            Route::get('/restore/all', [ArticleController::class, "restoreAll"]);
            Route::post('/create-meta', [ArticleController::class, "createMeta"]);
        });
        Route::group(["prefix" => "categories"], function () {
            Route::get("/", [CategoriesController::class, "index"]);
            Route::get("/{id}/edit", [CategoriesController::class, "showJsonCat"]);
            Route::post("/", [CategoriesController::class, "store"]);
            Route::post("/edit/update/{id}", [CategoriesController::class, "update"]);
            Route::post("/delete/{id}", [CategoriesController::class, "delete"]);
        });
        Route::group(["prefix" => "gallery"], function(){
            Route::get("/", [GalleryController::class, "index"]);
            Route::get("/{id}/edit", [GalleryController::class, "showJsonGallery"]);
            Route::post("/", [GalleryController::class, "store"]);
            Route::post("/edit/update/{id}", [GalleryController::class, "update"]);
            Route::post("/delete/{id}", [GalleryController::class, "delete"]);
        });
        Route::group(["prefix" => "pop-up"], function () {
            Route::get("/", [PopUpController::class, "index"]);
            Route::get("/{id}/edit", [PopUpController::class, "showJson"]);
            Route::post("/create", [PopUpController::class, "store"]);
            Route::post("/edit/update/{id}", [PopUpController::class, "update"]);
            Route::get("/{id}", [PopUpController::class, "show"]);
            Route::post("/delete/{id}", [PopUpController::class, "destroy"]);

        });
        Route::group(["prefix" => "slider"], function () {
            Route::get("/", [SliderController::class, "index"]);
            Route::get("/{id}/edit", [SliderController::class, "showJson"]);
            Route::post("/", [SliderController::class, "store"]);
            // Route::get("/edit/{id}", [LandingController::class, "editSlider"]);
            Route::post("/edit/update/{id}", [SliderController::class, "update"]);
            Route::post("/delete/{id}", [SliderController::class, "delete"]);
            Route::get("/update/toggle/{id}", [SliderController::class, "changeSliderStatus"]);
            // Route::post("/update/button/{id}", [SliderController::class, "updateButtonSlider"]);
            Route::get("/update/button/toggle/{id}", [SliderController::class, "changeButtonSliderStatus"]);
        });

    });

    Route::group(["middleware" => ["role:" . Constant::ROLE_AUTHOR . "," . Constant::ROLE_ADMIN . "," . Constant::ROLE_SUPER_ADMIN], "prefix" => "admin"], function () {
        Route::group( ["prefix" => "profile"], function() {
            // Route::get("/", [ProfileController::class, "index"]);
            Route::get("/{id}", [ProfileController::class, "edit"]);
            Route::post("/update/{id}", [ProfileController::class, "update"]);
            Route::post("/update/password/{id}", [ProfileController::class, "updatePass"]);
        });
        Route::group(["prefix"=>"messages"], function() {
            // Route::get("/", [MessageController::class, "index"]);
            Route::get("/kritik-dan-saran", [MessageController::class, "indexKritik"]);
            Route::get("/kelengkapan-pengajuan", [MessageController::class, "indexPengajuan"]);
        });

    });
});


require __DIR__.'/auth.php';
