<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\keluhanMail;
use App\Models\Message;
use App\Models\pengajuanMail;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // keluhan dan saran
    public function sendMail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        $message = new keluhanMail();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        \Mail::to(env('MAIL_USERNAME'))->queue(new \App\Mail\keluhanmail($details));

        if(\Mail::failures()){
            return redirect()->back()->with('error', 'Sorry! Please try again later');
        }else{
            return redirect()->back()->with('success', 'Thanks for contacting us!');
        }

    }

    public function indexKritik(){
        $messages = keluhanMail::orderBy('created_at', 'desc')->get();
        return view('admin.pages.messages.kritikSaran', compact('messages'));
    }

    // kelengkapan pengajuan
    public function kirimEmail(Request $request){
        $details = [
            'type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        if (!$request->filled('type')) {

            // toast('Pilih Jenis Kelengkapan Pengajuan Terlebih Dahulu', 'error');

            alert()->error('Failed', 'Pilih Jenis Kelengkapan Pengajuan Terlebih Dahulu')->persistent('Close');
            return redirect()->back();
        }

        $message = new pengajuanMail();
        $message->type = $request->type;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        \Mail::to(env('MAIL_USERNAME'))->queue(new \App\Mail\pengajuanmail($details));

        if(\Mail::failures()){
            return redirect()->back()->with('error', 'Sorry! Please try again latter');
        }else{
            return redirect()->back()->with('success', 'Thanks for contacting us!');
        }
    }

    public function indexPengajuan(){
        $messages = pengajuanMail::with('categories')->orderBy('created_at', 'desc')->get();


        return view('admin.pages.messages.pengajuan', compact('messages'));
    }
}
