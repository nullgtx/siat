<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\User;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view('pengaturanakun', ['users' => $users]);
    }
    /*
    public function getUser()
    {
        $users = DB::table('users')->find('id');
        if(count($users)>0){
            return view('ubahpassword',['users'=>$users]);
        }
        else{
            return redirect('/dashboard/kepala/pengaturanakun');
        }
    }
    */
    /* -------------------------------------------------------------------
    public function changePassword(Request $request){
        if (!(Hash::check($request->get('passwordlama'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('passwordlama'), $request->get('passwordbaru')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'passwordlama' => 'required',
            'passwordbaru' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('passwordbaru'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }
    ---------------------------------------------------- */
}
