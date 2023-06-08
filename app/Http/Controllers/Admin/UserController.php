<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        $superadmin = User::where('role', 0)->count();
        $admin = User::where('role', 1)->count();
        $author = User::where('role', 2)->count();
        return view("admin.pages.users.user", compact("users", "superadmin", "admin", "author"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->hasFile("photo")) {
            $photo = $request->file('photo');
            $fileName = $photo->getClientOriginalName();
            $photo->move(Storage::disk('public')->path('images/profile'), $fileName);
        } else {
            $fileName = "avatar.png";
        }

        $user = new User();
        $user->name = ucwords($request->name);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->photo = $fileName;
        $user->save();

        event(new Registered($user));

        return redirect()->back();
    }

    public function showJsonUser($id) {
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = ucwords($request->name);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasFile("photo")) {
            $photo = $request->file('photo');
            $fileName = $photo->getClientOriginalName();
            $photo->move(Storage::disk('public')->path('images/profile'), $fileName);
            $user->photo = $fileName;
        }
        $user->save();

        if ($user->save()) {
            Alert::success('Success', 'User has been updated');
        } else {
            Alert::error('Failed', 'User failed to update');
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $data = ['status' => false, 'code' => 'EC001', 'message' => 'Data failed to delete'];

            $delete = User::where('id', $id)->delete();
            if ($delete) {
                $data = ['status' => true, 'code' => 'SC001', 'message' => 'Certificate has been deleted'];
            }
        } catch (\Exception $ex) {
            $data = ['status' => false, 'code' => 'EEC001', 'message' => 'A system error has occurred. please try again later. ' . $ex];
        }
        return $data;

        return redirect()->back();
    }


    public function changeUserStatus($id)
    {
        $user = User::find($id);
        if ($user != null) {
            $user->status_user = !$user->status_user;
            $user->save();
        }

        if ($user->status_user == 1) {
            Alert::success('Success', 'User has been activated');
        } else {
            Alert::success('Success', 'User has been deactivated');
        }
        return redirect()->back();
    }


}
