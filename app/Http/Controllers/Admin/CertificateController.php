<?php

namespace App\Http\Controllers\Admin;

use QrCode;
use App\Http\Controllers\Controller;
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
use RealRashid\SweetAlert\Facades\Alert;

class CertificateController extends Controller
{

    // lsup
    public function indexLsup()
    {
        $certificateLsup = Certificate_Lsup::orderBy('created_at', 'desc')->get();

        return view('admin.pages.certificate.lsup.index', compact('certificateLsup'));
    }


    public function createLsup()
    {
        return view('admin.pages.certificate.lsup.add');
    }

    // private function agreement_number() {
    //     // certificate number format TSA-tc/000{dynamic number}-IDN
    //     // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //     $certificateLsup = Certificate_Lsup::orderBy('id', 'desc')->first();

    //     if ($certificateLsup) {
    //         // if data is available, then the number will be TSA-tc/000{dynamic number}-IDN
    //         $certificateLsupNumber = $certificateLsup->certificate_number;
    //         $certificateLsupNumber = explode('/',  $certificateLsupNumber);
    //         $certificateLsupNumber = explode('-',  $certificateLsupNumber[1]);
    //         $certificateLsupNumber =  $certificateLsupNumber[0] + 1;
    //         $certificateLsupNumber = str_pad( $certificateLsupNumber, 4, '0', STR_PAD_LEFT);
    //         $certificateLsupNumber = 'TSA-TC/' .  $certificateLsupNumber . '-IDN';
    //     } else {
    //         // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //         $certificateLsupNumber = 'TSA-TC/0001-IDN';
    //     }

    //     return  $certificateLsupNumber;
    // }

    public function storeLsup(Request $request)
    {
        $businessName = $request->business_name;
        $businessAddress = $request->business_address;
        $companyName = $request->company_name;

        // $agreementNumber = $this->agreement_number();
        $agreementNumber = $request->agreement_number;
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;

        $certificateLsup = new Certificate_Lsup();
        $certificateLsup->business_name = strtoupper($businessName);
        $certificateLsup->business_address = $businessAddress;
        $certificateLsup->company_name =  strtoupper($companyName);
        $certificateLsup->agreement_number = $agreementNumber;

        $certificateLsup->certificate_status = $certificate_status;
        $certificateLsup->first_surveillance = $first_surveillance;
        $certificateLsup->second_surveillance = $second_surveillance;
        $certificateLsup->certificate_date = $certificateDate;
        $certificateLsup->issue_date = $issueDate;
        $certificateLsup->expired_date = $expiredDate;
        $certificateLsup->note = $note;
        $certificateLsup->save();

        if ( $certificateLsup->save()) {
            alert()->success('Success', 'Certificate has been added');
        } else {
            alert()->error('Error', 'Certificate failed to add');
        }

        return redirect()->to('admin/certificates/lsup');
    }

    public function editLsup($id)
    {
        $certificateLsup = Certificate_Lsup::where('id', $id)->first();

        return view('admin.pages.certificate.lsup.edit', compact('certificateLsup'));
    }

    public function updateLsup($id, Request $request)
    {
        $businessName = $request->business_name;
        $businessAddress = $request->business_address;
        $companyName = $request->company_name;
        $agreementNumber = $request->agreement_number;
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;

        $certificateLsup = Certificate_Lsup::where('id', $id)->first();
        $certificateLsup->business_name = strtoupper($businessName);
        $certificateLsup->business_address = $businessAddress;
        $certificateLsup->company_name =  strtoupper($companyName);
        $certificateLsup->agreement_number = $agreementNumber;
        $certificateLsup->certificate_status = $certificate_status;
        $certificateLsup->first_surveillance = $first_surveillance;
        $certificateLsup->second_surveillance = $second_surveillance;
        $certificateLsup->certificate_date = $certificateDate;
        $certificateLsup->issue_date = $issueDate;
        $certificateLsup->expired_date = $expiredDate;
        $certificateLsup->note = $note;
        $certificateLsup->save();

        if ($certificateLsup->save()) {
            alert()->success('Success', 'Certificate has been updated');
        } else {
            alert()->error('Error', 'Certificate failed to update');
        }

        return redirect()->to('admin/certificates/lsup');
    }

    public function generateQrCodeLsup($id)
    {
        // dd($id);
        $certificateLsup  = Certificate_Lsup::where('id', $id)->first();
        $name =  $certificateLsup->company_name;
        $id = $certificateLsup->id;
        // dd($name);
        // dd ($certificate);

        //halaman frontend
        $qrcode = QrCode::margin(1)->size(1000)->format('png')->generate(route('detailverifikasiLsup', $id), base_path() . '/storage/app/public/' . $name . '.png');
        $path  = public_path('storage/');

        return response()->download($path . '' . $name . '.png', $name . '.png');
    }

    public function deleteLsup($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Certificate_Lsup::find($id);
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

     // lsup
    public function indexChse()
    {
        $certificateChse = Certificate_Chse::orderBy('created_at', 'desc')->get();
        return view('admin.pages.certificate.chse.index', compact('certificateChse'));
    }


    public function createChse()
    {
        return view('admin.pages.certificate.chse.add');
    }

     // private function agreement_number() {
     //     // certificate number format TSA-tc/000{dynamic number}-IDN
     //     // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
     //     $certificateLsup = Certificate_Lsup::orderBy('id', 'desc')->first();

     //     if ($certificateLsup) {
     //         // if data is available, then the number will be TSA-tc/000{dynamic number}-IDN
     //         $certificateLsupNumber = $certificateLsup->certificate_number;
     //         $certificateLsupNumber = explode('/',  $certificateLsupNumber);
     //         $certificateLsupNumber = explode('-',  $certificateLsupNumber[1]);
     //         $certificateLsupNumber =  $certificateLsupNumber[0] + 1;
     //         $certificateLsupNumber = str_pad( $certificateLsupNumber, 4, '0', STR_PAD_LEFT);
     //         $certificateLsupNumber = 'TSA-TC/' .  $certificateLsupNumber . '-IDN';
     //     } else {
     //         // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
     //         $certificateLsupNumber = 'TSA-TC/0001-IDN';
     //     }

     //     return  $certificateLsupNumber;
     // }

    public function storeChse(Request $request)
    {
        $businessName = $request->business_name;
        $businessAddress = $request->business_address;
        $companyName = $request->company_name;
        // $agreementNumber = $this->agreement_number();
        $agreementNumber = $request->agreement_number;
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;
        $certificateChse = new Certificate_Chse();
        $certificateChse->business_name = strtoupper($businessName);
        $certificateChse->business_address = $businessAddress;
        $certificateChse->company_name =  strtoupper($companyName);
        $certificateChse->agreement_number = $agreementNumber;
        $certificateChse->certificate_status = $certificate_status;
        $certificateChse->first_surveillance = $first_surveillance;
        $certificateChse->second_surveillance = $second_surveillance;
        $certificateChse->certificate_date = $certificateDate;
        $certificateChse->issue_date = $issueDate;
        $certificateChse->expired_date = $expiredDate;
        $certificateChse->note = $note;
        $certificateChse->save();
        if ( $certificateChse->save()) {
            alert()->success('Success', 'Certificate has been added');
        } else {
            alert()->error('Error', 'Certificate failed to add');
        }
        return redirect()->to('admin/certificates/chse');
    }

    public function editChse($id)
    {
        $certificateChse = Certificate_Chse::where('id', $id)->first();
        return view('admin.pages.certificate.chse.edit', compact('certificateChse'));
    }

    public function updateChse($id, Request $request)
    {
        $businessName = $request->business_name;
        $businessAddress = $request->business_address;
        $companyName = $request->company_name;
        $agreementNumber = $request->agreement_number;
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;
        $certificateChse = Certificate_Chse::where('id', $id)->first();
        $certificateChse->business_name = strtoupper($businessName);
        $certificateChse->business_address = $businessAddress;
        $certificateChse->company_name =  strtoupper($companyName);
        $certificateChse->agreement_number = $agreementNumber;
        $certificateChse->certificate_status = $certificate_status;
        $certificateChse->first_surveillance = $first_surveillance;
        $certificateChse->second_surveillance = $second_surveillance;
        $certificateChse->certificate_date = $certificateDate;
        $certificateChse->issue_date = $issueDate;
        $certificateChse->expired_date = $expiredDate;
        $certificateChse->note = $note;
        $certificateChse->save();
        if ($certificateChse->save()) {
            alert()->success('Success', 'Certificate has been updated');
        } else {
            alert()->error('Error', 'Certificate failed to update');
        }
        return redirect()->to('admin/certificates/chse');
    }

    public function generateQrCodeChse($id)
    {
        // dd($id);
        $certificateChse  = Certificate_Chse::where('id', $id)->first();
        $name =  $certificateChse->company_name;
        $id = $certificateChse->id;
        // dd($name);
        // dd ($certificate);
        //halaman frontend
        $qrcode = QrCode::margin(1)->size(1000)->format('png')->generate(route('detailverifikasiChse', $id), base_path() . '/storage/app/public/' . $name . '.png');
        $path  = public_path('storage/');
        return response()->download($path . '' . $name . '.png', $name . '.png');
    }

    public function deleteChse($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];
            $delete = Certificate_Chse::find($id);
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

    // lspro
    public function indexLspro(){
        $certificateLspro = Certificate_Lspro::orderBy('created_at', 'desc')->get();

        return view('admin.pages.certificate.lspro.index', compact('certificateLspro'));
    }

    public function createLspro()
    {
        return view('admin.pages.certificate.lspro.add');
    }

    // private function agreement_number() {
    //     // certificate number format TSA-tc/000{dynamic number}-IDN
    //     // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //     $certificateLsup = Certificate_Lsup::orderBy('id', 'desc')->first();

    //     if ($certificateLsup) {
    //         // if data is available, then the number will be TSA-tc/000{dynamic number}-IDN
    //         $certificateLsupNumber = $certificateLsup->certificate_number;
    //         $certificateLsupNumber = explode('/',  $certificateLsupNumber);
    //         $certificateLsupNumber = explode('-',  $certificateLsupNumber[1]);
    //         $certificateLsupNumber =  $certificateLsupNumber[0] + 1;
    //         $certificateLsupNumber = str_pad( $certificateLsupNumber, 4, '0', STR_PAD_LEFT);
    //         $certificateLsupNumber = 'TSA-TC/' .  $certificateLsupNumber . '-IDN';
    //     } else {
    //         // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //         $certificateLsupNumber = 'TSA-TC/0001-IDN';
    //     }

    //     return  $certificateLsupNumber;
    // }

    public function storeLspro(Request $request)
    {
        $factoryName = $request->factory_name;
        $factoryAddress = $request->factory_address;
        $companyName = $request->company_name;
        $companyAddress = $request->company_address;
        $pic = $request->pic;
        $SniNumber = $request->sni_number;
        $brand = $request->brand;
        $type = $request->type;
        $result_of_test = $request->result_of_test;

        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $third_surveillance = $request->third_surveillance;
        $reSertifikasi = $request->reSertifikasi;
        $certificateDate = $request->certificate_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;

        $certificateLspro = new Certificate_Lspro();
        $certificateLspro->factory_name = strtoupper($factoryName);
        $certificateLspro->factory_address = $factoryAddress;
        $certificateLspro->company_name =  strtoupper($companyName);
        $certificateLspro->company_address = $companyAddress;
        $certificateLspro->pic = $pic;
        $certificateLspro->sni_number = $SniNumber;
        $certificateLspro->brand = $brand;
        $certificateLspro->type = $type;
        $certificateLspro->result_of_test = $result_of_test;
        // $certificateLspro->certificate_number = $agreementNumber;
        $certificateLspro->certificate_status = $certificate_status;
        $certificateLspro->first_surveillance = $first_surveillance;
        $certificateLspro->second_surveillance = $second_surveillance;
        $certificateLspro->third_surveillance = $third_surveillance;
        $certificateLspro->reSertifikasi = $reSertifikasi;
        $certificateLspro->certificate_date = $certificateDate;
        $certificateLspro->expired_date = $expiredDate;
        $certificateLspro->note = $note;
        $certificateLspro->save();

        if ( $certificateLspro->save()) {
            alert()->success('Success', 'Certificate has been added');
        } else {
            alert()->error('Error', 'Certificate failed to add');
        }

        return redirect()->to('admin/certificates/lspro');
    }

    public function editLspro($id)
    {
        $certificateLspro = Certificate_Lspro::where('id', $id)->first();

        return view('admin.pages.certificate.lspro.edit', compact('certificateLspro'));
    }

    public function updateLspro($id, Request $request)
    {
        $factoryName = $request->factory_name;
        $factoryAddress = $request->factory_address;
        $companyName = $request->company_name;
        $companyAddress = $request->company_address;
        $pic = $request->pic;
        $SniNumber = $request->sni_number;
        $brand = $request->brand;
        $type = $request->type;
        $result_of_test = $request->result_of_test;

        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $third_surveillance = $request->third_surveillance;
        $reSertifikasi = $request->reSertifikasi;
        $certificateDate = $request->certificate_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;


        $certificateLspro = Certificate_Lspro::where('id', $id)->first();
        $certificateLspro->factory_name = strtoupper($factoryName);
        $certificateLspro->factory_address = $factoryAddress;
        $certificateLspro->company_name =  strtoupper($companyName);
        $certificateLspro->company_address = $companyAddress;
        $certificateLspro->pic = $pic;
        $certificateLspro->sni_number = $SniNumber;
        $certificateLspro->brand = $brand;
        $certificateLspro->type = $type;
        $certificateLspro->result_of_test = $result_of_test;
        // $certificateLspro->certificate_number = $agreementNumber;
        $certificateLspro->certificate_status = $certificate_status;
        $certificateLspro->first_surveillance = $first_surveillance;
        $certificateLspro->second_surveillance = $second_surveillance;
        $certificateLspro->third_surveillance = $third_surveillance;
        $certificateLspro->reSertifikasi = $reSertifikasi;
        $certificateLspro->certificate_date = $certificateDate;
        $certificateLspro->expired_date = $expiredDate;
        $certificateLspro->note = $note;
        $certificateLspro->save();

        if ($certificateLspro->save()) {
            alert()->success('Success', 'Certificate has been updated');
        } else {
            alert()->error('Error', 'Certificate failed to update');
        }

        return redirect()->to('admin/certificates/lspro');
    }

    public function generateQrCodeLspro($id)
    {
        // dd($id);
        $certificateLspro  = Certificate_Lspro::where('id', $id)->first();
        $name =  $certificateLspro->company_name;
        $id = $certificateLspro->id;
        // dd($name);
        // dd ($certificate);

        //halaman frontend
        $qrcode = QrCode::margin(1)->size(1000)->format('png')->generate(route('detailverifikasiLspro', $id), base_path() . '/storage/app/public/' . $name . '.png');
        $path  = public_path('storage/');

        return response()->download($path . '' . $name . '.png', $name . '.png');
    }

    public function deleteLspro($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Certificate_Lspro::find($id);
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
     // pasarRakyat
    public function indexpasarRakyat(){
        $certificatepasarRakyat = Certificate_pasarRakyat::orderBy('created_at', 'desc')->get();

        return view('admin.pages.certificate.pasarRakyat.index', compact('certificatepasarRakyat'));
    }

    public function createpasarRakyat()
    {
        return view('admin.pages.certificate.pasarRakyat.add');
    }

    // private function agreement_number() {
    //     // certificate number format TSA-tc/000{dynamic number}-IDN
    //     // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //     $certificateLsup = Certificate_Lsup::orderBy('id', 'desc')->first();

    //     if ($certificateLsup) {
    //         // if data is available, then the number will be TSA-tc/000{dynamic number}-IDN
    //         $certificateLsupNumber = $certificateLsup->certificate_number;
    //         $certificateLsupNumber = explode('/',  $certificateLsupNumber);
    //         $certificateLsupNumber = explode('-',  $certificateLsupNumber[1]);
    //         $certificateLsupNumber =  $certificateLsupNumber[0] + 1;
    //         $certificateLsupNumber = str_pad( $certificateLsupNumber, 4, '0', STR_PAD_LEFT);
    //         $certificateLsupNumber = 'TSA-TC/' .  $certificateLsupNumber . '-IDN';
    //     } else {
    //         // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //         $certificateLsupNumber = 'TSA-TC/0001-IDN';
    //     }

    //     return  $certificateLsupNumber;
    // }

    public function storepasarRakyat(Request $request)
    {
        if(!$request->filled('certificate_status')) {
            toast('Please Input Status', 'error');
            return redirect()->back();
        }

        $namaPasar = $request->namaPasar;
        $alamatPasar = $request->alamatPasar;
        $tipePasar = $request->tipePasar;
        $mutuPasar = $request->mutuPasar;
        $nomorSni = $request->nomorSNI;
        $direksi = $request->direksi;
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $reSertifikasi = $request->reSertifikasi;
        $certificateDate = $request->certificate_date;
        $certificate_date_period = $request->certificate_date_period;
        $expiredDate = $request->expired_date;
        $note = $request->note;

        $certificatepasarRakyat = new Certificate_pasarRakyat();
        $certificatepasarRakyat->namaPasar = strtoupper($namaPasar);
        $certificatepasarRakyat->alamatPasar = $alamatPasar;
        $certificatepasarRakyat->tipePasar = $tipePasar;
        $certificatepasarRakyat->mutuPasar = $mutuPasar;
        $certificatepasarRakyat->nomorSNI = $nomorSni;
        $certificatepasarRakyat->direksi = $direksi;
        $certificatepasarRakyat->certificate_status = $certificate_status;
        $certificatepasarRakyat->first_surveillance = $first_surveillance;
        $certificatepasarRakyat->second_surveillance = $second_surveillance;
        $certificatepasarRakyat->reSertifikasi = $reSertifikasi;
        $certificatepasarRakyat->certificate_date = $certificateDate;
        $certificatepasarRakyat->certificate_date_period = $certificate_date_period;
        $certificatepasarRakyat->expired_date = $expiredDate;
        $certificatepasarRakyat->note = $note;
        $certificatepasarRakyat->save();

        if ( $certificatepasarRakyat->save()) {
            alert()->success('Success', 'Certificate has been added');
        } else {
            alert()->error('Error', 'Certificate failed to add');
        }

        return redirect()->to('admin/certificates/pasarRakyat');
    }

    public function editpasarRakyat($id)
    {
        $certificatepasarRakyat = Certificate_pasarRakyat::where('id', $id)->first();

        return view('admin.pages.certificate.pasarRakyat.edit', compact('certificatepasarRakyat'));
    }

    public function updatepasarRakyat($id, Request $request)
    {
        $certificatepasarRakyat = Certificate_pasarRakyat::find($id);
        $certificatepasarRakyat->namaPasar = strtoupper($request->namaPasar);
        $certificatepasarRakyat->alamatPasar = $request->alamatPasar;
        $certificatepasarRakyat->tipePasar = $request->tipePasar;
        $certificatepasarRakyat->mutuPasar = $request->mutuPasar;
        $certificatepasarRakyat->nomorSNI = $request->nomorSNI;
        $certificatepasarRakyat->direksi = $request->direksi;
        $certificatepasarRakyat->certificate_status = $request->certificate_status;
        $certificatepasarRakyat->first_surveillance = $request->first_surveillance;
        $certificatepasarRakyat->second_surveillance = $request->second_surveillance;
        $certificatepasarRakyat->reSertifikasi = $request->reSertifikasi;
        $certificatepasarRakyat->certificate_date = $request->certificate_date;
        $certificatepasarRakyat->certificate_date_period = $request->certificate_date_period;
        $certificatepasarRakyat->expired_date = $request->expired_date;
        $certificatepasarRakyat->note = $request->note;
        $certificatepasarRakyat->save();

        if ($certificatepasarRakyat->save()) {
            alert()->success('Success', 'Certificate has been updated');
        } else {
            alert()->error('Error', 'Certificate failed to update');
        }

        return redirect()->to('admin/certificates/pasarRakyat');
    }

    public function generateQrCodepasarRakyat($id)
    {
        // dd($id);
        $certificatepasarRakyat  = Certificate_pasarRakyat::where('id', $id)->first();
        $name =  $certificatepasarRakyat->namaPasar;
        $id = $certificatepasarRakyat->id;
        // dd($name);
        // dd ($certificate);

        //halaman frontend
        $qrcode = QrCode::margin(1)->size(1000)->format('png')->generate(route('detailverifikasipasarRakyat', $id), base_path() . '/storage/app/public/' . $name . '.png');
        $path  = public_path('storage/');

        return response()->download($path . '' . $name . '.png', $name . '.png');
    }

    public function deletepasarRakyat($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Certificate_pasarRakyat::find($id);
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


    //9001
    public function index9001(){
        $certificate9001 = Certificate_9001::orderBy('created_at', 'desc')->get();

        return view('admin.pages.certificate.management.9001.index', compact('certificate9001'));
    }

    public function create9001()
    {
        return view('admin.pages.certificate.management.9001.add');
    }

    // private function agreement_number() {
    //     // certificate number format TSA-tc/000{dynamic number}-IDN
    //     // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //     $certificateLsup = Certificate_Lsup::orderBy('id', 'desc')->first();

    //     if ($certificateLsup) {
    //         // if data is available, then the number will be TSA-tc/000{dynamic number}-IDN
    //         $certificateLsupNumber = $certificateLsup->certificate_number;
    //         $certificateLsupNumber = explode('/',  $certificateLsupNumber);
    //         $certificateLsupNumber = explode('-',  $certificateLsupNumber[1]);
    //         $certificateLsupNumber =  $certificateLsupNumber[0] + 1;
    //         $certificateLsupNumber = str_pad( $certificateLsupNumber, 4, '0', STR_PAD_LEFT);
    //         $certificateLsupNumber = 'TSA-TC/' .  $certificateLsupNumber . '-IDN';
    //     } else {
    //         // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //         $certificateLsupNumber = 'TSA-TC/0001-IDN';
    //     }

    //     return  $certificateLsupNumber;
    // }

    public function store9001(Request $request)
    {
        $companyName = $request->company_name;
        $companyAddress = $request->company_address;
        $scope = $request->scope;
        $restriction = $request->restriction;
        $pic = $request->pic;

        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;

        $certificate9001 = new Certificate_9001();
        $certificate9001->company_name = strtoupper($companyName);
        $certificate9001->company_address = $companyAddress;
        $certificate9001->scope = $scope;
        $certificate9001->restriction = $restriction;
        $certificate9001->pic = $pic;
        // $certificate9001->certificate_number = $agreementNumber;
        $certificate9001->certificate_status = $certificate_status;
        $certificate9001->first_surveillance = $first_surveillance;
        $certificate9001->second_surveillance = $second_surveillance;
        $certificate9001->certificate_date = $certificateDate;
        $certificate9001->issue_date = $issueDate;
        $certificate9001->expired_date = $expiredDate;
        $certificate9001->note = $note;
        $certificate9001->save();

        if ( $certificate9001->save()) {
            alert()->success('Success', 'Certificate has been added');
        } else {
            alert()->error('Error', 'Certificate failed to add');
        }

        return redirect()->to('admin/certificates/9001');
    }

    public function edit9001($id)
    {
        $certificate9001 = Certificate_9001::where('id', $id)->first();

        return view('admin.pages.certificate.management.9001.edit', compact('certificate9001'));
    }

    public function update9001($id, Request $request)
    {
        $companyName = $request->company_name;
        $companyAddress = $request->company_address;
        $scope = $request->scope;
        $restriction = $request->restriction;
        $pic = $request->pic;

        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;


        $certificate9001 = Certificate_9001::where('id', $id)->first();
        $certificate9001->company_name = strtoupper($companyName);
        $certificate9001->company_address = $companyAddress;
        $certificate9001->scope = $scope;
        $certificate9001->restriction = $restriction;
        $certificate9001->pic = $pic;
        // $certificate9001->certificate_number = $agreementNumber;
        $certificate9001->certificate_status = $certificate_status;
        $certificate9001->first_surveillance = $first_surveillance;
        $certificate9001->second_surveillance = $second_surveillance;
        $certificate9001->certificate_date = $certificateDate;
        $certificate9001->issue_date = $issueDate;
        $certificate9001->expired_date = $expiredDate;
        $certificate9001->note = $note;
        $certificate9001->save();

        if ($certificate9001->save()) {
            alert()->success('Success', 'Certificate has been updated');
        } else {
            alert()->error('Error', 'Certificate failed to update');
        }

        return redirect()->to('admin/certificates/9001');
    }

    public function generateQrCode9001($id)
    {
        // dd($id);
        $certificate9001  = Certificate_9001::where('id', $id)->first();
        $name =  $certificate9001->company_name;
        $id = $certificate9001->id;
        // dd($name);
        // dd ($certificate);

        //halaman frontend
        $qrcode = QrCode::margin(1)->size(1000)->format('png')->generate(route('detailverifikasi9001', $id), base_path() . '/storage/app/public/' . $name . '.png');
        $path  = public_path('storage/');

        return response()->download($path . '' . $name . '.png', $name . '.png');
    }

    public function delete9001($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Certificate_9001::find($id);
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

    //45001
    public function index45001(){
        $certificate45001 = Certificate_45001::orderBy('created_at', 'desc')->get();

        return view('admin.pages.certificate.management.45001.index', compact('certificate45001'));
    }

    public function create45001()
    {
        return view('admin.pages.certificate.management.45001.add');
    }

    // private function agreement_number() {
    //     // certificate number format TSA-tc/000{dynamic number}-IDN
    //     // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //     $certificateLsup = Certificate_Lsup::orderBy('id', 'desc')->first();

    //     if ($certificateLsup) {
    //         // if data is available, then the number will be TSA-tc/000{dynamic number}-IDN
    //         $certificateLsupNumber = $certificateLsup->certificate_number;
    //         $certificateLsupNumber = explode('/',  $certificateLsupNumber);
    //         $certificateLsupNumber = explode('-',  $certificateLsupNumber[1]);
    //         $certificateLsupNumber =  $certificateLsupNumber[0] + 1;
    //         $certificateLsupNumber = str_pad( $certificateLsupNumber, 4, '0', STR_PAD_LEFT);
    //         $certificateLsupNumber = 'TSA-TC/' .  $certificateLsupNumber . '-IDN';
    //     } else {
    //         // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //         $certificateLsupNumber = 'TSA-TC/0001-IDN';
    //     }

    //     return  $certificateLsupNumber;
    // }

    public function store45001(Request $request)
    {
        $companyName = $request->company_name;
        $companyAddress = $request->company_address;
        $scope = $request->scope;
        $restriction = $request->restriction;
        $pic = $request->pic;

        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;

        $certificate45001 = new Certificate_45001();
        $certificate45001->company_name = strtoupper($companyName);
        $certificate45001->company_address = $companyAddress;
        $certificate45001->scope = $scope;
        $certificate45001->restriction = $restriction;
        $certificate45001->pic = $pic;
        // $certificate45001->certificate_number = $agreementNumber;
        $certificate45001->certificate_status = $certificate_status;
        $certificate45001->first_surveillance = $first_surveillance;
        $certificate45001->second_surveillance = $second_surveillance;
        $certificate45001->certificate_date = $certificateDate;
        $certificate45001->issue_date = $issueDate;
        $certificate45001->expired_date = $expiredDate;
        $certificate45001->note = $note;
        $certificate45001->save();

        if ( $certificate45001->save()) {
            alert()->success('Success', 'Certificate has been added');
        } else {
            alert()->error('Error', 'Certificate failed to add');
        }

        return redirect()->to('admin/certificates/45001');
    }

    public function edit45001($id)
    {
        $certificate45001 = Certificate_45001::where('id', $id)->first();

        return view('admin.pages.certificate.management.45001.edit', compact('certificate45001'));
    }

    public function update45001($id, Request $request)
    {
        $companyName = $request->company_name;
        $companyAddress = $request->company_address;
        $scope = $request->scope;
        $restriction = $request->restriction;
        $pic = $request->pic;

        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $note = $request->note;


        $certificate45001 = Certificate_45001::where('id', $id)->first();
        $certificate45001->company_name = strtoupper($companyName);
        $certificate45001->company_address = $companyAddress;
        $certificate45001->scope = $scope;
        $certificate45001->restriction = $restriction;
        $certificate45001->pic = $pic;
        // $certificate45001->certificate_number = $agreementNumber;
        $certificate45001->certificate_status = $certificate_status;
        $certificate45001->first_surveillance = $first_surveillance;
        $certificate45001->second_surveillance = $second_surveillance;
        $certificate45001->certificate_date = $certificateDate;
        $certificate45001->issue_date = $issueDate;
        $certificate45001->note = $note;
        $certificate45001->save();

        if ($certificate45001->save()) {
            alert()->success('Success', 'Certificate has been updated');
        } else {
            alert()->error('Error', 'Certificate failed to update');
        }

        return redirect()->to('admin/certificates/45001');
    }

    public function generateQrCode45001($id)
    {
        // dd($id);
        $certificate45001  = Certificate_45001::where('id', $id)->first();
        $name =  $certificate45001->company_name;
        $id = $certificate45001->id;
        // dd($name);
        // dd ($certificate);

        //halaman frontend
        $qrcode = QrCode::margin(1)->size(1000)->format('png')->generate(route('detailverifikasi45001', $id), base_path() . '/storage/app/public/' . $name . '.png');
        $path  = public_path('storage/');

        return response()->download($path . '' . $name . '.png', $name . '.png');
    }

    public function delete45001($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Certificate_45001::find($id);
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

    //37001
    public function index37001(){
        $certificate37001 = Certificate_37001::orderBy('created_at', 'desc')->get();

        return view('admin.pages.certificate.management.37001.index', compact('certificate37001'));
    }

    public function create37001()
    {
        return view('admin.pages.certificate.management.37001.add');
    }

    // private function agreement_number() {
    //     // certificate number format TSA-tc/000{dynamic number}-IDN
    //     // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //     $certificateLsup = Certificate_Lsup::orderBy('id', 'desc')->first();

    //     if ($certificateLsup) {
    //         // if data is available, then the number will be TSA-tc/000{dynamic number}-IDN
    //         $certificateLsupNumber = $certificateLsup->certificate_number;
    //         $certificateLsupNumber = explode('/',  $certificateLsupNumber);
    //         $certificateLsupNumber = explode('-',  $certificateLsupNumber[1]);
    //         $certificateLsupNumber =  $certificateLsupNumber[0] + 1;
    //         $certificateLsupNumber = str_pad( $certificateLsupNumber, 4, '0', STR_PAD_LEFT);
    //         $certificateLsupNumber = 'TSA-TC/' .  $certificateLsupNumber . '-IDN';
    //     } else {
    //         // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //         $certificateLsupNumber = 'TSA-TC/0001-IDN';
    //     }

    //     return  $certificateLsupNumber;
    // }

    public function store37001(Request $request)
    {
        $companyName = $request->company_name;
        $companyAddress = $request->company_address;
        $scope = $request->scope;
        $restriction = $request->restriction;
        $pic = $request->pic;

        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;

        $certificate37001 = new Certificate_37001();
        $certificate37001->company_name = strtoupper($companyName);
        $certificate37001->company_address = $companyAddress;
        $certificate37001->scope = $scope;
        $certificate37001->restriction = $restriction;
        $certificate37001->pic = $pic;
        // $certificate9001->certificate_number = $agreementNumber;
        $certificate37001->certificate_status = $certificate_status;
        $certificate37001->first_surveillance = $first_surveillance;
        $certificate37001->second_surveillance = $second_surveillance;
        $certificate37001->certificate_date = $certificateDate;
        $certificate37001->issue_date = $issueDate;
        $certificate37001->expired_date = $expiredDate;
        $certificate37001->note = $note;
        $certificate37001->save();

        if ( $certificate37001->save()) {
            alert()->success('Success', 'Certificate has been added');
        } else {
            alert()->error('Error', 'Certificate failed to add');
        }

        return redirect()->to('admin/certificates/37001');
    }

    public function edit37001($id)
    {
        $certificate37001 = Certificate_37001::where('id', $id)->first();

        return view('admin.pages.certificate.management.37001.edit', compact('certificate37001'));
    }

    public function update37001($id, Request $request)
    {
        $companyName = $request->company_name;
        $companyAddress = $request->company_address;
        $scope = $request->scope;
        $restriction = $request->restriction;
        $pic = $request->pic;

        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $certificateDate = $request->certificate_date;
        $issueDate = $request->issue_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;


        $certificate37001 = Certificate_37001::where('id', $id)->first();
        $certificate37001->company_name = strtoupper($companyName);
        $certificate37001->company_address = $companyAddress;
        $certificate37001->scope = $scope;
        $certificate37001->restriction = $restriction;
        $certificate37001->pic = $pic;
        // $certificate9001->certificate_number = $agreementNumber;
        $certificate37001->certificate_status = $certificate_status;
        $certificate37001->first_surveillance = $first_surveillance;
        $certificate37001->second_surveillance = $second_surveillance;
        $certificate37001->certificate_date = $certificateDate;
        $certificate37001->issue_date = $issueDate;
        $certificate37001->expired_date = $expiredDate;
        $certificate37001->note = $note;
        $certificate37001->save();

        if ($certificate37001->save()) {
            alert()->success('Success', 'Certificate has been updated');
        } else {
            alert()->error('Error', 'Certificate failed to update');
        }

        return redirect()->to('admin/certificates/37001');
    }

    public function generateQrCode37001($id)
    {
        // dd($id);
        $certificate37001  = Certificate_37001::where('id', $id)->first();
        $name =  $certificate37001->company_name;
        $id = $certificate37001->id;
        // dd($name);
        // dd ($certificate);

        //halaman frontend
        $qrcode = QrCode::margin(1)->size(1000)->format('png')->generate(route('detailverifikasi37001', $id), base_path() . '/storage/app/public/' . $name . '.png');
        $path  = public_path('storage/');

        return response()->download($path . '' . $name . '.png', $name . '.png');
    }

    public function delete37001($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Certificate_37001::find($id);
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

    //ispo
    public function indexIspo(){
        $certificateIspo = Certificate_Ispo::orderBy('created_at', 'desc')->get();

        return view('admin.pages.certificate.ispo.index', compact('certificateIspo'));
    }

    public function createIspo()
    {
        return view('admin.pages.certificate.ispo.add');
    }

    // private function agreement_number() {
    //     // certificate number format TSA-tc/000{dynamic number}-IDN
    //     // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //     $certificateLsup = Certificate_Lsup::orderBy('id', 'desc')->first();

    //     if ($certificateLsup) {
    //         // if data is available, then the number will be TSA-tc/000{dynamic number}-IDN
    //         $certificateLsupNumber = $certificateLsup->certificate_number;
    //         $certificateLsupNumber = explode('/',  $certificateLsupNumber);
    //         $certificateLsupNumber = explode('-',  $certificateLsupNumber[1]);
    //         $certificateLsupNumber =  $certificateLsupNumber[0] + 1;
    //         $certificateLsupNumber = str_pad( $certificateLsupNumber, 4, '0', STR_PAD_LEFT);
    //         $certificateLsupNumber = 'TSA-TC/' .  $certificateLsupNumber . '-IDN';
    //     } else {
    //         // if data in certificate model not available, then the number will be TSA-tc/0001-IDN
    //         $certificateLsupNumber = 'TSA-TC/0001-IDN';
    //     }

    //     return  $certificateLsupNumber;
    // }

    public function storeIspo(Request $request)
    {
        $companyName = $request->nama_perusahaan;
        $companyAddress = $request->alamat_perusahaan;
        $lingkup =  $request->lingkup;
        $no_sertifikat =  $request->no_sertifikat;
        $lokasiPabrik = $request->lokasi_pabrik;
        $lokasiKebun = $request->lokasi_kebun;
        $titikKoordinat = $request->titik_koordinat_lokasi;
        $luasKebun = $request->luas_kebun;
        $total_produksi = $request->total_produksi;
        $model_rantai_pemasok = $request->model_rantai_pemasok;
        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $third_surveillance = $request->third_surveillance;
        $fourth_surveillance = $request->fourth_surveillance;
        $reSertifikasi = $request->reSertifikasi;
        $certificateDate = $request->certificate_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;

        $certificateIspo = new Certificate_Ispo();
        $certificateIspo->nama_perusahaan = strtoupper($companyName);
        $certificateIspo->alamat_perusahaan = $companyAddress;
        $certificateIspo->lingkup = $lingkup;
        $certificateIspo->no_sertifikat = $no_sertifikat;
        $certificateIspo->lokasi_pabrik = $lokasiPabrik;
        $certificateIspo->lokasi_kebun = $lokasiKebun;
        $certificateIspo->titik_koordinat_lokasi = $titikKoordinat;
        $certificateIspo->luas_kebun = $luasKebun;
        $certificateIspo->total_produksi = $total_produksi;
        $certificateIspo->model_rantai_pemasok = $model_rantai_pemasok;
        // $certificateIspo->certificate_number = $agreementNumber;
        $certificateIspo->certificate_status = $certificate_status;
        $certificateIspo->first_surveillance = $first_surveillance;
        $certificateIspo->second_surveillance = $second_surveillance;
        $certificateIspo->third_surveillance = $third_surveillance;
        $certificateIspo->fourth_surveillance = $fourth_surveillance;
        $certificateIspo->reSertifikasi = $reSertifikasi;
        $certificateIspo->certificate_date = $certificateDate;
        $certificateIspo->expired_date = $expiredDate;
        $certificateIspo->note = $note;
        $certificateIspo->save();

        if ( $certificateIspo->save()) {
            alert()->success('Success', 'Certificate has been added');
        } else {
            alert()->error('Error', 'Certificate failed to add');
        }

        return redirect()->to('admin/certificates/ispo');
    }

    public function editIspo($id)
    {
        $certificateIspo = Certificate_Ispo::where('id', $id)->first();

        return view('admin.pages.certificate.ispo.edit', compact('certificateIspo'));
    }

    public function updateIspo($id, Request $request)
    {
        $companyName = $request->nama_perusahaan;
        $companyAddress = $request->alamat_perusahaan;
        $lingkup =  $request->lingkup;
        $no_sertifikat =  $request->no_sertifikat;
        $lokasiPabrik = $request->lokasi_pabrik;
        $lokasiKebun = $request->lokasi_kebun;
        $titikKoordinat = $request->titik_koordinat_lokasi;
        $luasKebun = $request->luas_kebun;
        $total_produksi = $request->total_produksi;
        $model_rantai_pemasok = $request->model_rantai_pemasok;
        // $agreementNumber = $this->agreement_number();
        $certificate_status = $request->certificate_status;
        $first_surveillance = $request->first_surveillance;
        $second_surveillance = $request->second_surveillance;
        $third_surveillance = $request->third_surveillance;
        $fourth_surveillance = $request->fourth_surveillance;
        $reSertifikasi = $request->reSertifikasi;
        $certificateDate = $request->certificate_date;
        $expiredDate = $request->expired_date;
        $note = $request->note;

        $certificateIspo = Certificate_Ispo::where('id', $id)->first();
        $certificateIspo->nama_perusahaan = strtoupper($companyName);
        $certificateIspo->alamat_perusahaan = $companyAddress;
        $certificateIspo->lingkup = $lingkup;
        $certificateIspo->no_sertifikat = $no_sertifikat;
        $certificateIspo->lokasi_pabrik = $lokasiPabrik;
        $certificateIspo->lokasi_kebun = $lokasiKebun;
        $certificateIspo->titik_koordinat_lokasi = $titikKoordinat;
        $certificateIspo->luas_kebun = $luasKebun;
        $certificateIspo->total_produksi = $total_produksi;
        $certificateIspo->model_rantai_pemasok = $model_rantai_pemasok;
        // $certificateIspo->certificate_number = $agreementNumber;
        $certificateIspo->certificate_status = $certificate_status;
        $certificateIspo->first_surveillance = $first_surveillance;
        $certificateIspo->second_surveillance = $second_surveillance;
        $certificateIspo->third_surveillance = $third_surveillance;
        $certificateIspo->fourth_surveillance = $fourth_surveillance;
        $certificateIspo->reSertifikasi = $reSertifikasi;
        $certificateIspo->certificate_date = $certificateDate;
        $certificateIspo->expired_date = $expiredDate;
        $certificateIspo->note = $note;
        $certificateIspo->save();

        if ($certificateIspo->save()) {
            alert()->success('Success', 'Certificate has been updated');
        } else {
            alert()->error('Error', 'Certificate failed to update');
        }

        return redirect()->to('admin/certificates/ispo');
    }

    public function generateQrCodeIspo($id)
    {
        // dd($id);
        $certificateIspo  = Certificate_Ispo::where('id', $id)->first();
        $name =  $certificateIspo->nama_perusahaan;
        $id = $certificateIspo->id;
        // dd($name);
        // dd ($certificate);

        //halaman frontend
        $qrcode = QrCode::margin(1)->size(1000)->format('png')->generate(route('detailverifikasiIspo', $id), base_path() . '/storage/app/public/' . $name . '.png');
        $path  = public_path('storage/');

        return response()->download($path . '' . $name . '.png', $name . '.png');
    }

    public function deleteIspo($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = Certificate_Ispo::find($id);
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

