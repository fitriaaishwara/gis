<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category_Chse;
use App\Models\Category_Inspeksi;
use App\Models\Category_Iso37001;
use App\Models\Category_Iso45001;
use App\Models\Category_Iso9001;
use App\Models\Category_Ispo;
use App\Models\Category_JasaRehab;
use App\Models\Category_Lspro;
use App\Models\Category_Lsup;
use App\Models\Category_PasarRakyat;
use App\Models\Category_SertifBintang;
use App\Models\Category_UjiLab;
use App\Models\Schema_Chse;
use App\Models\Schema_Inspeksi;
use App\Models\Schema_Iso37001;
use App\Models\Schema_Iso45001;
use App\Models\Schema_Iso9001;
use App\Models\Schema_Ispo;
use App\Models\Schema_JasaRehab;
use App\Models\Schema_Lspro;
use App\Models\Schema_Lsup;
use App\Models\Schema_PasarRakyat;
use App\Models\Schema_SertifBintang;
use App\Models\Schema_ujiLab;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class categorySchema_Controller extends Controller
{
    //ISO
    //ISO 9001
    public function index9001()
    {
        $iso9001 = Category_Iso9001::all();
        return view('admin.pages.services.category.iso.9001', compact('iso9001'));
    }
    public function store9001(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_Iso9001();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJson9001($id)
    {
        $iso9001 = Category_Iso9001::find($id);
        return response()->json($iso9001);
    }

    public function update9001(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_Iso9001::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function delete9001($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Category_Iso9001::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_Iso9001::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_Iso9001::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Schema has been deleted'];

            } else {
                $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            }

        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    //ISO 45001
    public function index45001()
    {
        $iso45001 = Category_Iso45001::all();
        return view('admin.pages.services.category.iso.45001', compact('iso45001'));
    }
    public function store45001(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_Iso45001();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJson45001($id)
    {
        $iso45001 = Category_Iso45001::find($id);
        return response()->json($iso45001);
    }

    public function update45001(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_Iso45001::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function delete45001($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_Iso45001::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_Iso45001::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_Iso45001::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

     //ISO 45001
     public function index37001()
     {
         $iso37001 = Category_Iso37001::all();
         return view('admin.pages.services.category.iso.37001', compact('iso37001'));
     }
     public function store37001(Request $request)
     {
         $categoryName = $request->category_name;
         $categoryDescription = $request->category_description;
         $category = new Category_Iso37001();
         $category->category_name = $categoryName;
         $category->category_description = $categoryDescription;
         $category->save();
         if ($category->save()) {
             Alert::success('Success', 'Category has been added');
         } else {
             Alert::error('Failed', 'Category failed to add');
         }
         return redirect()->back();
     }
     public function showJson37001($id)
     {
         $iso37001 = Category_Iso37001::find($id);
         return response()->json($iso37001);
     }

     public function update37001(Request $request, $id)
     {
         $categoryName = $request->category_name;
         $categoryDescription = $request->category_description;
         $category = Category_Iso37001::find($id);
         $category->category_name = $categoryName;
         $category->category_description = $categoryDescription;
         $category->save();
         if ($category->save()) {
             Alert::success('Success', 'Category has been updated');
         } else {
             Alert::error('Failed', 'Category failed to update');
         }
         return redirect()->back();
     }

     public function delete37001($id)
     {
         try {
             $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
             $delete = Category_Iso37001::find($id);
             $delete->delete();

             if($delete) {
                 $artikelIds = Schema_Iso37001::where("category_id", $id)->pluck("id");
                 foreach ($artikelIds as $artikelId) {
                     $artikel = Schema_Iso37001::find($artikelId);
                     $artikel->delete();
                 }
             }
             if($delete->delete()) {
                 $delete->status = !$delete->status;
                 $delete->save();
             }
             if ($delete) {
                 $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
             }
         } catch (\Exception $ex) {
             $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
         }
         return $data;
     }

    //SNI
    //LSPRO
    public function indexLspro()
    {
        $lspro = Category_Lspro::all();
        return view('admin.pages.services.category.sni.lspro', compact('lspro'));
    }
    public function storeLspro(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_Lspro();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJsonLspro($id)
    {
        $lspro = Category_Lspro::find($id);
        return response()->json($lspro);
    }

    public function updateLspro(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_Lspro::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function deleteLspro($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_Lspro::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_Lspro::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_Lspro::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    //PASAR RAKYAT

    public function indexPasar()
    {
        $pasarrakyat = Category_PasarRakyat::all();
        return view('admin.pages.services.category.sni.jasa.pasarRakyat', compact('pasarrakyat'));
    }
    public function storePasar(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_PasarRakyat();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJsonPasar($id)
    {
        $pasarrakyat = Category_PasarRakyat::find($id);
        return response()->json($pasarrakyat);
    }

    public function updatePasar(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_PasarRakyat::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function deletePasar($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_PasarRakyat::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_PasarRakyat::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_PasarRakyat::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    //JASA REHABILITASI

    public function indexRehab()
    {
        $jasaRehab = Category_JasaRehab::all();
        return view('admin.pages.services.category.sni.jasa.jasaRehab', compact('jasaRehab'));
    }
    public function storeRehab(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_JasaRehab();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJsonRehab($id)
    {
        $jasaRehab = Category_JasaRehab::find($id);
        return response()->json($jasaRehab);
    }

    public function updateRehab(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_JasaRehab::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function deleteRehab($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_JasaRehab::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_JasaRehab::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_JasaRehab::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    //PARIWISATA
    //LSUP
    public function indexLsup()
    {
        $lsup = Category_Lsup::all();
        return view('admin.pages.services.category.pariwisata.lsup', compact('lsup'));
    }
    public function storeLsup(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_Lsup();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJsonLsup($id)
    {
        $lsup = Category_Lsup::find($id);
        return response()->json($lsup);
    }

    public function updateLsup(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_Lsup::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function deleteLsup($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_Lsup::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_Lsup::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_Lsup::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }
    //CHSE
    public function indexChse()
    {
        $chse = Category_Chse::all();
        return view('admin.pages.services.category.pariwisata.chse', compact('chse'));
    }
    public function storeChse(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_Chse();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJsonChse($id)
    {
        $chse = Category_Chse::find($id);
        return response()->json($chse);
    }

    public function updateChse(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_Chse::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function deleteChse($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_Chse::find($id);
            $delete->delete();
            if($delete) {
                $artikelIds = Schema_Chse::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_Chse::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }
    //SERTIFIKASI BINTANG
    public function indexSertifBintang()
    {
        $sertifikasiBintang = Category_SertifBintang::all();
        return view('admin.pages.services.category.pariwisata.sertifBintang', compact('sertifikasiBintang'));
    }
    public function storeSertifBintang(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_SertifBintang();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJsonSertifBintang($id)
    {
        $sertifBintang = Category_SertifBintang::find($id);
        return response()->json($sertifBintang);
    }

    public function updateSertifBintang(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_SertifBintang::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function deleteSertifBintang($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_SertifBintang::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_SertifBintang::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_SertifBintang::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    //SERTIFIKASI ISPO
    public function indexIspo()
    {
        $ispo = Category_Ispo::all();
        return view('admin.pages.services.category.ispo', compact('ispo'));
    }
    public function storeIspo(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_Ispo();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJsonIspo($id)
    {
        $Ispo = Category_Ispo::find($id);
        return response()->json($Ispo);
    }

    public function updateIspo(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_Ispo::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function deleteIspo($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_Ispo::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_Ispo::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_Ispo::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    //SERTIFIKASI Uji Laboratorium
    public function indexUjiLab()
    {
        $UjiLab = Category_UjiLab::all();
        return view('admin.pages.services.category.ujiLab', compact('UjiLab'));
    }
    public function storeUjiLab(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_UjiLab();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJsonUjiLab($id)
    {
        $UjiLab = Category_UjiLab::find($id);
        return response()->json($UjiLab);
    }

    public function updateUjiLab(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_UjiLab::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function deleteUjiLab($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_UjiLab::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_ujiLab::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_ujiLab::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }

    //Inspeksi
    public function indexInspeksi()
    {
        $inspeksi = Category_Inspeksi::all();
        return view('admin.pages.services.category.inspeksi', compact('inspeksi'));
    }
    public function storeInspeksi(Request $request)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = new Category_Inspeksi();
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been added');
        } else {
            Alert::error('Failed', 'Category failed to add');
        }
        return redirect()->back();
    }
    public function showJsonInspeksi($id)
    {
        $Inspeksi = Category_Inspeksi::find($id);
        return response()->json($Inspeksi);
    }

    public function updateInspeksi(Request $request, $id)
    {
        $categoryName = $request->category_name;
        $categoryDescription = $request->category_description;
        $category = Category_Inspeksi::find($id);
        $category->category_name = $categoryName;
        $category->category_description = $categoryDescription;
        $category->save();
        if ($category->save()) {
            Alert::success('Success', 'Category has been updated');
        } else {
            Alert::error('Failed', 'Category failed to update');
        }
        return redirect()->back();
    }

    public function deleteInspeksi($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Category_Inspeksi::find($id);
            $delete->delete();

            if($delete) {
                $artikelIds = Schema_Inspeksi::where("category_id", $id)->pluck("id");
                foreach ($artikelIds as $artikelId) {
                    $artikel = Schema_Inspeksi::find($artikelId);
                    $artikel->delete();
                }
            }
            if($delete->delete()) {
                $delete->status = !$delete->status;
                $delete->save();
            }
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Photo has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;
    }
}
