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
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Service_Controller extends Controller
{
    public function index9001()
    {
        $iso9001 = Schema_Iso9001::with('categories')->get();
        $categoryId = Category_Iso9001::all();
        return view('admin.pages.services.schema.iso.9001', compact('iso9001', 'categoryId'));
    }

    public function store9001(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_Iso9001();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJson9001($id)
    {
        $iso9001 = Schema_Iso9001::with('categories')->where('id', $id)->first();
        return response()->json($iso9001);
    }

    public function update9001(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_Iso9001::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;
        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function delete9001($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_Iso9001::find($id);
            $delete->delete();

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

    public function index45001()
    {
        $iso45001 = Schema_Iso45001::with('categories')->get();
        $categoryId = Category_Iso45001::all();
        return view('admin.pages.services.schema.iso.45001', compact('iso45001', 'categoryId'));
    }

    public function store45001(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_Iso45001();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showjson45001($id)
    {
        $iso45001 = Schema_Iso45001::find($id);
        return response()->json($iso45001);
    }

    public function update45001(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_Iso45001::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;
        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function delete45001($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_Iso45001::find($id);
            $delete->delete();

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


    public function index37001()
    {
        $iso37001 = Schema_Iso37001::with('categories')->get();
        $categoryId = Category_Iso37001::all();
        return view('admin.pages.services.schema.iso.37001', compact('iso37001', 'categoryId'));
    }

    public function store37001(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_Iso37001();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showjson37001($id)
    {
        $iso37001 = Schema_Iso37001::find($id);
        return response()->json($iso37001);
    }

    public function update37001(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_Iso37001::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;
        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function delete37001($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_Iso37001::find($id);
            $delete->delete();

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

    public function indexLspro()
    {
        $lspro = Schema_Lspro::with('categories')->get();
        $categoryId = Category_Lspro::all();
        return view('admin.pages.services.schema.sni.lspro', compact('lspro', 'categoryId'));
    }

    public function storeLspro(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_Lspro();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;
        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJsonLspro($id)
    {
        $lspro = Schema_Lspro::find($id);
        return response()->json($lspro);
    }

    public function updateLspro(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_Lspro::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function deleteLspro($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_Lspro::find($id);
            $delete->delete();
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

    public function indexPasarRakyat()
    {
        $pasarRakyat = Schema_PasarRakyat::with('categories')->get();
        $categoryId = Category_PasarRakyat::all();
        return view('admin.pages.services.schema.sni.jasa.pasarRakyat', compact('pasarRakyat', 'categoryId'));
    }

    public function storePasarRakyat(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_PasarRakyat();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJsonPasarRakyat($id)
    {
        $pasarRakyat = Schema_PasarRakyat::find($id);
        return response()->json($pasarRakyat);
    }

    public function updatePasarRakyat(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_PasarRakyat::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function deletePasarRakyat($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_PasarRakyat::find($id);
            $delete->delete();

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

    public function indexJasaRehab()
    {
        $jasaRehab = Schema_JasaRehab::all();
        $categoryId = Category_JasaRehab::all();
        return view('admin.pages.services.schema.sni.jasa.jasaRehab', compact('jasaRehab', 'categoryId'));
    }

    public function storeJasaRehab(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_JasaRehab();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJsonJasaRehab($id)
    {
        $jasaRehab = Schema_JasaRehab::find($id);
        return response()->json($jasaRehab);
    }

    public function updateJasaRehab(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_JasaRehab::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;
        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function deleteJasaRehab($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_JasaRehab::find($id);
            $delete->delete();

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

    public function indexLsup()
    {
        $lsup = Schema_Lsup::all();
        $categoryId = Category_Lsup::all();
        return view('admin.pages.services.schema.pariwisata.lsup', compact('lsup', 'categoryId'));
    }

    public function storeLsup(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_Lsup();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJsonLsup($id)
    {
        $lsup = Schema_Lsup::find($id);
        return response()->json($lsup);
    }

    public function updateLsup(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_Lsup::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function deleteLsup($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_Lsup::find($id);
            $delete->delete();

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

    public function indexChse()
    {
        $chse = Schema_Chse::all();
        $categoryId = Category_Chse::all();
        return view('admin.pages.services.schema.pariwisata.chse', compact('chse', 'categoryId'));
    }

    public function storeChse(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_Chse();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJsonChse($id)
    {
        $chse = Schema_Chse::find($id);
        return response()->json($chse);
    }

    public function updateChse(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_Chse::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function deleteChse($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_Chse::find($id);
            $delete->delete();

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

    public function indexSertifikasiBintang()
    {
        $sertifikasiBintang = Schema_SertifBintang::all();
        $categoryId = Category_SertifBintang::all();
        return view('admin.pages.services.schema.pariwisata.sertifikasiBintang', compact('sertifikasiBintang', 'categoryId'));
    }

    public function storeSertifikasiBintang(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_SertifBintang();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJsonSertifikasiBintang($id)
    {
        $sertifikasiBintang = Schema_SertifBintang::find($id);
        return response()->json($sertifikasiBintang);
    }

    public function updateSertifikasiBintang(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_SertifBintang::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function deleteSertifikasiBintang($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_SertifBintang::find($id);
            $delete->delete();
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

    public function indexInspeksi()
    {
        $inspeksi = Schema_Inspeksi::with('categories')->get();
        $categoryId = Category_Inspeksi::all();
        return view('admin.pages.services.schema.inspeksi', compact('inspeksi', 'categoryId'));
    }

    public function storeInspeksi(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_Inspeksi();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJsonInspeksi($id)
    {
        $inspeksi = Schema_Inspeksi::find($id);
        return response()->json($inspeksi);
    }

    public function updateInspeksi(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_Inspeksi::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function deleteInspeksi($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_Inspeksi::find($id);
            $delete->delete();
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

    public function indexIspo()
    {
        $ispo = Schema_Ispo::with('categories')->get();
        $categoryId = Category_Ispo::all();
        return view('admin.pages.services.schema.ispo', compact('ispo', 'categoryId'));
    }

    public function storeIspo(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_Ispo();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJsonIspo($id)
    {
        $ispo = Schema_Ispo::find($id);
        return response()->json($ispo);
    }

    public function updateIspo(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_Ispo::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function deleteIspo($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_Ispo::find($id);
            $delete->delete();
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

    public function indexUjiLab()
    {
        $ujiLab = Schema_ujiLab::with('categories')->get();
        $categoryId = Category_UjiLab::all();
        return view('admin.pages.services.schema.ujilab', compact('ujiLab', 'categoryId'));
    }

    public function storeUjiLab(Request $request)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = new Schema_ujiLab();
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been added');
        } else {
            Alert::error('Failed', 'Schema failed to add');
        }

        return redirect()->back();
    }

    public function showJsonUjiLab($id)
    {
        $ujiLab = Schema_ujiLab::find($id);
        return response()->json($ujiLab);
    }

    public function updateUjiLab(Request $request, $id)
    {
        $schemaName = $request->lingkup;
        $schemaDescription = $request->deskripsi;
        $categoryId = $request->category_id;

        $schema = Schema_ujiLab::find($id);
        $schema->lingkup = $schemaName;
        $schema->deskripsi = $schemaDescription;
        $schema->category_id = $categoryId;

        $schema->save();

        if ($schema->save()) {
            Alert::success('Success', 'Schema has been updated');
        } else {
            Alert::error('Failed', 'Schema failed to update');
        }

        return redirect()->back();
    }

    public function deleteUjiLab($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Schema_ujiLab::find($id);
            $delete->delete();
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
